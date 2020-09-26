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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\IndexController@index')->name('admin_index');
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/products', 'Admin\ProductController');
Route::resource('admin/topping', 'Admin\ToppingController');
Route::resource('admin/products/{product}/size_product', 'Admin\SizeProductController');
Route::get('admin/products/{product}/addToppings', 'Admin\AddToppingController@addToppings')->name('addToppings');
Route::put('admin/products/{product}/saveToppings', 'Admin\AddToppingController@saveToppings')->name('saveToppings');
Route::get('/account', 'Personal\AccountController@index')->name('account');
Route::put('/account/edit/{user}', 'Personal\AccountController@editProfile')->name('profile.edit');
Route::put('/account/password/edit/{user}', 'Personal\AccountController@editPassword')->name('profile.password.edit');



Route::get('/{category?}', 'MainController@index')->name('index');
Route::get('/product/{id}', 'MainController@product')->name('product');


