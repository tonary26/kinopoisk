
@extends('layouts.main')

@section('styles')
    @vite(['resources/css/main.css', 'resources/css/add.css'])
@endsection

@section('content')
    <div class="input-section">
        <form class="input-form" action="{{ route('film.edit', $film->id)  }}" method="post">
            @csrf
            @method('patch')
            <h1 class="form-title">Обновить фильм</h1>
            <div class="input-class">
                <input class="input" type="text" name="image" placeholder="Изображение..">
            </div>
            <div class="input-class">
                <input class="input" type="text" name="title" placeholder="Название..">
            </div>
            <div class="input-class">
                <textarea class="input" type="text" name="description" placeholder="Описания.."></textarea>
            </div>
            <div class="input-class">
                <input class="input" type="text" name="grade" placeholder="Оценка..">
            </div>
            <button type="submit" class="btn">Обновить</button>
        </form>
    </div>
@endsection