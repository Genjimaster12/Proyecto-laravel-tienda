<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Review</title>
</head>
<body>
    <a href="{{ route('reviews.index') }}">Listado de Reviews</a>
    <h1>Nueva Review</h1>
    
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
            <label for="Nombre_usuario">Nombre de Usuario</label>
            <input type="text" name="Nombre_usuario" value="{{ old('Nombre_usuario') }}">
            <br>
            <label for="Nombre_Juego">Nombre del Juego</label>
            <input type="text" name="Nombre_Juego" value="{{ old('Nombre_Juego') }}">
            <br>
            <label for="Puntuacion">Puntuación</label>
            <input type="number" name="Puntuacion" value="{{ old('Puntuacion') }}">
            <br>
            <label for="Comentario">Comentario</label>
            <textarea name="Comentario" cols="30" rows="10">{{ old('Comentario') }}</textarea>
            <br>
            <input type="submit" value="ENVIAR">
    </form>
</body>
</html>
