<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{

    protected $table = 'availabilites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'doctor_id', 'days', 'open_status', 'start_time', 'end_time'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }



}
