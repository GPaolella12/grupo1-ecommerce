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
Route::get('/productos', 'ProductsController@all');
Route::get('/producto/{id}', 'ProductsController@detail');
Route::post('/buscar', 'ProductsController@search');
Route::get('/productos/agregar', "ProductsController@add")->middleware("auth");
Route::post('/productos/agregar', "ProductsController@store")->middleware("auth");
Route::post('/eliminar/{id}', 'ProductsController@delete')->middleware("auth");

// Brands routes
Route::get('marcas', 'BrandsController@all');
Route::get('marca/{id}', 'BrandsController@productsOfBrand');

// Categories routes
Route::get('categorias', 'categoriesController@all');
Route::get('categoria/{id}', 'categoriesController@productsOfCategory');

// Users routes
Route::get('profile', function(){ return view('profile'); });
Route::get('buys', function(){ return view('buys'); });
