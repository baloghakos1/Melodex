<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

// ---Artists---
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artist/{artistname}', [ArtistController::class, 'show'])->name('artists.show');
Route::get('/artist/{artistname}/description', [ArtistController::class, 'description'])->name('artists.description');
 
