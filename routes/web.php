<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ["Welcome to 'Trabajo Aca'"]; 
});

require __DIR__.'/servicesRoutes.php';

require __DIR__.'/categoriesRoutes.php';

require __DIR__.'/auth.php';