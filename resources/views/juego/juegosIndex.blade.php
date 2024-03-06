<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Juegos</title>
</head>
<body>
    <a href="{{ route('juegos.create') }}">Nuevo juego</a>
    <h1>Lista de Juegos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>
                    Nombre del Juego
                </th>
                <th>
                    Desarrollador
                </th>
                <th>
                    Categoría
                </th>
                <th>
                    Precio
                </th>
                <th>
                    Fecha de Lanzamiento
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juegos as $juego)
            <tr>
                <td>
                    {{ $juego->Nombre_Juego }}
                </td>
                <td>
                    {{ $juego->Desarrollador }}
                </td>
                <td>
                    {{ $juego->Categoria }}
                </td>
                <td>
                    {{ $juego->Precio }}
                </td>
                <td>
                    {{ $juego->Fecha_Lanzamiento }}
                </td>
                <td>
                    <a href="{{ route('juegos.show', $juego->id) }}">Detalles</a>
                    <a href="{{ route('juegos.edit', $juego->id) }}">Editar</a>
                    <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST">
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
