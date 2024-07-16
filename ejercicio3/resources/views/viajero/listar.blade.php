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
        <a href="{{ route('traveler.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar un viajero</a>
        <table class="table" >
            <td>
                <h4>Nombre
            </td>
            <td>
                <h4>dni
            </td>
            <td>
                <h4>telefono
            </td>
            
            @foreach ($travelers as $traveler)
            
                <tr>
                    <td>{{ $traveler->id }}</td>
                    <td>{{ $traveler->nombre_viajero }}</td>
                    <td>{{ $traveler->dni }}</td>
                    <td>{{ $traveler->telefono }}</td>
                    
                    
                    {{-- <td>{{ $book->descripcion }} </td> --}}
                    <td><a href="{{ route('traveler.show', $traveler->id) }}" style="text-decoration: none">Mostrar</a></td>
                    <td><a href="{{ route('traveler.edit', $traveler->id) }}" style="text-decoration: none">Editar</a></td>
                    <td>
                        <form action="{{ route('traveler.destroy', $traveler->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    
</body>
</html>