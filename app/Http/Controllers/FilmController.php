<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Film;

class FilmController extends Controller
{
    public function films()
    {
        $films = Film::all();

        return view('films.index', compact('films'));
    }

    public function add()
    {
        return view('films.add');
    }

    public function addShop()
    {
        $film = request()->validate([
            'image' => 'string',
            'title' => 'string',
            'description' => 'string',
            'grade' => 'integer'
        ]);

        Film::create($film);
        return redirect()->route('film.index');
    }

    public function show(Film $film)
    {
        return view('films.get_cart', compact('film'));
    }

    public function delete(Film $film)
    {
        $film->delete();

        return redirect()->route('film.index');
    }

    public function update(Film $film)
    {
        return view('films.update', compact('film'));
    }

    public function edit(Film $film)
    {
        $data = request()->validate([
            'image' => 'string',
            'title' => 'string',
            'description' => 'string',
            'grade' => 'integer'
        ]);

        $film->update($data);
        return redirect()->route('film.get', $film->id);
    }
}
