<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Nová registrácia</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .bold {
            font-weight: bold;
        }
        .pr {
            padding-right: 1rem;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="bold pr">Dátum a čas:</td>
            <td>{{ Carbon\Carbon::now()->format('d.m.Y H:i') }}</td>
        </tr>
        <tr>
            <td class="bold pr">Meno:</td>
            <td>{{ $request['name'] }}</td>
        </tr>
        <tr>
            <td class="bold pr">Bydlisko:</td>
            <td>{{ $request['address'] }}</td>
        </tr>
        <tr>
            <td class="bold pr">Rok narodenia:</td>
            <td>{{ $request['birth_year'] }}</td>
        </tr>
        <tr>
            <td class="bold pr">Športový klub:</td>
            <td>{{ $request['club'] }}</td>
        </tr>
        <tr>
            <td class="bold pr">Kategória behu:</td>
            <td>{{ $request['category'] }}</td>
        </tr>
    </table>

</body>
</html>