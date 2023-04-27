<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('availabilites')->delete();
        $doctors = DB::table('doctors')->get();

        foreach($doctors as $doctor){
            for ($i=1; $i <= 7 ; $i++) {
                DB::table('availabilites')->insert([
                    [
                        'doctor_id' => $doctor->id,
                        'days' => $i,
                        'open_status' => 0,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]
                ]);
            }
        };
    }
}
