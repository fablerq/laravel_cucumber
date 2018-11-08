{{--'App\\Post' => $baseDir . '/app/Post.php',--}}
{{--26 строка autoload_classmap php cum--}}
<!doctype html>
<html lang="en">
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
<h2>Подойся к прилавку, вы видите 10 случайных огурцов. <br> Улыбчивый продавец сообщает вам, что у них сегодня много огурцов,
    @inject('provider', 'App\Http\Controllers\CucumberController')
    целых {{ $provider->countrows() }}.
</h2>
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
            <td><a href="/cucumber_project/public/api/customer/{{$cucumber->id}}">Посмотреть</a></td>
        </tr>
        @endforeach
    </table>
<br>

<h2>Попросить показать огурчики из определенной страны...</h2>
<table>
    <tr>
        <td>id</td>
        <td>Страна</td>
    </tr>
    @foreach ($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td><a href="/cucumber_project/public/api/customer/country/{{$country->id}}">показать</a></td>
        </tr>
    @endforeach
</table>




<h2>Отойти от прилавка <a href="/cucumber_project/public/">Отойти</a></h2>

{{--{{ $cucumbers }}--}}
</body>
</html>
