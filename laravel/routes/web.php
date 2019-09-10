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
    return view('layouts/app');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Products routes
Route::get('/productos', 'productsController@all');
Route::get('/producto/{id}', 'productsController@detail');
Route::post('/buscar', 'productsController@search');
Route::get('/productos/agregar', 'productsController@add');
Route::post('/productos/agregar', 'productsController@store')->middleware("auth");
Route::post('/delete/{id}', 'productsController@delete')->middleware("auth");

// Brands routes
Route::get('brands', 'brandController@all');
Route::get('brand/{id}', 'brandController@detail');

// Categories routes
Route::get('categories', 'categoryController@all');
Route::get('category/{id}', 'categoryController@detail');

// Users routes
Route::get('profile', function(){ return view('profile'); });
Route::get('buys', function(){ return view('buys'); });
