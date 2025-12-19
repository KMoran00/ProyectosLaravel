<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fichadelpost</title>
</head>

<body>
    <h1>Ficha del post <?php echo $id; ?> </h1>

    @include('partials.nav')
    @yield('contenido')
</body>

</html>
