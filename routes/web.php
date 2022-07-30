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
