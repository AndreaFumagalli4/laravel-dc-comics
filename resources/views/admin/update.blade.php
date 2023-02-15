@extends('admin.layouts.backoffice')

@section('title', "Update $comic->title")

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label" for="title">
                            Title
                        </label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">
                            Description
                        </label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="thumb">
                            Thumb
                        </label>
                        <textarea class="form-control" name="thumb"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="price">
                            Price
                        </label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="series">
                            Series
                        </label>
                        <input type="text" class="form-control" name="series">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sale_date">
                            Sale_date
                        </label>
                        <input type="text" class="form-control" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="type">
                            Type
                        </label>
                        <input type="text" class="form-control" name="type">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
                
            </div>
        </div>
    </div>

@endsection

