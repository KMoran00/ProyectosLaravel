<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('title')->paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('posts.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('/');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect('/posts');

    }

    //Sesión 4 - Ej2
    public function nuevoPrueba()
    {
        Post::create([
            'title' => 'Título ' . rand(1, 100),
            'content' => 'Contenido ' . rand(1, 100),
        ]);

        return redirect('/posts');
    }

    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);

        $post->update([
            'title' => 'Título ' . rand(1, 1000),
            'content' => 'Contenido ' . rand(1, 1000),
        ]);

        return redirect('/posts');
    }

}
