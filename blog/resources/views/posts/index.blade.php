<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h1>Listado de posts</h1>

<a href="/posts/nuevoPrueba">Crear post de prueba</a>

<ul>
@foreach ($posts as $post)
    <li>
        {{ $post->title }}

        <a href="/posts/{{ $post->id }}">Ver</a>

        <a href="/posts/editarPrueba/{{ $post->id }}">Editar prueba</a>

        <form action="/posts/{{ $post->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button>Borrar</button>
        </form>
    </li>
@endforeach
</ul>

{{ $posts->links() }}

</body>
</html>
