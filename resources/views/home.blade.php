@extends('layouts.app')
@section('main-content')
    <main class="py-5">
        <h1 class="my-5">Our best selection:</h1>
        <div class="container pb-5">
            <div class="row g-3">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card bg-dark">
                            <div class="card-body">
                                <h4 class="card-title">{{$movie->title}}</h4>
                                <p class="card-text">{{$movie->original_title}}</p>
                                <a href="#" class="btn">info</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
