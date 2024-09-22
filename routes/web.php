<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/gallery', 'gallery');
Route::view('/appoint', 'appoint');

Route::get('/login', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'create']);
Route::post('/auth/register', [AuthController::class, 'store']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/create/new', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'view']);
