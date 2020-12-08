<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UangmakanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalisantriController;
use App\Http\Controllers\SantriwsController;
use App\Http\Controllers\PresensiwsController;
use App\Http\Controllers\UangmakanwsController;
use App\Http\Controllers\PengasuhController;
use App\Http\Controllers\SantripController;
use App\Http\Controllers\PresensipController;
use App\Http\Controllers\UangmakanpController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('base', [AdminController::class, 'showBase']);

Route::get('dashboard', [AdminController::class, 'showDashboard']);



Route::prefix('admin')->middleware('auth')->group(function() {
	Route::get('dashboard', [UserController::class, 'dashboard']);
	Route::get('profil', [UserController::class, 'profil']);
	Route::resource('santri', SantriController::class)->middleware('auth');
	Route::resource('presensi', PresensiController::class)->middleware('auth');
	Route::resource('uangmakan', UangmakanController::class)->middleware('auth');
	Route::get('uangmakan/kwitansi/{kwitansi}', [UangmakanController::class, 'kwitansi']);
	Route::resource('user', UserController::class)->middleware('auth');
 });

Route::get('base', [WalisantriController::class, 'showBase']);

Route::get('dashboard', [WalisantriController::class, 'showDashboard']);



Route::prefix('walisantri')->middleware('auth')->group(function() {
	Route::get('dashboard', [SantriwsController::class, 'dashboard']);
	Route::get('profil', [SantriwsController::class, 'profil']);
	Route::resource('santri', SantriwsController::class)->middleware('auth');
	Route::resource('presensi', PresensiwsController::class)->middleware('auth');
	Route::resource('uangmakan', UangmakanwsController::class)->middleware('auth');
 });

Route::get('base', [PengasuhController::class, 'showBase']);

Route::get('dashboard', [PengasuhController::class, 'showDashboard']);


Route::prefix('pengasuh')->middleware('auth')->group(function() {
	Route::get('dashboard', [SantripController::class, 'dashboard']);
	Route::get('profil', [SantripController::class, 'profil']);
	Route::resource('santri', SantripController::class)->middleware('auth');
	Route::resource('presensi', PresensipController::class)->middleware('auth');
	Route::resource('uangmakan', UangmakanpController::class)->middleware('auth');
	Route::get('uangmakan/kwitansi/{kwitansi}', [UangmakanpController::class, 'kwitansi']);
 });

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



