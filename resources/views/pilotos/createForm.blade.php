<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('pilotos.store') }}">
        @csrf
        @method('POST')
        <label for="N">NOMBRE</label>
        <input type="text" name="Nombre" id="N">
        <br>

        <label for="AP">APELLIDO PATERNO</label>
        <input type="text" name="Apaterno" id="AP">
        <br>

        <label for="AM">APELLIDO MATERNO</label>
        <input type="text" name="Amaterno" id="AM">
        <br>

        <label for="C">CURP</label>
        <input type="text" name="CURP" id="C">
        <br>

        <label for="R">RFC</label>
        <input type="text" name="RFC" id="R">
        <br>

        <label for="NC">NACIONALIDAD</label>
        <input type="text" name="Nacionalidad" id="NC">
        <br>

        <input type="submit" value="CREAR">

    </form>
</body>
</html>
