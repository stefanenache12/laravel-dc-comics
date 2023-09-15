@extends('layouts.main')

@section('page-title', 'ADMIN')

@section('main-content')
    <div class="container mt-5">
        <h1>
            Comics List
        </h1>
        <div class="mt-3 mb-3">
            <a href="{{ route('comics.create') }}">
                <button class="btn btn-success">ADD A NEW COMIC</button>
            </a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th colspan="3" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.show',['comic'=> $comic->id]) }}">
                            <button class="btn btn-primary">
                                VIEW
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit',['comic'=> $comic->id]) }}">
                            <button class="btn btn-warning">
                                UPDATE
                            </button>
                        </a>
                    </td>
                    <td>
                        <form
                            action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                            class="d-inline-block"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to Delete this Comic?');">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger">
                                DELETE
                            </button>
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection