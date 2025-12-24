<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Creado en la Sesión 4 Ej 2
        protected $fillable = [
        'title',
        'content'
    ];

    public function index(){
    $posts = Post::orderBy('title', 'asc')->paginate(5);
    return view('posts.index', compact('posts'));
    }

}
