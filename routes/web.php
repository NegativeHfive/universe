<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolarSystemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/solar-system',[SolarSystemController::class, 'index']);
//Route::get('/solar-system/{solarSystem}',[SolarSystemController::class, 'show']);

Route::get('/planets',[PlanetController::class, 'index']);
//Route::get('/planets/{planet}',[PlanetController::class, 'show']);