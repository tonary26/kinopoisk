<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmController;


Route::get('/', [FilmController::class, 'films'])->name('film.index');

Route::get('/add', [FilmController::class, 'add'])->name('film.add');
Route::post('/add/shop', [FilmController::class, 'addShop'])->name('film.addShop');

Route::get('/show/{film}', [FilmController::class, 'show'])->name('film.get');

Route::get('/{film}/update', [FilmController::class, 'update'])->name('film.update');
Route::patch('/{film}/edit', [FilmController::class, 'edit'])->name('film.edit');

Route::delete('/delete/{film}', [FilmController::class, 'delete'])->name('film.delete');