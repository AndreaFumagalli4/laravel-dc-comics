@extends('admin.layouts.backoffice')

@section('title', "Edit $comic->title")

@section('main-content')

    <div class="container">
        <div class="row">
            @dump(Route::currentRouteName())
            <div class="col-12">
                @include('admin.partials.form', ['route' => 'comics.update', 'method' => 'PUT', 'comic' => $comic])
            </div>
        </div>
    </div>

@endsection

