<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, "home"])->name('home');
Route::get('/shop', [FrontController::class, "shop"])->name('shop');
Route::get('/blog', [FrontController::class, "blog"])->name('blog');
Route::get('/contact', [FrontController::class, "contact"])->name('contact');
Route::get('/blog-details/{blog}', [FrontController::class, "blogDetails"])->name('blog-details');
Route::get('/product-details/{product}', [FrontController::class, "productDetails"])->name('product-details');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\FrontController@switchLang']);