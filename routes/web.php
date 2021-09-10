<?php

use App\Http\Controllers\CategoryProduct;
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
//frontend
Route::get('/', 'HomeController@index');
Route::get('/trangchu','HomeController@index');


//backen

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');
// CategoryProduct
Route::get('/add_category_product','CategoryProduct@add_category_product');
Route::get('/all_category_product','CategoryProduct@all_category_product');
Route::post('/save_category_product','CategoryProduct@save_category_product');