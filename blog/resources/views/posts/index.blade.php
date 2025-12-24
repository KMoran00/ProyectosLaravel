<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de posts</title>
</head>
<body>

@include('partials.nav')

<h1>Listado de posts</h1>

@if ($posts->count() > 0)
    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>

                <a href="{{ route('posts.show', $post->id) }}">
                    Ver
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}"
                    method="POST"
                    style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
@else
    <p>No hay posts.</p>
@endif

</body>
</html>
