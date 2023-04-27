<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $table = 'doctors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'address'
    ];

    public function availability()
    {
        return $this->hasMany(Availability::class);
    }



}
