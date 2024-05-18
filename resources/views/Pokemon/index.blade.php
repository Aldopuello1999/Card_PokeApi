@extends('layouts.app')

@section('content')
    <div class="input-group mb-3">
        <input id="searchInput" type="text" class="form-control" placeholder="Escriba el nombre del Pokémon" aria-label="Buscar Pokémon" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
    </div>
    <div class="row justify-content-center text-center" id="pokemonContainer">
        @foreach ($pokemons as $pokemon)
            {{-- {{dd($pokemon)}} --}}
            <div class="card pokemon-card" style="width: 18rem; margin: 10px;">
                <img src="https://img.pokemondb.net/sprites/home/normal/{{ $pokemon->name }}.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon->name }}</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}

                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#detalleModal{{ $pokemon->name }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true">ver Detalles</i>
                    </a>

                </div>
            </div>
        @endforeach
         <!-- Modal -->
         @include('Pokemon.infromacionPokemon')
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $("#searchInput").on("keyup change", function() {
                var nameValue = $("#nameFilter").val().toLowerCase();
                console.log("Valor de búsqueda:", nameValue); // Verifica el valor de búsqueda
                    $("#pokemonContainer .pokemon-card").filter(function() {
                        var nameMatches = $(this).text().toLowerCase().indexOf(nameValue) > -1;


                        $(this).toggle(nameMatches);
                });
            });
        });
    </script>
@endsection
