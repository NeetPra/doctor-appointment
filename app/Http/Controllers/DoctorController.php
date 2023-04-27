<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Availability;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Carbon\Carbon;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::whereIn("id", function ($query) {
            $query->select('doctor_id')
                ->from('availabilites')
                ->whereColumn('doctor_id', 'doctors.id')
                ->groupBy('doctor_id');
        })
            ->orderBy('id', 'DESC')
            ->get();
        return view('index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::orderBy('id', 'DESC')->get();
        return view('add', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    try {
        DB::beginTransaction();
        if (!$request->doctor_id) {
            return back()->with('error', "Something went wrong please try again!");
        }
        $doctorId = $request->doctor_id;
        $doctor = Doctor::find($doctorId);
        if (!$doctor) {
            return back()->with('error', "Something went wrong please try again!");
        }

        for ($i=1; $i <= 7 ; $i++) {
            $day = "";
            $status = 0;
            $startTime = null;
            $endTiime = null;

            $availability = $doctor->availability()->where(['days' => $i, 'doctor_id' => $doctorId])->first();
            if (!$availability) {
                $availability = new Availability();
            }

            if ($request->has("monday") && $i == 1) { $status = 1;
                $startTime = Carbon::parse($request->monday_start_time);
                $endTiime = Carbon::parse($request->monday_end_time);
            }
            if ($request->has("tuesday") && $i == 2) { $status = 1;
                $startTime = Carbon::parse($request->tuesday_start_time);
                $endTiime = Carbon::parse($request->tuesday_end_time);
            }
            if ($request->has("wednesday") && $i == 3) { $status = 1;
                $startTime = Carbon::parse($request->wednesday_start_time);
                $endTiime = Carbon::parse($request->wednesday_end_time);
            }
            if ($request->has("thursday") && $i == 4) { $status = 1;
                $startTime = Carbon::parse($request->thursday_start_time);
                $endTiime = Carbon::parse($request->thursday_end_time);
            }
            if ($request->has("friday") && $i == 5) { $status = 1;
                $startTime = Carbon::parse($request->friday_start_time);
                $endTiime = Carbon::parse($request->friday_end_time);
            }
            if ($request->has("saturday") && $i == 6) { $status = 1;
                $startTime = Carbon::parse($request->saturday_start_time);
                $endTiime = Carbon::parse($request->saturday_end_time);
            }
            if ($request->has("sunday") && $i == 7) { $status = 1;
                $startTime = Carbon::parse($request->sunday_start_time);
                $endTiime = Carbon::parse($request->sunday_end_time);
            }

            $availability->open_status = $status;
            $availability->doctor_id = $doctorId;
            $availability->days = $i;
            $availability->start_time = $startTime;
            $availability->end_time = $endTiime;
            $availability->save();
        }

        DB::commit();
        return redirect('doctor')->with('success', "Appointment Added Successfully!");
    } catch (\Exception $e) {
        return back()->with('error', "Something went wrong please try again!");
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $availabilites = $doctor->availability;
        if ($availabilites->isEmpty()) 
        {
            return back()->with('error', "Something went wrong please try again!");
        }

        $monday = $availabilites->where("days", 1)->first();
        $tuesday = $availabilites->where("days", 2)->first();
        $wednesday = $availabilites->where("days", 3)->first();
        $thursday = $availabilites->where("days", 4)->first();
        $friday = $availabilites->where("days", 5)->first();
        $saturday = $availabilites->where("days", 6)->first();
        $sunday = $availabilites->where("days", 7)->first();
        
       
        return view('edit', compact('doctor', 'availabilites', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return back()->with('error', "Something went wrong please try again!");
        }
        $doctor->availability()->delete();

        return back()->with('success', "Doctor removed Successfully!");
    }

    /**
     * get books the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doctorsGet(Request $request)
    {

        $page = $request->input('page', 1);
        $doctors = Doctor::whereIn("id", function ($query) use ($request) {
                            $query->select('doctor_id')
                                ->from('availabilites')
                                ->where(function ($query) use ($request) {
                                    if ($request->day) {
                                        $query->where('days', $request->day);
                                        $query->where('open_status', 1);
                                    }
                                    if ($request->startTime) {
                                        $query->where('days', $request->day);
                                        $query->where('open_status', 1);
                                    }
                                })
                                ->whereColumn('doctor_id', 'doctors.id')
                                ->groupBy('doctor_id');
                            })->where(function ($query) use ($request) {
                                if ($request->name) {
                                    $query->where('name', 'LIKE', '%' . $request->name . '%');
                                }
                            })
                            ->orderBy('id', 'DESC')
                            ->latest()
                            ->paginate(7);
        $pagination = $doctors->lastPage();
        return view('pages.table', compact('doctors', 'pagination', 'page'))->with('i', ($page - 1) * 7);
    }

     /**
     * get books the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showTime(Request $request)
    {
        $doctor = Doctor::find($request->doctorId);
        $availabilites = $doctor->availability;

        $monday = $availabilites->where("days", 1)->first();
        $tuesday = $availabilites->where("days", 2)->first();
        $wednesday = $availabilites->where("days", 3)->first();
        $thursday = $availabilites->where("days", 4)->first();
        $friday = $availabilites->where("days", 5)->first();
        $saturday = $availabilites->where("days", 6)->first();
        $sunday = $availabilites->where("days", 7)->first();

        return view('pages.show-time',  compact('doctor', 'availabilites', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'));
    }
}
