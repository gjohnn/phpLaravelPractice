<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

$routeName = "services";

Route::get('/'. $routeName, [ServicesController::class,'index']);
Route::get('/'. $routeName .'/create', [ServicesController::class,'index']);

Route::post('/create', [ServicesController::class,'create']);


