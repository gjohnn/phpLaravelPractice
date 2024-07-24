<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

$servicesRoute = "services";

Route::get("/$servicesRoute", [ServicesController::class,'index']);
Route::post("/$servicesRoute/create", [ServicesController::class,'store']);
Route::get("/$servicesRoute/{{id}}", [ServicesController::class,'store']);


