@extends('layouts.app')

    @section('content')
        <div class="row justify-content-center text-center">
                @foreach ($pokemons as $pokemon)
                {{-- {{dd($pokemon)}} --}}
                <div class="card" style="width: 18rem;">
                    <img src="https://img.pokemondb.net/sprites/home/normal/{{$pokemon->name}}.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pokemon->name }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $pokemons->links('pagination::bootstrap-4') }}
                    </nav>
                </div> --}}
        </div>
    @endsection
