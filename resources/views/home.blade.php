<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        table, th, td {
            border:1px solid black;
        }

    </style>
</head>
<body>

    <h1>Seja, Bem-Vindo</h1>

    <table>
        <tr>
            <b><th>ID</th></b>
            <b><th>Usuario</th></b>

        </tr>
        <tr>
            <td>{{$id}}</td>
            <td>{{$usuario}}</td>
        </tr>
        
    </table>

    
</body>
</html>