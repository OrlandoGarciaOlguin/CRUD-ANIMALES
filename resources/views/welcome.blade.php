<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('registro')
        @if (request()->isMethod('post'))
    <h2>Datos recibidos del formulario:</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Animales</h1>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Latin</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Habitat</th>
                            <th>Especie</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($animals as $animal)
                        <tr>
                            <td>{{$animal->nombre}}</td>
                            <td>{{$animal->latin}}</td>
                            <td>{{$animal->descripcion}}</td>
                            <td>
                                <img src="{{asset('storage').'/'.$animal->img}}" alt="" width="200">
                            </td>
                            <td>{{$animal->habitat->nombre}}</td>
                            <td>{{$animal->especie->nombre}}</td>
                            <td>
                                <a href="{{url('/animals/'.$animal->id.'/edit')}}" class="btn btn-warning">Editar</a>
                                <form action="{{url('/animals/'.$animal->id)}}" method="post" class="d-inline">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$animals->links()}}
            </div>
        </div>
@endif
        @livewireScripts
    </body>
</html>
