<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type = "text/css">

</head>
    <body>
        
        <h2>Lista de Maestros activos: </h2>
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    
                    <th>Clase</th>
                    <th>Nombre</th>
                    <th>Apellido P</th>
                    <th>Apellido M</th>
                    <th>Domicilio</th>
                    <th>Horario</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($maestros as $maestro)
                    <tr>
                    
                        <td>{{ $maestro->clase->nombre }}</td>
                        <td>{{ $maestro->nombre }}</td>
                        <td>{{ $maestro->apellido_p }}</td>
                        <td>{{ $maestro->apellido_m }}</td>
                        <td>{{ $maestro->domicilio }}</td>
                        <td>{{ $maestro->horario }}</td>

                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>