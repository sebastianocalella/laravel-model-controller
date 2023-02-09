@extends('layouts.app')
@section('main-content')
    <main class="bg-light">
        <h1>Home</h1>
        <div class="container">
            <div class="row">
                @foreach ( $movies as $movie)
                    <div class="col-4 p-4">
                        <h4>{{$movie->title}}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
