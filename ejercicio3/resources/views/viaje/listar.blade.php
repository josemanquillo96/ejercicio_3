<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <center>
        <h1>Lista de viajes</h1>
        <br><br><br>
        <a href="{{ route('travel.create') }}" class="btn btn-success" style="backgrand-color:red;">crear viaje</a>
        <table class="table" >
            <td>
                <h4>codigo
            </td>
            <td>
                <h4>numero plaza
            </td>
            <td>
                <h4>fecha
            </td>
            <td>
                <h4>otros datos
            </td>
            
            @foreach ($travels as $travel)
            
                <tr>
                    <td>{{ $travel->id }}</td>
                    <td>{{ $travel->num_plaza}}</td>
                    <td>{{ $travel->fecha}}</td>
                    <td>{{ $travel->otros_datos}}</td>
                    
                    {{-- <td>{{ $info->descripcion }} </td> --}}
                    <td><a href="{{ route('travel.show', $travel->id) }}" class="btn btn-primary" >Mostrar</a></td>
                    <td><a href="{{ route('travel.edit', $travel->id) }}" class="btn btn-warning" >Editar</a></td>
                    <td>
                        <form action="{{ route('travel.destroy', $travel->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


