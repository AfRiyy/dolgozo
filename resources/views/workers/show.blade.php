<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolgozó</title>
</head>
<body>
    <h1>Dolgozó adatai</h1>
    <a href="/dolgozok">Vissza</a>
    <hr>
    <form action="/dolgozok/{{$worker->id}}/edit" method="post">
        @csrf
        @method('put')
        <label for="name">Név</label>
        <input name="name" type="text" value="{{$worker->name}}">
        <label for="city">Város</label>
        <input name="city" type="text" value="{{$worker->city}}">
        <label for="birthdate">Születés</label>
        <input name="birthdate" type="text" value="{{$worker->birthdate}}">
        <label for="salary">Fizetés</label>
        <input name="salary" type="text" value="{{$worker->salary}}">
        <button type="submit">Beküldés</button>
    </form>
</body>
</html>
