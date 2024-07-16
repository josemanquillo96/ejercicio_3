<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="{{ route('traveler.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf {{-- token o seguridad  --}}
        <label  class="form-label">
            nombre
            <br>
            <input class="form-control" type="text" name="nombre_viajero"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            dni
            <br>
            <input class="form-control" type="text" name="dni"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            telefono
            <br>
            <input class="form-control" type="text" name="telefono"  class="form-control" required>
        </label>
        <br>
        
    
        <br>
        
        <br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
</center>
    
</body>
</html>