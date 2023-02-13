@extends('layouts.app')

@section('title', 'Index')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">price</th>
                            <th scope="col">series</th>
                            <th scope="col">type</th>
                            <th scope="col">actions</th>
                        </tr>
                    </thead>
                    <tbody>
        
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-sm btn-primary">
                                        Show
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
