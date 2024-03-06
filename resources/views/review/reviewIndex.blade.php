<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de reviews</title>
</head>
<body>
    <a href="{{ route('reviews.create') }}">Nueva review</a>
    <h1>Lista de reviews</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre de usuario</th>
                <th>Nombre del juego</th>
                <th>Puntuación</th>
                <th>Comentario</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)     
                <tr>
                    <td>{{ $review->Nombre_usuario }}</td>
                    <td>{{ $review->Nombre_Juego }}</td>
                    <td>{{ $review->Puntuacion }}</td>
                    <td>{{ $review->Comentario }}</td>
                    <td>{{ $review->created_at }}</td>
                    <td>
                        <a href="{{ route('reviews.show', $review->id) }}">Detalles</a>
                        <a href="{{ route('reviews.edit', $review->id) }}">Editar</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
