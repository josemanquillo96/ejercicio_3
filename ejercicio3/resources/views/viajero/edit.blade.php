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

<form action="{{ route('traveler.update', $traveler) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')
    <label>
        codigo
        <br>
        <input type="text" name="nombre_viajero" value="{{ old('nombre_viajero', $traveler->nombre_viajero) }}">
    </label>
    <br>
    <label>
        numero social
        <br>
        <input type="text" name="dni" value="{{ old('dni', $traveler->dni) }}">
    </label>
    <br>
    <label>
        titulo
        <br>
        <input type="text" name="telefono" value="{{ old('telefono', $traveler->telefono) }}">
    </label>
    <br>
   
    <br>
    <br>
    <button type="submit">Enviar Formulario:</button>
</form>

</center>
</html>