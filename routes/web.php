<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('artists',ArtistController::class);