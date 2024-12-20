<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::all();
        
        return view('admin.movies.index', compact('movies'));
    }

    public function home(){
        $movies = Movies::all();
        return view('home', compact('movies'));
    }
    

    public function rent($id)
    {

        $movie = Movies::findOrFail($id);
        
        return view('rentpage', compact('movie'));
    }

    public function store(Request $request)
    {
        // Validate movie data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'rating' => 'required|string|max:255',
        ]);

        // Store movie data
        Movies::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'rating' => $request->rating,
        ]);

        return redirect()->route('admin.movies.index')->with('success', 'Movie created successfully!');
    }

    public function edit($id)
    {
        // Find movie by ID
        $movie = Movies::findOrFail($id);
        
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        // Find movie by ID
        $movie = Movies::findOrFail($id);

        // Validate and update movie data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'rating' => 'required|string|max:255',
        ]);

        // Update movie
        $movie->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'rating' => $request->rating,
        ]);

        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully!');
    }

    public function destroy($id)
    {
        // Find movie by ID
        $movie = Movies::findOrFail($id);

        // Delete movie
        $movie->delete();

        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully!');
    }
}
