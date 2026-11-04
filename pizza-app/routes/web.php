<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzakController;

Route::get('/', [PizzakController::class, 'Fooldal']);
Route::get('/adatlap/{id}', [PizzakController::class, 'Adatlap']);
Route::get('/ajanlat', [PizzakController::class, 'Ajanlat']);
Route::get('/osszes', [PizzakController::class, 'Osszes']);
Route::get('/osszes/{p}', [PizzakController::class, 'OsszesP']);
