<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return ['Laravel' => app()->version()]; 
});




//Services
Route::get('services/category/{category}', [ServicesController::class, 'getByCategory']);
Route::resource('services', ServicesController::class);

#require __DIR__.'/services.php';
require __DIR__.'/auth.php';
