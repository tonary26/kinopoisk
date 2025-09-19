<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Film;

class FilmController extends Controller
{
    public function films() {
        $films = Film::all();

        return view('films.index', compact('films'));
    }

    public function add() {
        return view('films.add');
    }

    public function addShop() {
        $film = request()->validate([
            'image' => 'string',
            'title' => 'string',
            'description' => 'string',
            'grade' => 'integer'
        ]);

        Film::create($film);
        return redirect()->route('film.index');
    }
}
