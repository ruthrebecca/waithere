<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [UserController::class, 'index']);
Route::get('/login/error', [UserController::class, 'error']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login/verify', [UserController::class, 'verify']);
Route::get('/register', [UserController::class, 'create']);
Route::post('/register/store', [UserController::class, 'store']);

Route::get('/resto', [RestoranController::class, 'index']);
Route::get('/resto/search', [RestoranController::class, 'search']);
Route::get('/resto/{id}', [RestoranController::class, 'show']);
Route::get('/resto/{id}/reservasi', [ReservasiController::class, 'index']);
Route::get('/reservasiku', [ReservasiController::class, 'reservasiku']);
Route::post('/reservasi/store', [ReservasiController::class, 'store']);
Route::post('/reservasi/update', [ReservasiController::class, 'update']);
Route::get('/reservasi/cancel', [ReservasiController::class, 'cancel']);


Route::resource('user', UserController::class);
Route::resource('restoran', RestoranController::class);
// Route::resource('reservasi', ReservasiController::class);

