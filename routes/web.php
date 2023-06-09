<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [DoctorController::class,'index'])->name('home');
Route::get('/doctor-get', [DoctorController::class,'doctorsGet']);
Route::get('/get-avaibility', [DoctorController::class,'showTime']);
Route::resource('/doctor', DoctorController::class);
