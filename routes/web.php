<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artist/{artistId}/description', [ArtistController::class, 'description'])->name('artist.description');
 