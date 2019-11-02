<?php

// localhost:8000/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/carrito', function () {
    return 'lista de productos agregados al carrito';
});

Route::get('/perfil', function () {
    return 'perfil del usuario';
});

Route::get('/posts', function () {
    return \App\Post::all();
});

Route::get('/posts/{id}', function ($id) {
    $post = new \App\Post(['text' => 'hola']);

    // return $post;

    dd($post);
});

Route::get('/productos', function () {
    $productos = [
        ['id' => 1, 'title' => 'Televisor', 'price' => 4699.43],
        ['id' => 2, 'title' => 'Laptop', 'price' => 50000.99],
        ['id' => 3, 'title' => 'Celular', 'price' => 12000.99],
    ];

    return view('productos', [
        'products' => $productos,
    ]);
});

Route::get('/productos/search', function () {
    return 'busqueda de productos';
});

Route::get('/productos/{id}', function ($id) {
    return view('detalle');
});

// login
// register
// logout
