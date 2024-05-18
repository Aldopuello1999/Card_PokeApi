@extends('layouts.app')

@section('content')
    <div class="input-group mb-3">
        <input id="searchInput" type="text" class="form-control" placeholder="Escriba el nombre del Pokémon" aria-label="Buscar Pokémon" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="searchButton">Buscar</button>
    </div>

    <div class="row justify-content-center text-center" id="pokemonContainer">
        @foreach ($paginatedPokemons as $pokemon)
        {{-- {{dd($paginatedPokemons)}} --}}
            <div class="card pokemon-card" style="width: 18rem; margin: 10px;">
                <img src="https://img.pokemondb.net/sprites/home/normal/{{ $pokemon['name'] }}.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon['name'] }}</h5>
                    <div class="col">
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#detalleModal{{ $pokemon['name'] }}">
                            <i class="fa fa-arrow-right" aria-hidden="true">ver Detalles</i>
                        </a>
                    </div>

                </div>
                <!-- Modal -->
                @include('Pokemon.infromacionPokemon', ['pokemon' => $pokemon])
            </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-center">
        {{ $paginatedPokemons->links() }}
    </div>
@endsection

@section('js')
    <script>

        $(document).ready(function() {
            $("#searchButton").on("click", function() {
                var searchText = $("#searchInput").val().toLowerCase();

                $(".pokemon-card").each(function() {
                    var pokemonName = $(this).find(".card-title").text().toLowerCase();
                    if (pokemonName.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });

    </script>
@endsection
