<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::resource('services', ServicesController::class);
Route::get('services/category/{category}', [ServicesController::class, 'getByCategory']);