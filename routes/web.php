<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\PhaseController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('projets', ProjetController::class);
Route::resource('phases', PhaseController::class);

