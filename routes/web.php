<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonsterController;

// Route Par Défaut:

// PATTERN: /
// CTRL: HomeController
// Action: Home
Route::get('/', [HomeController::class, 'home'])
    ->name('home')
    ->defaults('count', 3)
    ->defaults('view', 'layouts.app');


// Route 9 MONSTERS:

// PATTERN: /monsters
// CTRL: HomeController
// Action: Home
Route::get('/latest_monsters', [HomeController::class, 'home'])
    ->name('monsters.index')
    ->defaults('count', 9)
    ->defaults('view', 'monsters.index');


// ROUTES DE CRÉATION:

// PATTERN: /monsters/create
// CTRL: MonsterController
// Action: create
Route::get('/monsters/create', [MonsterController::class, 'create'])->name('monsters.createForm');

// PATTERN: /monsters
// CTRL: MonsterController
// ACTION: store
Route::post('/monsters', [MonsterController::class, 'store'])->name('monsters.store');



// Route EDIT:

// PATTERN: /monsters/{monster}/edit
// CTRL: MonsterController
// Action: edit
Route::get('/monsters/{monster}/edit', [MonsterController::class, 'edit'])->name('monsters.edit');

// PATTERN: /monsters/{monster}
// CTRL: MonsterController
// ACTION: update
Route::put('/monsters/{monster}', [MonsterController::class, 'update'])->name('monsters.update');

// Route SHOW:

// PATTERN: /monsters/{monster}/{slug}
// CTRL: MonsterController
// Action: show
Route::get('/monsters/{monster}/{slug}', [MonsterController::class, 'show'])->name('monsters.show');


// Route DESTROY:

// PATTERN: /monsters/{monster}
// CTRL: MonsterController
// Action: destroy
Route::delete('/monsters/{monster}', [MonsterController::class, 'destroy'])->name('monsters.destroy');