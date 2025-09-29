<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AlbumCrudController;
use App\Http\Controllers\SongCrudController;
use App\Http\Controllers\ArtistCrudController;
use App\Http\Controllers\MemberCrudController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('artists',ArtistController::class);

Route::get('/crud.index', function () {
    return view('crud.index');
})->name('crud.index');
// ---Crud---
Route::get('/crud.albums', [AlbumCrudController::class, 'index'])->name('crud.albums');
Route::get('/crud.songs', [SongCrudController::class, 'index'])->name('crud.songs');
Route::get('/crud.artists', [ArtistCrudController::class, 'index'])->name('crud.artists');
Route::get('/crud.members', [MemberCrudController::class, 'index'])->name('crud.members');
Route::resource('albumcrud',AlbumCrudController::class);
Route::resource('songcrud',SongCrudController::class);
Route::resource('artistcrud',ArtistCrudController::class);
Route::resource('membercrud',MemberCrudController::class);
// ---Artists---
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artist/{artistname}', [ArtistController::class, 'show'])->name('artists.show');
Route::get('/artist/{artistname}/description', [MemberController::class, 'index'])->name('artists.description');
Route::get('/artist/{artistname}/{albumid}', [SongController::class, 'index'])->name('artists.songs');