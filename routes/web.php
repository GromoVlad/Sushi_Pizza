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
Auth::routes();
Route::get('/', 'MainController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'Admin\CategoryController');
Route::resource('products', 'Admin\ProductController');
Route::resource('topping', 'Admin\ToppingController');
Route::get('products/{product}/addToppings', 'Admin\AddToppingController@addToppings')->name('addToppings');
Route::put('products/{product}/saveToppings', 'Admin\AddToppingController@saveToppings')->name('saveToppings');
