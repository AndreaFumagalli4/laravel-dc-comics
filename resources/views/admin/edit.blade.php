@extends('admin.layouts.backoffice')

@section('title', "Edit $comic->title")

@section('main-content')
    <div class="container">
        <div class="row">
            @dump(Route::currentRouteName())
            <div class="col-12">
                
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label" for="title">
                            Title
                        </label>
                        <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">
                            Description
                        </label>
                        <textarea class="form-control" name="description">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="thumb">
                            Thumb
                        </label>
                        <textarea class="form-control" name="thumb">{{ $comic->thumb }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="price">
                            Price
                        </label>
                        <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="series">
                            Series
                        </label>
                        <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sale_date">
                            Sale_date
                        </label>
                        <input type="text" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="type">
                            Type
                        </label>
                        <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
                
            </div>
        </div>
    </div>

@endsection

