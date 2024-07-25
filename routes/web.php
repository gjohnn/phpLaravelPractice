<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()]; 
});

require __DIR__.'/servicesRoutes.php';
require __DIR__.'/categoriesRoutes.php';
require __DIR__.'/auth.php';
