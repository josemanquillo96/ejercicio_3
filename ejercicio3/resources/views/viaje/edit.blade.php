<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

</body>
<center>
    <h1>editar viaje</h1>
    <form action="{{ route('travel.update', $travel) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label>
            codigo
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $travel->codigo) }}">
        </label>
        <br>
        <label>
            numero plazas
            <br>
            <input type="text" name="num_plaza" value="{{ old('num_plaza', $travel->num_plaza) }}">
        </label>
        <br><br>
        <label>
            fecha
            <br>
            <input type="date" name="fecha" value="{{ old('fecha', $travel->fecha) }}">
        </label>
        <br><br>
        <label>
            otros datos
            <br>
            <input type="text" name="otros_datos" value="{{ old('otros_datos', $travel->otros_datos) }}">
        </label>
        <br>
        <br>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>
</center>

</html>
