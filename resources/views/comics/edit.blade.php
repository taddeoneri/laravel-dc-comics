@extends('layouts.layout');

@section('content')
    <section class="container">
        <h1>Edit comic with id: {{ $comic->id }}</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" value="{{ $comic->title }}">
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelp" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price"
                    aria-describedby="priceHelp" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelp" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp" value="{{ $comic->type }}">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
