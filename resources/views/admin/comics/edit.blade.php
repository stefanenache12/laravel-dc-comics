@extends('layouts.main')

@section('page-title', 'UPDATE' .$comic->title)

@section('main-content')
    <div class="container">
        <h1 class="mt-3 mb-3 text-center">
            UPDATE {{ $comic->title }}
        </h1>
        <div class="col">
            <form class="col-8 m-auto p-5" action="{{ route('comics.update',['comic'=> $comic->id])}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input  type="text" maxlength="250" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add a title" value="{{ old('title',$comic->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">Description <span class="text-danger">*</span></label>
                    @error('description')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Add a description" required>{{ old('description',$comic->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Img Link</label>
                    @error('description')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" maxlength="1024" class="form-control" id="thumb" name="thumb" value="{{ old('thumb',$comic->thumb) }}" placeholder="Enter an img link">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">Price <span class="text-danger">*</span> </label>
                    @error('price')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" maxlength="128" class="form-control" id="price" name="price" value="{{ old('price',$comic->price) }}" placeholder="Enter value(ex: 4.99 )" required>
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label @error('series') is-invalid @enderror">Series</label>
                    @error('series')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" maxlength="64" class="form-control" id="series" name="series" value="{{ old('series',$comic->series) }}" placeholder="Enter value.." >
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Sale Date</label>
                    @error('series')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="date" maxlength="64" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date',$comic->sale_date) }}" placeholder="Enter value..">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label @error('type') is-invalid @enderror">Type</label>
                    @error('type')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" maxlength="64" class="form-control" id="type" name="type" value="{{ old('type',$comic->type) }}" placeholder="Enter value..">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" maxlength="128" class="form-control" id="artists" name="artists" value="{{ old('artists',$comic->artists) }}" placeholder="Add the artists">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" maxlength="128" class="form-control" id="writers" name="writers" value="{{ old('writers',$comic->writers) }}" placeholder="Add the writers">
                </div>

                <button type="submit" class="col-12 btn btn-success mb-5">
                    UPDATE COMIC
                </button>
            </form>
        </div>
    </div>
@endsection