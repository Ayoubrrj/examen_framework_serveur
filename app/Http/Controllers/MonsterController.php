<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Monster;
use App\Monster as AppMonster;

class MonsterController extends Controller
{
    public function show(Monster $monster)
    {
        return view('monsters.show', compact('monster'));
    }
}
