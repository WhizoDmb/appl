<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pilotos</h1>
    <table>
        @foreach ($pilotos as $piloto)
            <tr>
                <td>{{ $piloto->id }}</td>
                <td>{{ $piloto->nombre }}</td>
                <td>{{ $piloto->Apaterno }}</td>
                <td>{{ $piloto->Amaterno }}</td>
                <td>{{ $piloto->CRUP }}</td>
                <td>{{ $piloto->RFC }}</td>
                <td>{{ $piloto->nacionalidad }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
