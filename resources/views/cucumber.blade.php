<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Огурчик № {{$cucumber->id}}</title>
</head>
<body>
<p>Смотри какой огурчик, какой <b style="color: red;"> {{ $cucumber->color }} </b> и всего за <b style="color: red;"> {{ $cucumber->price }} </b>. Бери, бери, не пожалеешь.</p>
<ul>
    <li>Номер: {{ $cucumber->id }}</li>
    <li>Цена: {{ $cucumber->price }}</li>
    <li>Цвет: {{ $cucumber->color }}</li>
    <li>Страна: {{ $cucumber->country->name }} (ID страны: {{ $cucumber->country_id }})</li>
    <li>Есть пупырышки? {{ $cucumber->smooth->name }}  (0 или 1)</li>
</ul>
    <h3>Забрать с собой этот огурчик <a href="/cucumber_project/public/customer/delete/{{ $cucumber->id }}">клац</a></h3>
    <h3>Оглядять прилавок еще раз <a href="/cucumber_project/public/customer">клац</a></h3>
</body>
</html>
