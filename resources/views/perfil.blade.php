<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Usuarios</title>
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
        <h2>Listado de usuarios</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>

            </tr>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
