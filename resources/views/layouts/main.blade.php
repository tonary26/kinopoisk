<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/main.css'])
    @yield('styles')
    <title>Магазин-продуктов</title>
</head>
<body>
<div class="header">
    <h1 class="logo">Кинопоиск</h1>
    <div class="nav-menu">
        <a href="#">Фильмы</a>
        <a href="#">Добавить фильм</a>
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