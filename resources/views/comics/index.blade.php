@extends('layouts.layout')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <a href="{{ route('comics.show', ['id' => $loop->index]) }}">
                    <div class="mycard m-0">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{$comic['title']}}">
                    </div>
                    <div>
                        <p class="text-uppercase text-light">{{$comic['title']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
