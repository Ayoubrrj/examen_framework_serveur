<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Monster;

class HomeController extends Controller
{
    public function home()
    {
        $randomMonster = Monster::inRandomOrder()->first();
        $latestMonsters = Monster::latest()
        ->take(9)
        ->get();
        return view('layouts.app', compact('randomMonster', 'latestMonsters'));
    }
}
