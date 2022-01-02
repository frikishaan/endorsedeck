<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Wall;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function show(string $username, string $id)
    {      
        return view('front.walls.show', compact('username', 'id'));
    }

    public function index()
    {

    }
}
