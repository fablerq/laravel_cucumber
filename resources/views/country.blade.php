<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Страна {{ $cucumbers['1']->country->name }}</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<p><b>{{ $cucumbers['1']->country->name }}</b> - самые лучшие огурцы</p>
<table>
    <tr style="border: 1px solid black;">
        <td>Номер</td>
        <td>Цена</td>
        <td>Цвет</td>
        <td>Action</td>
    </tr>
    @foreach ($cucumbers as $cucumber)
        <tr>
            <td>{{ $cucumber->id }}</td>
            <td>{{ $cucumber->price }}</td>
            <td>{{ $cucumber->color }}</td>
            <td>{{ $cucumber->country->name }}</td>
            <td><a href="/cucumber_project/public/customer/{{$cucumber->id}}">Посмотреть</a></td>
        </tr>
    @endforeach
</table>
<h3>Оглядять прилавок еще раз <a href="/cucumber_project/public/customer">клац</a></h3>
</body>
</html>
