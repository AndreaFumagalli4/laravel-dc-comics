@extends('admin.layouts.backoffice')

@section('title', 'Index')

@section('main-content')
    <div class="container">
        <div class="row">
            @dump(Route::currentRouteName())
            <div class="col-12 p-3">
                <div class="m-2 text-end">
                    <a href="{{ route('comics.create') }}"class="btn btn-info">
                        Create a new Comic
                    </a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody> 
                        
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->price }}&dollar;</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-sm btn-primary">
                                        Show
                                    </a>
                                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    {{-- <a href="{{route('comics.show', $comic->id)}}" class="btn btn-sm btn-primary">
                                        Delite
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
