<?php

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
    return view('home');
});

Auth::routes();

// listing my selling products
Route::resource('listing', 'ListingController')->middleware('auth');
Route::get('/listing/create', 'ListingController@create')->middleware('auth');

// Product Listing Controller
Route::get('/products', 'ProductController@index');

Route::get('mytrademe', function(){

})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
