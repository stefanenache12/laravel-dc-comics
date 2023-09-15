@extends('layouts.main')

@section('page-title', 'UPDATE' .$comic->title)

@section('main-content')
    <div class="container">
        <h1 class="mt-3 mb-3">
            UPDATE {{ $comic->title }}
        </h1>
        <div class="col">
            <form action="{{ route('comics.update',['comic'=> $comic->id])}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="128" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Img Link</label>
                    <input type="text" maxlength="128" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" maxlength="128" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" maxlength="128" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" maxlength="128" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="128" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
                <button type="submit" class="btn btn-success mb-5">
                    UPDATE COMIC
                </button>
            </form>
        </div>
    </div>
@endsection