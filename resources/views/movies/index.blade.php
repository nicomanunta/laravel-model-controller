@extends('layout.movie')
@section('movie-content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                {{$movie['title']}}
            @endforeach
            <div class="col-12">

            </div>
        </div>
    </div>
@endsection