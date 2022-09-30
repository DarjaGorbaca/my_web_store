<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

//Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//Contact page
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', [ContactsController::class, 'submit'])->name('contact-form');


//About page
Route::get('/about', function () {
    return view('about');
})->name('about');

//Unsplash gallery
Route::get('/unsplash', [HomeController::class, 'getUnsplash'])->name('unsplash');

//Products

Route::get('/products', [ProductController::class, 'getAllProducts'])->name('products');

Route::get('/products/create', [ProductController::class, 'createNewProduct'])->name('products.create');

Route::post('/product/store', [ProductController::class, 'storeProducts'])->name('products.store');


//For adding an image
Route::get('/add-image', [ImageUploadController::class, 'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image', [ImageUploadController::class, 'storeImage'])
    ->name('images.store');

// For get products by ID

Route::get('/product_details/{id}', [ProductController::class, 'getProductsById']);

// For cart
Route::get('/checkout', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/checkout', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');

//Buy products

Route::post('/buy', [CartController::class, 'buyProducts'])->name('cart.buy');
Route::post('/place-order', [CartController::class, 'makeOrder'])->name('cart.place-order');

//CSV

Route::get('/uploadcsv', [ProductController::class, 'uploadCsv'])->name('upload');

//
