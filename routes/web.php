<?php

use Illuminate\Support\Facades\Route;

Route::get('/lat1', 'App\Http\Controllers\Lat1Controller@index');
Route::get('/lat1/m2', 	'App\Http\Controllers\Lat1Controller@method2');
