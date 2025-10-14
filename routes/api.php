<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\SongApiController;
use App\Http\Controllers\ArtistApiController;
use App\Http\Controllers\MemberApiController;
use App\Http\Controllers\AlbumApiController;

Route::get('/artists', [ArtistApiController::class, 'index']);
Route::post('/artist', [ArtistApiController::class, 'store'])->middleware('auth:sanctum');
Route::patch('/artist/{id}', [ArtistApiController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/artist/{id}', [ArtistApiController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/members', [MemberApiController::class, 'index']);
Route::post('/member', [MemberApiController::class, 'store'])->middleware('auth:sanctum');
Route::patch('/member/{id}', [MemberApiController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/member/{id}', [MemberApiController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/albums', [AlbumApiController::class, 'index']);
Route::post('/album', [AlbumApiController::class, 'store'])->middleware('auth:sanctum');
Route::patch('/album/{id}', [AlbumApiController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/album/{id}', [AlbumApiController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/songs', [SongApiController::class, 'index']);
Route::post('/song', [SongApiController::class, 'store'])->middleware('auth:sanctum');
Route::patch('/song/{id}', [SongApiController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/song/{id}', [SongApiController::class, 'destroy'])->middleware('auth:sanctum');

Route::post('/user/login', [UserApiController::class, 'login']);
Route::get('/users', [UserApiController::class, 'index'])->middleware('auth:sanctum');