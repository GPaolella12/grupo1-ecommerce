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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Products routes
Route::get('/productos', 'ProductsController@all');
Route::post('/productos/buscar', 'ProductsController@search');
Route::get('/productos/agregar', "ProductsController@add")->middleware("auth");
Route::post('/productos/agregar', "ProductsController@store")->middleware("auth");
Route::post('/productos/eliminar/{id}', 'ProductsController@delete')->middleware("auth");
Route::get('/productos/editar/{id}', 'ProductsController@edit')->middleware("auth");
Route::post('/productos/editar', 'ProductsController@update')->middleware("auth");
Route::get('/productos/admin', 'ProductsController@admin')->middleware("auth"); 
Route::get('/productos/{id}', 'ProductsController@detail');

// Brands routes
Route::get('marcas', 'BrandsController@all');
Route::get('marca/{id}', 'BrandsController@productsOfBrand');

// Categories routes
Route::get('categorias', 'categoriesController@all');
Route::get('categoria/{id}', 'categoriesController@productsOfCategory');

// Users routes
Route::get('/perfil', function(){ return view('profile'); });
