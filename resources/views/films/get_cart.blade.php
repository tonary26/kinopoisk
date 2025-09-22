@extends('layouts.main')

@section('styles')
    @vite(['resources/css/main.css', 'resources/css/get_cart.css'])
@endsection

@section('content')
        <div class="cart-section">
            <div class="cart-image">
                <img class="film-image" src="https://upload.wikimedia.org/wikipedia/ru/c/c7/Doctor_Strange_poster.jpg" alt="Доктор Стрендж.jpg">
                <div class="upd-button">
                    <a href="{{ route('film.update', $film->id) }}">Обновить фильм</a>
                </div>
            </div>
            <div class="cart-info">
                <span>{{ $film->title }}</span>
                <p>{{ $film->description }}</p>
                <span>{{ $film->grade }}⭐</span>
            </div>
        </div>
@endsection