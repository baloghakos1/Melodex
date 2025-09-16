<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

// ---Artists---
Route::get('/artist', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{artistName}', [ArtistController::class, 'show'])->name('artists.show');