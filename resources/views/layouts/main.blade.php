<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('styles')
    <title>КиноПоиск</title>
</head>
<body>
<div class="header">
    <a href="{{ route('film.index')  }}"> <h1 class="logo">Кинопоиск</h1> </a>
    <div class="nav-menu">
        <a href="{{ route('film.index') }}">Фильмы</a>
        <a href="{{ route('film.add') }}">Добавить фильм</a>
    </div>
    <div class="nav-auth">
        <a href="#">Login</a>
        <a href="#">Sign-up</a>
    </div>
</div>
<div class="main">
    @yield('content')
</div>
</body>
</html>