<?php

Route::get('/', function () {
    return 'bienvenido'; 
});

Route::get('/products', 'ProductsController@index');
Route::get('/products/new', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('/products', 'ProductsController@store');

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{movie}', 'MoviesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
