<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="d-flex justify-content-around bg-dark p-3">
        <a href="/"><h3>Home</h3></a>
        <a href="{{route('membre.index')}}"><h3>Membre</h3></a>
        <a href=""><h3>Genre</h3></a>
    </nav>
    @yield('content')
    <script src="{{asset('js/app.js')}}"><script>
</body>
</html>