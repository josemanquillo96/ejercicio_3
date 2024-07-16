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
        <h1>Viaje</h1>
        <form action="{{ route('travel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf {{-- token o seguridad  --}}
            <label class="form-label">
                codigo
                <br>
                <input class="form-control" type="text" name="codigo" class="form-control" required>
            </label>
            <br>
            <label class="form-label">
                numero plazas
                <br>
                <input class="form-control" type="text" name="num_plaza" class="form-control" required>
            </label>
            <br><br>
            <label class="form-label">
                fecha
                <br>
                <input class="form-control" type="date" name="fecha" class="form-control" required>
            </label>
            <br><br>
            <label class="form-label" >
                otros datos
                <br>
                <input style="height:100px" class="form-control" type="text" name="otros_datos" class="form-control" required>
            </label>
            <br>
            <br>
            <br>
            <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
        </form>
    </center>
</body>

</html>
