<?php

use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RestaurantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use \App\Http\Controllers\ManagerController;
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

//Single Route
Route::get('/',[RestaurantController::class, 'index']);
Route::get('/food/{order}-{slug}', [RestaurantController::class, 'show']);
Route::get('/lang/{lang}', [RestaurantController::class, 'lang'])->name('lang');

Route::resource('food', \App\Http\Controllers\FoodController::class)->middleware('auth');
Route::resource('order', OrderController::class)->middleware('auth');
Route::resource('home', HomeController::class);
Route::resource('manager', ManagerController::class);

