<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('plantilla');
})->name('inicio');

//Sesión 3 - Ej 1
Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'edit']);

//Sesión 1: creación ruta
Route::get('/posts', function () {
    return view('posts.index');
})->name('posts_listado');

//Sesión 2: EJERCICIO 1
Route::get('/posts/{id}', function ($id) {
    return view('posts.show')->with('id', $id);
})->where('id', "[0-9]")
->name('posts_ficha');

//Sesión 2: EJERCICIO 2
//Ejemplo de vinculación con vista

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Sesión 4 - rutas
Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);
