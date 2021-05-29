<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;

Route::get('/', [AbsenController::class,'absen']);