<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name ('inicio');

//Sesión 1: creación ruta
Route::get('/posts', function(){
    return "Listado de posts ";
})->name('posts_listado');

//Sesión 2: EJERCICIO 1
Route::get('/posts/{id}', function ($id){
    return "Ficha del post ".$id;
})-> where('id', "[0-9]")
->name('posts_ficha');


?>
