<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('plantilla');
})->name('inicio');

//Sesión 1: creación ruta
Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

//Sesión 2: EJERCICIO 1
Route::get('/posts/{id}', function ($id) {
    return view('posts.ficha')->with('id', $id);
})->where('id', "[0-9]")
  ->name('posts_ficha');

//Sesión 2: EJERCICIO 2
//Ejemplo de vinculación con vista

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
