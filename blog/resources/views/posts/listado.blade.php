<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listadoposts</title>
</head>

<body>
    <h1>Listado de posts</h1>
    <ul>
        <li><a href="{{route('posts_ficha', ['id'=>1])}}">Post 1</a></li>
        <li>Post 2</li>
        <li>Post 3</li>
    </ul>
    @include('partials.nav')
    @yield('contenido')
</body>

</html>
