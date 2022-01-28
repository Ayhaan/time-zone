<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
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
Route::post('/search', [FrontController::class, "search"])->name('search');

Route::get("/admin/dashboard", [FrontController::class, "admin"])->name("admin");
//ADMIN
    //blog
Route::resource('/admin/blog', BlogController::class);
    //blog - soflt delete
Route::get('/admin/poubelle/blog', [BlogController::class, 'poubelle'])->name('blog.poubelle');
Route::get('/admin/restore/{id}', [BlogController::class, "restore"])->name('restore');
Route::delete('/admin/definitive/{id}', [BlogController::class, "forceDelete"])->name('forceDelete');
    //product
Route::resource('/admin/product', ProductController::class);
    //news
Route::post('/admin/newsletter/store', [NewsletterController::class, "newsletter"])->name('newsletter');
Route::get('/admin/newsletter', [NewsletterController::class, 'index'])->name('news.index');
    //mailbox
Route::resource("admin/mailbox", MailController::class);