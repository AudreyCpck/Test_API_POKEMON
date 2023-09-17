<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;

class PokemonModel extends Model
{
    use HasFactory;

public static function fetchGenerations()
{
    $client = new Client();

    $response = $client->request('GET', 'https://api-pokemon-fr.vercel.app/api/v1/gen');

    return json_decode($response->getBody(), true);

    
}

public static function fetchPokemonsByGeneration($generation)
{
    $client = new Client();
    $response = $client->request('GET', "https://api-pokemon-fr.vercel.app/api/v1/gen/{$generation}");

    return json_decode($response->getBody(), true);
}

}