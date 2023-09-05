@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    
    @livewireStyles
</head>
<body class="antialiased">
<div>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Latin</th>
                    <th>Especie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                <tr>
                    <td>{{$animal->nombre}}</td>
                    <td>{{$animal->latin}}</td>
                    <td>{{$animal->especie->tipo}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        @livewireScripts
    </body>
</html>