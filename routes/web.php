<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/transaction', [TransactionController::class, 'transaction']);
Route::get('/user/{id}/name/{name}', [UserProfileController::class, 'user']);
Route::get('/category/food-beverage', [CategoryController::class, 'food']);
Route::get('/category/beauty-health', [CategoryController::class, 'beauty']);
Route::get('/category/home-care', [CategoryController::class, 'homecare']);
Route::get('/category/baby-kid', [CategoryController::class, 'baby']);