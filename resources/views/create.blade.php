@extends('layouts.app')

@section('title', 'Create')

@section('main-content')

    <form>
        <div class="mb-3">
            <label class="form-label"></label>
            <input type="text" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>

@endsection

