@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container mt-5">
        <h1>
            Comics List
        </h1>
        <div class="mt-3">
            <a href="{{ route('comics.create') }}">
                <button class="btn btn-success">ADD A NEW COMIC</button>
            </a>
        </div>
    </div>
@endsection