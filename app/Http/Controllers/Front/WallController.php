<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Wall;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function show(string $username, string $id)
    {      
        return view('front.walls.show', compact('username', 'id'));
    }

    public function index(string $username, string $id)
    {
        return view('front.walls.index', [
            'testimonials' => Testimonial::where('wall_id', $id)->get()
        ]);
    }

    public function embed(string $id)
    {
        return view('embed.wall', [
            'testimonials' => Testimonial::where('wall_id', $id)->get()
        ]);
    }
}
