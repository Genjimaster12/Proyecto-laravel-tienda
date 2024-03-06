<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/formulario.css">
    <title>Nuevo Juego</title>
</head>
<body>
    <div class="nav">
        <a href="/juegos">Volver a la lista de juegos</a>
    </div>
    <form action="{{ route('juegos.store') }}" method="POST">
        @csrf
        <div>
            <h3>Nombre del Juego:</h3>
            <input type="text" name="Nombre_Juego" id="Nombre_Juego" value="{{ old('Nombre_Juego') }}">
            @error('Nombre_Juego')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <h3>Desarrollador:</h3>
            <input type="text" name="Desarrollador" id="Desarrollador" value="{{ old('Desarrollador') }}">
            @error('Desarrollador')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <h3>Categoría:</h3>
            <input type="text" name="Categoria" id="Categoria" value="{{ old('Categoria') }}">
            @error('Categoria')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <h3>Descripción:</h3>
            <textarea id="Descripcion" name="Descripcion" rows="5" cols="33">{{ old('Descripcion') }}</textarea>
            @error('Descripcion')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <h3>Precio:</h3>
            <input type="text" name="Precio" id="Precio" value="{{ old('Precio') }}">
            @error('Precio')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <h3>Fecha de Lanzamiento:</h3>
            <input type="date" name="Fecha_Lanzamiento" id="Fecha_Lanzamiento" value="{{ old('Fecha_Lanzamiento') }}">
            @error('Fecha_Lanzamiento')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <h3>Requisitos:</h3>
            <textarea id="Requisitos" name="Requisitos" rows="5" cols="33">{{ old('Requisitos') }}</textarea>
            @error('Requisitos')
                <div class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" id="button" name="button">Enviar formulario</button>
        </div>
    </form>
</body>
</html>
