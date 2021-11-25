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
        
        <h2>Lista de Alumnos activos: </h2>
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    
                    <th>Maestro</th>
                    <th>Nombre</th>
                    <th>Apellido P</th>
                    <th>Apellido M</th>
                    <th>Domicilio</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        
                        <td>{{ $alumno->maestro->nombre }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellido_p }}</td>
                        <td>{{ $alumno->apellido_m }}</td>
                        <td>{{ $alumno->domicilio }}</td>

                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>