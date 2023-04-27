<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->delete();
        
        DB::table('doctors')->insert([
            [
                'name' => 'Dr. Andreas johansson',
                'address' => '305 W 46th st, New York, NY 10036',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Aman',
                'address' => '20 W 25th st, New York, NY 10001',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Raj Shisodiya',
                'address' => '69 W 02th st, New York, NY 10018',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Leszek wlodarczak',
                'address' => '36 W 65th st, New York, NY 10018',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Dawid malecki',
                'address' => '25 W 46th st, New York, NY 10019',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Jonny Lundgrn',
                'address' => '14 W 56th st, New York, NY 10020',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Tonny',
                'address' => '05 W 06th st, New York, NY 10012',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Rahul',
                'address' => '58 W 41th st, New York, NY 10022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Nitesh',
                'address' => '14 W 56th st, New York, NY 10010',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Lorenc',
                'address' => '15 W 16th st, New York, NY 10011',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Tom Crue',
                'address' => '19 W 36th st, New York, NY 10013',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dr. Shashi',
                'address' => '10 W 19th st, New York, NY 10006',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
