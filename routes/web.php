<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
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

Route::get('/crud.albums', [AlbumCrudController::class, 'index'])->name('crud.albums');
Route::get('/crud.songs', [SongCrudController::class, 'index'])->name('crud.songs');
Route::get('/crud.artists', [ArtistCrudController::class, 'index'])->name('crud.artists');
Route::get('/crud.members', [MemberCrudController::class, 'index'])->name('crud.members');
Route::resource('albumscrud',AlbumCrudController::class);
Route::resource('songscrud',SongCrudController::class);
Route::resource('artistscrud',ArtistCrudController::class);
Route::resource('memberscrud',MemberCrudController::class);