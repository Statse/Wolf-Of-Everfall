<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ResourcesController;

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
    return view('home');
})->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::post('/items', [ItemsController::class, 'store']);

Route::get('/prices', [PricesController::class, 'index'])->name('prices');
Route::post('/prices', [PricesController::class, 'store']);

Route::get('/resources', [ResourcesController::class, 'index'])->name('resources');
// Route::post('/resources', [ResourcesController::class, 'store']);

Route::get('/resource/{id}', [ResourceController::class, 'index'])->name('resource');

