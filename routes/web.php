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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit/{edit_token}', 'HomeController@edit')->name('edit');
Route::post('/update/{edit_token}', 'HomeController@update')->name('update');
Route::get('/request', 'HomeController@request')->name('request');
Route::post('/request', 'HomeController@request_store')->name('request_store');

Route::get('/review', 'HomeController@review')->name('review');
Route::post('/review', 'HomeController@review_store')->name('review_store');



// admin route
Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth'], 'namespace' => 'admin'], function(){
	//admin dashborad route
	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

	//donor routes
	Route::get('/donor', 'DonorController@index')->name('admin.donor');
	Route::get('/donor/details/{edit_token}', 'DonorController@details')->name('admin.donor.details');

	//blood request routes
	Route::get('/request', 'RequestController@index')->name('admin.request');
	Route::get('/request/{id}', 'RequestController@accept')->name('admin.accept');


	//donate history route
	Route::post('/donor/details', 'DonateHistoryController@store')->name('donate.history');

	// Review Routes
	Route::get('/review', 'ReviewController@index')->name('admin.review');
	Route::get('/review/accept/{id}', 'ReviewController@accept')->name('admin.review.accept');
	Route::get('/review/delete/{id}', 'ReviewController@delete')->name('admin.review.delete');

	// Stock Routes
	Route::get('/stock', 'StockController@index')->name('admin.stock');
	Route::post('/stock', 'StockController@store')->name('admin.stock.store');
	Route::get('/stock/sell/{id}', 'StockController@sell')->name('admin.stock.sell');
	Route::get('/stock/delete/{id}', 'StockController@delete')->name('admin.stock.delete');
	
});
