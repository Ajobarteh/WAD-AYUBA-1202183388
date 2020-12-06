<?php

use App\Product;

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

Route::get('/', function () {
    $product = Product::all();
    return view('welcome', compact('product'));
});


// Route for products
            // ULR                          FUNCTION            ROUTE
Route::get('products/index', 'ProductResourceController@index')->name('products.index');
Route::get('products/create', 'ProductResourceController@create')->name('products.create');
Route::post('products/store', 'ProductResourceController@store')->name('products.store');
Route::get('products/edit/{id}', 'ProductResourceController@edit')->name('products.edit');
Route::put('products/update/{id}', 'ProductResourceController@update')->name('products.update');
Route::get('products/show/{id}', 'ProductResourceController@show')->name('products.show');
Route::delete('products/delete/{id}', 'ProductResourceController@delete')->name('products.delete');


Route::get('orders', 'ProductResourceController@orders')->name('products.order');
Route::get('addtocart/{id}', 'ProductResourceController@addtocart')->name('products.addtocart');
Route::post('orders/process', 'ProductResourceController@OrederProcess')->name('products.orderprocess');
Route::get('history', 'ProductResourceController@history')->name('products.history');

// Route::resource('products', 'ProductResourceController');

// Route::get('orders', 'OrderController@index')->name('products.index');