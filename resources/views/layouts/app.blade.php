<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body, a {
            font-family: cursive;
            background: blue;
            color: yellow;
        }
    </style>
</head>
<body>
<h1>@yield('title')</h1>
@yield('content')
</body>
</html>
