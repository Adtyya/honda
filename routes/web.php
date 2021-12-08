<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [LoginController::class, ('index')]);
Route::post('/login', [LoginController::class, ('authenticate')]);
Route::post('/logout', [LoginController::class, ('logout')]);

Route::get('/', [PostController::class, ('index')])->name('login');
Route::get('/dashboard', [PostController::class, ('show')])->middleware('auth');
Route::get('/dashboard/add', [PostController::class, ('add')])->middleware('auth');
Route::get('/dashboard/edit/{id}', [PostController::class, ('edit')])->middleware('auth');
Route::post('/update/post/{id}', [PostController::class, ('update')]);
Route::post('/store', [PostController::class, ('store')]);
Route::get('/post/delete/{id}', [PostController::class, ('destroy')]);
Route::get('/detail/{post:id}', [PostController::class, ('detail')]);