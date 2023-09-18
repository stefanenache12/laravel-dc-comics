@extends('layouts.main')

@section('page-title', $comic->title)

@section('main-content')
    <div class="container mt-5 mb-5 text-center">
        <div class="row justify-content-center">
            <div class="col-4">
                <div>
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col text-center">
                <h5 >{{ $comic->title }}</h5>
                <h6>Type: {{ $comic->type }} </h6>
                <h5>Price: $ {{ $comic->price }}</h5>
                <h6>Sale date: {{ $comic->sale_date }}</h6>
                <p class="mt-4">
                    {{ $comic->description }}
                </p>
                <h5>
                    WRITERS
                </h5>
                <p>
                    {{ $comic->writers }}
                </p>

                <h5>
                    ARTISTS
                </h5>
                <p>
                    {{ $comic->artists }}
                </p>
            </div>
        </div>
    </div>
@endsection