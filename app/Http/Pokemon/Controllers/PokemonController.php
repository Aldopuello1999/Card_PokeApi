<?php

namespace App\Http\Pokemon\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://pokeapi.co/api/v2/pokemon-species/?limit=200'); // Cambia el límite según tus necesidades
        $data = json_decode($response->getBody(), true);
        // dd($data);
        if ($response->getStatusCode() !== 200) {
            return response()->json([
                'success' => false,
                'redirect' => route('Pokemon.index'),
                'error' => 'Error, api no encontrada'
            ]);
        }

        $pokemons = collect($data['results']);

        // Paginación manual
        $perPage = 20; // Número de elementos por página
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $pokemons->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $paginatedPokemons = new LengthAwarePaginator($currentPageItems, $pokemons->count(), $perPage);
        $paginatedPokemons->setPath(request()->url());

        return view('Pokemon.index', ['paginatedPokemons' => $paginatedPokemons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // crear vistas ejemplo : https://codesandbox.io/p/sandbox/pokedex-pokeapi-e-vuejs-q6w3f?file=%2Fsrc%2Fcomponents%2FPokemonSearch.vue
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
