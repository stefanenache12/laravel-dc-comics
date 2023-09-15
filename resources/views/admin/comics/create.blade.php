@extends('layouts.main')

@section('page-title', 'CREATE A NEW COMIC')

@section('main-content')
    <div class="container">
        <h1 class="mt-3 mb-3">
            INSERT A NEW COMIC
        </h1>
        <div class="col">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="128" class="form-control" id="title" name="title" placeholder="Enter value..." required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Img Link</label>
                    <input type="text" maxlength="128" class="form-control" id="thumb" name="thumb" placeholder="Enter value..." required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" maxlength="128" class="form-control" id="price" name="price" placeholder="Enter value(ex: 4.99 $)" required>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" maxlength="128" class="form-control" id="series" name="series" placeholder="Enter value.." required>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" maxlength="128" class="form-control" id="sale_date" name="sale_date" placeholder="Enter value.." required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="128" class="form-control" id="type" name="type" placeholder="Enter value.." required>
                </div>
                <button type="submit" class="btn btn-success">
                    ADD COMIC
                </button>
            </form>
        </div>
    </div>
@endsection