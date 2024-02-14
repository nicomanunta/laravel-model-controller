@extends('layout.movie')
@section('movie-content')
    <div class='bg-black'>
        <div class="container pt-5">
            <div class="row ">
                @foreach ($movies as $movie)
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card border-card" style="width: 18rem;">
                        <div class="card-body min-height ">
                            <h5 class="card-title pt-3">{{$movie['title']}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary pb-5 pt-2">{{$movie['original_title']}}</h6>
                            <span class="card-text">Nazionalità: {{$movie['nationality']}}</span>
                            <br>
                            <span class="card-text">Data di uscita: {{$movie['date']}}</span>
                            <p class="card-text">Voto: {{$movie['vote']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12">

                </div>
            </div>
        </div>
    </div>
@endsection