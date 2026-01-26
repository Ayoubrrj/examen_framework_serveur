<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Monster;

class HomeController extends Controller
{
    public function home($count = 9, $view = 'layouts.app') // 9 est la valeur par défaut si je n'ecris rien au niveau de la route
{
    $randomMonster = Monster::inRandomOrder()->first();
    $latestMonsters = Monster::latest()->take($count)->get();

    // On utilise la variable $view au lieu d'un texte fixe de même que pour le count tous est spécifié niveau de la route
    return view($view, compact('randomMonster', 'latestMonsters'));
}
}

// public function home(){
//    $randomMonster = Monster::inRandomOrder()->first();
//    $lastsMonsters = Monster::latest()->take(3)->get();
//    return view("layouts.app", compact("randomMonster","lastsMonsters"));
// }
