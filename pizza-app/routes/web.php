<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzakController;

Route::get('/', [PizzakController::class, 'Fooldal']);
Route::get('/adatlap/{id}', [PizzakController::class, 'Adatlap']);
Route::get('/ajanlat', [PizzakController::class, 'Ajanlat']);
Route::get('/osszes', [PizzakController::class, 'Osszes']);
Route::get('/osszes/{p}', [PizzakController::class, 'OsszesP']);

# create
Route::view('/add', 'add');                                 # Form megjelenítése
Route::post('/add', [PizzakController::class, 'Add']);      # Button műkdése + hozzáadás

# mod
Route::get('/mod/{id}', [PizzakController::class, 'ModForm']);
Route::post('/mod/{id}', [PizzakController::class, 'ModBTN']);
