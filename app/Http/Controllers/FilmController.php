<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    
    public function showInputForm()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'release_year' => 'required|integer',
            'director' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Film::create([
            'title' => $request->input('title'),
            'release_year' => $request->input('release_year'),
            'director' => $request->input('director'),
            'image_path' => $imagePath,
        ]);

        return redirect('/input')->with('success', 'Film added successfully.');
    }

    public function showFilms()
    {
        $films = Film::all();
        return view('films', ['films' => $films]);
    }

}
