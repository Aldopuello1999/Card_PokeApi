@extends('layouts.app')

    @section('content')
        <div class="row">
            @foreach ($pokemons as $pokemon)
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $loop->index + 1 }}.png" class="card-img-top" alt="{{ $pokemon->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pokemon->name }}</h5>
                            {{-- <a href="{{ route('pokemon.show', $loop->index + 1) }}" class="btn btn-primary">Ver detalles</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
