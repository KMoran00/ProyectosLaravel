<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesión 2 - E2 Navegación</title>
</head>

<body>
    <!-- Barra navegación - Sesión 2 Ej 2 -->
    <nav>
        <a href= "{{ route('inicio') }}">Página de inicio </a>
        <br>
        <a href= "{{ route('posts_listado') }}"> Listado de posts </a>
        <hr>
    </nav>

    <!-- A partir de la plantilla base, define otras dos vistas en una subcarpeta , llamadas
y . Como título de cada página pon un
brevetextodeloqueson(porejemplo,"Listadoposts"y"Fichapost"),ycomocontenidodemomento
deja un encabezado que indique la página en la que estamos: "Listado de posts" o "Ficha del post
XXXX", donde XXXX será el identificador del post que habremos pasado por la URL (y que deberás
-->
</body>

</html>
