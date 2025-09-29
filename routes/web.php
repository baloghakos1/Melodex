<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

// ---Artists---
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artist/{artistname}', [ArtistController::class, 'show'])->name('artists.show');
Route::get('/artist/{artistname}/description', [MemberController::class, 'index'])->name('artists.description');
 
