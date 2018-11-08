<html>
<head>
    <meta charset="utf-8">
    <title>Прилавок</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

<h2>Зайдя за прилавок и поздоровавшись с продавцом, вы решили начать раскладывать новый товар...</h2>


<form action="/cucumber_project/public/producer/create" method="post">
    <table>
        <tr>
            {{ csrf_field() }}
            <td>Цена</td>
            <td><input type='text' name='price'/></td>
        </tr>
        <tr>
            <td>Цвет</td>
            <td><input type='text' name='color'/></td>
        </tr>
        <tr>
            <td>Страна (id)</td>
            <td><input type='text' name='country_id'/></td>
        </tr>
        <tr>
            <td>Пупырчатость (1 / 0)</td>
            <td><input type='text' name='is_smooth'/></td>
        </tr>
        <tr>
            <td><input type='submit' name='submit' value="Добавить огурец"/></td>
        </tr>
    </table>
</form>

<table>
    <tr>
        <td>id</td>
        <td>Страна</td>
    </tr>
    @foreach ($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
        </tr>
    @endforeach
</table>

<h2>Хочу уйти отсюда...<a href="/cucumber_project/public/">Отойти</a></h2>

</body>
</html>