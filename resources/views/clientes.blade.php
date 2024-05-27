<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <style>
        form {
            border:1px solid black;
        }

    </style>
</head>
<body>

    <form  action="/clientes" >
        <b>Nome: </b><input type="text" name="cliente"><br>
        <b>Email: </b><input type="email" name="email"><br>

        <br>

        <input type="submit" value="Salvar">

    </form>


    <hr>
    <hr>
    <label for="">Cliente: {{$cliente}}</label>
    <label for="">Email: {{$email}}</label>

    
</body>
</html>