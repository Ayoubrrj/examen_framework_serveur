<?php

namespace App\Http\Controllers;

use App\Monster;
use App\Type;      
use App\Rareties;  
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MonsterController extends Controller
{
    /**
     * Centralise les données nécessaires au layout (app.blade.php)
     * pour éviter les erreurs "Undefined variable" sur toutes les pages.
     */
    private function getCommonData()
    {
        return [
            'randomMonster'  => Monster::inRandomOrder()->first(),
            'latestMonsters' => Monster::latest()->take(3)->get(),
        ];
    }

     // Affiche la view createForm
    public function create()
    {
        $types = Type::all();
        $rareties = Rareties::all();

        return view('monsters.createForm', array_merge(
            compact('types', 'rareties'), 
            $this->getCommonData()
        ));
    }


    // Enregistre le monstre en base de données
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string',
            'pv'          => 'required|integer', 
            'attack'      => 'required|integer',
            'defense'     => 'required|integer',
            'type_id'     => 'required|exists:monster_types,id',
            'rarety_id'   => 'required|exists:rareties,id',
            'description' => 'required|string',
        ]);

        // Ajout des champs obligatoires non présents dans le formulaire pour remplir la DB
        $data['rarity']  = 'Commun'; 
        $data['user_id'] = 1; 

        Monster::create($data);

        return redirect('/');
    }


    // Affiche la page de détail d'un monstre
    public function show(Monster $monster)
    {
        return view('monsters.show', array_merge(
            compact('monster'), 
            $this->getCommonData()
        ));
    }

    // Affiche le formulaire d'édition
    public function edit(Monster $monster)
    {
        $types = Type::all();
        $rareties = Rareties::all();

        return view('monsters.editForm', array_merge(
            compact('monster', 'types', 'rareties'), 
            $this->getCommonData()
        ));
    }

    // Met à jour un monstre existant
    public function update(Request $request, Monster $monster)
    {
        $data = $request->validate([
            'name'        => 'required|string',
            'pv'          => 'required|integer', 
            'attack'      => 'required|integer',
            'defense'     => 'required|integer',
            'type_id'     => 'required|exists:monster_types,id',
            'rarety_id'   => 'required|exists:rareties,id',
            'description' => 'required|string',
        ]);

        $monster->update($data);

        return redirect('/');
    }

    // Supprime un monstre
    public function destroy(Monster $monster)
    {
        $monster->delete();
        return redirect('/');
    }
}