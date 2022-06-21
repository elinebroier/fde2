{{--@extends('layout')--}}

{{--@section('content')--}}

{{--    <h1>Hallo dit is 500</h1>--}}

{{--@endsection--}}
    <!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' href="css/main.css">

    <ul class="nav">
        <li class="nav"><a href="/welcome">Home</a></li>
        <li class="nav"><a href="/hbo">HBO</a></li>
        <li class="dropdown">
            <a href="/profile" class="dropbt">Profile</a>
            <div class="dropdown-content">
                <a href="/photos">Photo's</a>
            </div>
        </li>
        <li class="nav"><a href="/grades">Dashboard</a></li>
        <li class="nav"><a href="/motivation">Motivation</a></li>
        <li class="nav"><a href="/profession">Profession</a></li>
        <li class="nav"><a href="/articles">Articles</a></li>
        <li class="nav"><a href="/faq">FAQ</a></li>
    </ul>
</head>

<body>

<div class="error" id="500">
    <h1><b style="color: red">500: </b>something went wrong</h1>
</div>

</body>
</html>

