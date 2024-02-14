@extends('layout.app')
@section('content')
    <div class='bg-black'>
        <div class="container vh-100  d-flex align-items-center justify-content-center ">
            <div class="row">
                <div class="col-12 ">
                    <a href="{{route('index_movies')}}" type="button" class="btn btn-warning btn-padding">FILM</a>
                </div>
            </div>
        </div>
    </div>
@endsection