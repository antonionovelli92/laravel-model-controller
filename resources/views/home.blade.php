@extends('layouts.main')


@section('title', 'home')


@section('main-content')
    <h1>Home</h1>
    <section id="movies">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center">
                @forelse ($movies as $movie)
                    @include('includes.movies.card')
                @empty
                    <h2 class="text-center">NON CI SONO FILM A DISPOSIZIONE</h2>
                @endforelse

            </div>
        </div>

    </section>
@endsection
