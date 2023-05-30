@extends('layouts.layout')

@section('content')
    <div class="main-top row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center align-items-center">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <div class="mycard m-0">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{$comic['title']}}">
                    </div>
                    <div>
                        <p class="text-uppercase">{{ $comic['title'] }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
