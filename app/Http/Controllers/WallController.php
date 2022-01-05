<?php

namespace App\Http\Controllers;

use App\Models\Wall;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function index()
    {
        $walls = Wall::where('user_id', auth()->id())->get();

        return view('walls.index', compact('walls'));
    }
    
    public function create()
    {
        return view('walls.create');
    }

    public function show(string $id)
    {
        $wall = Wall::findOrFail($id);

        return view('walls.show', compact('id', 'wall'));
    }
    
    public function edit(string $id)
    {
        $wall = Wall::findOrFail($id);

        return view('walls.edit', compact('wall', 'id'));
    }
}
