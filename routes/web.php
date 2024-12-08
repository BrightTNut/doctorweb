<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AppointmentController;

Route::get('/', [AppointmentController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
