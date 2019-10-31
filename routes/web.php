<?php

// localhost:8000/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/productos/{id}', function () {
    return view('detalle');
});

Route::get('/carrito', function () {
    return 'lista de productos agregados al carrito';
});

Route::get('/perfil', function () {
    return 'perfil del usuario';
});

// login
// register
// logout
