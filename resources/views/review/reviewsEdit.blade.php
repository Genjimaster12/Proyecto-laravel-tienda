<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comentario</title>
</head>
<body>
    <a href="{{ route('reviews.index') }}">Volver al Listado de Revisiones</a>
    <h1>Editar Comentario</h1>
    <form action="{{ route('reviews.update', $review) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="Nombre_Usuario">Nombre de Usuario</label>
        <input type="text" name="Nombre_Usuario" value="{{ old('Nombre_Usuario') ?? $review->Nombre_usuario }}">
        <br>
        <label for="Nombre_Juego">Nombre del Juego</label>
        <input type="text" name="Nombre_Juego" value="{{ old('Nombre_Juego') ?? $review->Nombre_Juego }}">
        <br>
        <label for="Puntuacion">Puntuación</label>
        <input type="number" name="Puntuacion" value="{{ old('Puntuacion') ?? $review->Puntuacion }}">
        <br>
        <label for="Comentario">Comentario</label>
        <textarea name="Comentario" cols="30" rows="10">{{ old('Comentario') ?? $review->Comentario }}</textarea>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>
