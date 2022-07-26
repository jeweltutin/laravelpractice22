<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function()
{
   return view('pages.home');
});
Route::get('/about', function()
{
   return view('pages.contact');
});

Route::get('/datatable', function(){
	return view('datatable');
});

Route::get('/bootstarp', function(){
    return view('/bootstrapview');
});
Route::get('/bootstarp5', function(){
    return view('/bootstrap5view');
});

Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::delete('product/delete/{id}',[ProductController::class, 'destroy'])->name('product.destroy');

Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::delete('category/delete/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
//Route::get('/category/{category_id}',[ProductController::class, 'showCategoryProducts'])->name('category.products.show');

Route::get('shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('home', [HomeController::class, 'index'])->name('home.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
Route::resource('profile', ProfileController::class);
