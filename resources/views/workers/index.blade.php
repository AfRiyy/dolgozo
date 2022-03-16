<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Összes dolgozó</title>
</head>

<body>
    <h1>Dolgozók</h1>
    <hr>
    <table>
        <tr>
            <th>Név</th>
            <th>Város</th>
            <th>Születés</th>
            <th>Fizetés</th>
        </tr>
        @foreach ($workers as $worker)
        <tr>
        <td>{{$worker->name}}</td>
        <td>{{$worker->city}}</td>
        <td>{{$worker->birthdate}}</td>
        <td>{{$worker->salary}}</td>
        <td>
            <form action="/dolgozok/{{$worker->id}}" method="get">
                @csrf
                <button onclick="submit">
                    Szerkesztés
                </button>
            </form>
        </td>
        <td>
            <form action="/dolgozok/{{$worker->id}}/delete" method="post">
                @method('delete')
                @csrf
                <button onclick="submit">
                    Törlés
                </button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    <hr>
    <h2>Új dolgozó</h2>
    <form action="/dolgozok/create" method="post">
        @csrf
        <label for="name">Név</label>
        <input name="name" type="text" value="">
        <label for="city">Város</label>
        <input name="city" type="text" value="">
        <label for="birthdate">Születés</label>
        <input name="birthdate" type="text" value="">
        <label for="salary">Fizetés</label>
        <input name="salary" type="text" value="">
        <button type="submit">Beküldés</button>
    </form>
</body>

</html>
