@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div class="card p-3 rounded-0 shadow m-3">
            <div class="py-2">ID:{{ $comic->id }}</div>
            <div> <strong>Title: </strong>{{ $comic->title }}</div>

            <div class="img-card-top text-center">
                @if (str_contains($comic->thumb, 'http'))
                    <img width="300" class=" img-fluid" src="{{ $comic->thumb }}">
                @else
                    <img width="300" class=" img-fluid" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
                @endif
            </div>

            <div class="card-body">
                <p>{{ $comic->description }}</p>
                <div><strong>Type: </strong> {{ $comic->type }}</div>
                <div><strong>Series: </strong> {{ $comic->series }}</div>
                <div><strong>Sale Date: </strong> {{ $comic->sale_date }}</div>
                <div><strong>Price: </strong> {{ $comic->price }}</div>
                <div><strong>Title:</strong> {{ $comic->title }}</div>
                <div><strong>Artists:</strong> {{ $comic->artists }}</div>
                <div><strong>Writers:</strong> {{ $comic->writers }}</div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a class="text-decoration-none btn btn-primary" href="{{ route('comics.index') }}">Torna alla lista</a>
        </div>
    </div>
@endsection
