@extends('layouts.app')

@section('title', 'Create')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label" for="title">title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="thumb">thumb</label>
                        <textarea class="form-control" name="thumb"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="price">price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="series">series</label>
                        <input type="text" class="form-control" name="series">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sale_date">sale_date</label>
                        <input type="text" class="form-control" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="type">type</label>
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

