<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\SongApiController;

Route::get('/songs', [SongApiController::class, 'index']);
Route::post('/song', [SongApiController::class, 'store'])->middleware('auth:sanctum');
Route::patch('/song/{id}', [SongApiController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/song/{id}', [SongApiController::class, 'destroy'])->middleware('auth:sanctum');

Route::post('/user/login', [UserApiController::class, 'login']);
Route::get('/users', [UserApiController::class, 'index'])->middleware('auth:sanctum');