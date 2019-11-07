<?php

Route::get('/', function () {
    return 'bienvenido';    
});

Route::get('/products', 'ProductsController@index');
Route::get('/products/new', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('/products', 'ProductsController@store');
