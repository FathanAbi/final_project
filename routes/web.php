<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/input', [FilmController::class, 'showInputForm']);
Route::post('/input', [FilmController::class, 'store']);
Route::get('/films', [FilmController::class, 'showFilms']);