<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Pokémons de la Génération</title>
</head>


<body class="font-poppins bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md max-w-7xl mx-auto my-8">

    
        <div class="text-left mb-4">
            <a href="{{ route('generations') }}"> <img src="{{ asset('asset/icons/fleche.png') }}"> </a>
            <h1 class="text-center text-3xl mb-8"> Liste des Pokémons </h1>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($pokemons as $pokemon)
            <div class="bg-gray-50 p-4 rounded shadow">
                <img src="{{ $pokemon['sprites']['regular'] }}" alt="{{ $pokemon['name']['fr'] }}" class="mx-auto mb-4">

                <h2 class="text-center text-xl"> <span class="font-bold"> #{{ $pokemon['pokedexId'] }} </span> - {{ $pokemon['name']['fr'] }}</h2>

                <div class="flex justify-center items-center">
                @foreach($pokemon['types'] as $type)
                    <img class="w-10 h-10 m-2" src="{{ $type['image'] }}">
                    @endforeach
                </div>

            </div>

            @endforeach
        </div>
    </div>
</body>


</html>