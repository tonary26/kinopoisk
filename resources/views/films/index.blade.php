@extends('layouts.main')

@section('styles')
    @vite(['resources/css/main.css'])
    @vite(['resources/css/cart.css'])
@endsection

@section('content')
    <div class="main">
        @foreach($films as $film)
            <div class="film-cart">
                <div class="cart-img">
                    <a href="{{ route('film.get', $film->id)  }}"><img class="film-img" src="https://upload.wikimedia.org/wikipedia/ru/c/c7/Doctor_Strange_poster.jpg" alt="Доктор Стрендж.jpg"></a>
                </div>
                <div class="cart-title">
                    <span>{{ $film->title }}</span>
                </div>
                <div class="cart-description">
                    <p>{{ $film->description }}</p>
                </div>
                <div class="cart-grade">
                    <p>{{ $film->category->title }}</p>
                </div>
                <div class="cart-grade">
                    <span>{{ $film->grade }}⭐</span>
                </div>
                <form action="{{ route('film.delete', $film->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input class="delete-btn" type="submit" value="Удалить">
                </form>
            </div>
        @endforeach
    </div>
@endsection