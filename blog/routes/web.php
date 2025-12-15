<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('plantilla');
})->name('inicio');

//Sesión 1: creación ruta
Route::get('/posts', function () {
    return "Listado de posts ";
})->name('posts_listado');

//Sesión 2: EJERCICIO 1
Route::get('/posts/{id}', function ($id) {
    //return "Ficha del post " . $id;
    return view('inicio') -> with('id', $id);
})->where('id', "[0-9]")
    ->name('posts_ficha');

//Ejemplo de vinculación con vista
