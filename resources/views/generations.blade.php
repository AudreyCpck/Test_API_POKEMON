<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


</head>

<body class="font-poppins bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md max-w-7xl mx-auto my-8">
        <h1 class="text-center text-3xl mb-8"> Liste des générations de Pokémon </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($generations as $generation)
            <div class="bg-yellow-300 p-4 rounded shadow flex items-center space-x-4">
                <img src="{{ asset('asset/icons/pokeball.png') }}" alt="Pokeball" class="w-10 h-10">
                <a class="hover:underline hover:font-bold"
                   href="{{ route('pokemons.show', $generation['generation']) }}">
                    Génération {{ $generation['generation'] }} : Voir la liste de {{ $generation['from'] }} à {{ $generation['to'] }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>