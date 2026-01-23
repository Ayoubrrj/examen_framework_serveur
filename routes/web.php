<?php

use Illuminate\Support\Facades\Route;

// Route Par Défaut:
// PATTERN: /
// CTRL: PagesController
// Action: Home

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
->name('layouts.app');

// ROUTE PAR DÉFAUT:
// PATTERN: /recipes/id/slug
// CTRL: RecipesController
// ACTION: show
Route::get('/monsters/{monster}/{slug}', [\App\Http\Controllers\MonsterController::class, 'show'])->name('monsters.show');
