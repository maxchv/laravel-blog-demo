<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/post">
    @csrf
    <input type="text" name="test"/>
    <input type="submit">
</form>

<a href="{{route('post.show', ['id'=>1])}}">Post info</a>
</body>
</html>
