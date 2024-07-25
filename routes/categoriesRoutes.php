<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::resource('/categories', CategorieController::class);
