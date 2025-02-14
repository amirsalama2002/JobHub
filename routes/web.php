<?php

use App\Http\Controllers\AboutOneController;
use App\Http\Controllers\CountactOneController;
use App\Http\Controllers\HomeOneController;
use App\Http\Controllers\ServerOneController;
use Illuminate\Support\Facades\Route;







Route::resource('/' , HomeOneController::class);
Route::resource('about' , AboutOneController::class);
Route::resource('server' , ServerOneController::class);
Route::resource('countact' , CountactOneController::class);



