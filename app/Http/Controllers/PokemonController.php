<?php

namespace App\Http\Controllers;

use App\Models\PokemonModel;

class PokemonController extends Controller
{

        public function ShowGenerations()
        {
            $generations = PokemonModel::fetchGenerations();
    
            return view('generations', compact('generations'));
        }
        
        public function show($generation)
{
    $pokemons = PokemonModel::fetchPokemonsByGeneration($generation);

    return view('pokemons.show', compact('pokemons'));
}
    }

