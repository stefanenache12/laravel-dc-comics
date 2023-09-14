@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <div class="card-text">
                        <h6>
                            Type: {{ $comic->type }}
                        </h6>
                        <h5>
                            Price: {{ $comic->price }}
                        </h5>
                    </div>
                    <a href="{{ route('comics.show',['comic'=> $comic->id]) }}" class="btn btn-primary">More info</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection