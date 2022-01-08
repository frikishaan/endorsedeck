<?php

namespace App\Http\Controllers;

use App\Models\Wall;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $walls = Wall::where('user_id', auth()->user()->id)->get();

        $testimonials = 0;
        foreach($walls as $wall)
        {
            $testimonials += $wall->testimonials()->count();
        }

        return view('dashboard', [
            'walls' => $walls,
            'testimonials' => $testimonials
        ]);
    }
}
