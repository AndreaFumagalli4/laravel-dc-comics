@extends('admin.layouts.backoffice')

@section('title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('comics.index')}}" class="btn btn-info">
                    Click here to dislpay all Comics
                </a>
            </div>
        </div>
    </div>
@endsection