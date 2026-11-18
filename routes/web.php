<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Route: alamat "/" dijalankan oleh LandingController::index
Route::get('/', [LandingController::class, 'index']);