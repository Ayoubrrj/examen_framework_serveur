@extends('layouts.app')

@section('content')
<div class="container mx-auto pb-12">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-2xl font-bold mb-4 text-center creepster">
                    Ajouter un monstre
                </h2>
                <form action="{{ route('monsters.store') }}" method="POST" class="space-y-6">
                    @csrf 

                    <div>
                        <label for="name" class="block mb-1 text-gray-200">Nom</label>
                        <input type="text" id="name" name="name" required
                            class="w-full border rounded px-3 py-2 text-gray-900 focus:ring-red-500"
                            placeholder="Nom du Monstre" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="pv" class="block mb-1 text-gray-200">PV</label>
                            <input type="number" id="pv" name="pv" required
                                class="w-full border rounded px-3 py-2 text-gray-900" placeholder="100" />
                        </div>
                        <div>
                            <label for="attack" class="block mb-1 text-gray-200">Attaque</label>
                            <input type="number" id="attack" name="attack" required
                                class="w-full border rounded px-3 py-2 text-gray-900" placeholder="50" />
                        </div>
                        <div>
                            <label for="defense" class="block mb-1 text-gray-200">Défense</label>
                            <input type="number" id="defense" name="defense" required
                                class="w-full border rounded px-3 py-2 text-gray-900" placeholder="30" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="type_id" class="block mb-1 text-gray-200">Type</label>
                            <select name="type_id" id="type_id" class="w-full border rounded px-3 py-2 text-gray-900">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="rarety_id" class="block mb-1 text-gray-200">Rareté</label>
                            <select name="rarety_id" id="rarety_id" class="w-full border rounded px-3 py-2 text-gray-900">
                                @foreach($rareties as $rarity)
                                    <option value="{{ $rarity->id }}">{{ $rarity->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block mb-1 text-gray-200">Description</label>
                        <textarea id="description" name="description" rows="4"
                            class="w-full border rounded px-3 py-2 text-gray-900"
                            placeholder="Histoire du monstre..."></textarea>
                    </div>

                    <div class="flex justify-between items-center pt-4">
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded transition duration-300">
                            Ajouter le monstre
                        </button>
                        <a href="{{ route('home') }}" class="text-red-400 hover:text-red-500">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection