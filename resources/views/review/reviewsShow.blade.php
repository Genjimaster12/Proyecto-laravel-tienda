<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la review</title>
</head>
<body>
    <a href="{{ route('reviews.index') }}">Volver al Listado de Reviews</a>
    <h1>Detalle de la review</h1>

    <ul>
        <li>Nombre de Usuario: {{ $review->Nombre_usuario }}</li>
        <li>Nombre del Juego: {{ $review->Nombre_Juego }}</li>
        <li>Puntuación: {{ $review->Puntuacion }}</li>
        <li>Comentario: {{ $review->Comentario }}</li>
        <li>Fecha de Creación: {{ $review->created_at }}</li>
    </ul>
</body>
</html>