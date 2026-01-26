<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Monster;

class HomeController extends Controller
{
    public function home($count = 9, $view = 'layouts.app') // 9 est la valeur par défaut si je n'ecris rien pendant la route
{
    $randomMonster = Monster::inRandomOrder()->first();
    $latestMonsters = Monster::latest()->take($count)->get();

    // On utilise la variable $view au lieu d'un texte fixe
    return view($view, compact('randomMonster', 'latestMonsters'));
}
}