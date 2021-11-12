<?php

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

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'welcome']);
Route::get('/services', [App\Http\Controllers\WebsiteController::class, 'services']);
Route::get('/shop', [App\Http\Controllers\WebsiteController::class, 'shop']);
Route::get('/about', [App\Http\Controllers\WebsiteController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contact']);
Route::get('/quote', [App\Http\Controllers\WebsiteController::class, 'quote']);
Route::get('/cart', [App\Http\Controllers\WebsiteController::class, 'cart']);
Route::get('/checkout', [App\Http\Controllers\WebsiteController::class, 'checkout']);
Route::get('/product', [App\Http\Controllers\WebsiteController::class, 'product']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
