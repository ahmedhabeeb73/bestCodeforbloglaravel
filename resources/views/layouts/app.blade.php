<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Basic app</title>
</head>
<body>
@include('layouts.header')

@if(session('status'))
    <div>
        {{session('status')}}
    </div>
@endif

@yield('content')
</body>
</html>
