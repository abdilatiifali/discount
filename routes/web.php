<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Http;
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

Route::get("/test", function () {
	$response = Http::withHeaders(['X-Meili-API-Key' => 'latiifabdi'])
					->get("http://127.0.0.1:7700/indexes/products/search")->json();

	dd($response);
});	


Route::get('/', [HomeController::class, 'index'])->name('home');


// static pages
Route::view('/about-us', 'about-us')->name('about');
Route::view('/contact-us', 'contact-us')->name('contact');
Route::view('/blog', 'blog')->name('blog');
Route::view('/faq', 'faq')->name('faq');


Route::get('shops', [ShopController::class, 'index'])->name('shops');
Route::get('shops/{category}', [ShopController::class, 'show']);
Route::get("/products/{product}", [ProductController::class, 'show']);


Route::get("/carts", [CartController::class, 'index']);
Route::post("/carts", [CartController::class, 'store']);
Route::get("/carts/{cartId}", [CartController::class, 'remove']);
Route::post("/carts/{cart}", [CartController::class, 'update']);


Route::view('/checkout', 'checkout');





