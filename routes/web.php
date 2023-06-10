<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PorductsAndCategoriesController;
use Monolog\Handler\RotatingFileHandler;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registration'])->name('registration');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'validate_login'])->name('validate_login');

Route::get('/logout', [LogoutController::class , 'logout'])->name('logout');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('/auth/facebook', [FacebookAuthController::class, 'redirect'])->name('facebook-auth');
Route::get('/auth/facebook/call-back', [FacebookAuthController::class, 'callbackFacebook']);

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/add/Detail', [ProfileController::class, 'detail'])->name('detail');
Route::post('/add/Detail', [ProfileController::class , 'update'])->name('updateDetail');

Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::post('/product', [ProductController::class, 'productAdd'])->name('product-add');

Route::post('/add-category', [CategoryController::class, 'category'])->name('add-category');

Route::get('/productAndCategory', [PorductsAndCategoriesController::class, 'productAndCategory'])->name('all-productAndCategory');

Route::get('/delete-product/{id}', [ProductController::class, 'delete']);
Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);

Route::get('/edit-product/{id}', [ProductController::class, 'edit_product'])->name('edit-product');
Route::post('/edit-product', [ProductController::class, 'update_product'])->name('update-product');

Route::get('/edit-category/{id}', [CategoryController::class, 'edit_category'])->name('edit-category');
Route::post('/edit-category', [CategoryController::class, 'update_category'])->name('update-category');

Route::get('/search' , [HomeController::class, 'search'])->name('search');

Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

