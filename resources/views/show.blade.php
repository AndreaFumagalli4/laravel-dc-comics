@extends('layouts.app')

@section('title', "Comic: $comic->title")

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center p-3">
                    <div class="card-title">
                        <h2>
                            {{ $comic->title }}
                        </h2>
                    </div>
                    <div class="card-img">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $comic->description }}
                        </p>
                        <p>
                        <p>
                            Series: {{ $comic->series }}
                        </p>
                            Type: {{ $comic->type }}
                        </p>
                        <p>
                            Price: {{ $comic->price }} &dollar;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection