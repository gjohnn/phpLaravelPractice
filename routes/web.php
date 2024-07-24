<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


// Route::get('/asd', function () {
//     return ;
// });

// Route::get('/dsa', function () {
//     $name = "juan";
//     return ['HOLAAAAA' => $name];
// });

require __DIR__.'/services.php';
require __DIR__.'/auth.php';
