<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/products', 'products');
Route::view('/gallery', 'gallery');
Route::view('/appoint', 'appoint');

Route::get('/login', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
