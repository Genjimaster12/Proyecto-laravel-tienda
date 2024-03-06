<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Juego</title>
</head>
<body>
    <div class="nav">
        <a href="/juegos">Volver a la lista de juegos</a>
    </div>
    <h1>Detalles del Juego</h1>
    <ul>
        <li>Nombre del Juego: {{$juego->Nombre_Juego}}</li>
        <li>Desarrollador: {{$juego->Desarrollador}}</li>
        <li>Categoría: {{$juego->Categoria}}</li>
        <li>Descripción: {{$juego->Descripcion}}</li>
        <li>Precio: {{$juego->Precio}}</li>
        <li>Fecha de Lanzamiento: {{$juego->Fecha_Lanzamiento}}</li>
        <li>Requisitos: {{$juego->Requisitos}}</li>
    </ul>
</body>
</html>
