<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alumnos</title>
        <style>
            body {
                margin: auto;
                padding: 50px;
            }
            table {
                border-collapse:collapse;
                width: 100%;
            }
            table, td, th {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h2>Listado de Alumnos</h2>
        <table>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
            @foreach ($usuarios as $usuario)
                <tr>
                 <td>{{ $usuario->nombre_apellido }}</td>
                    <td>{{ $usuario->edad }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->direccion }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
