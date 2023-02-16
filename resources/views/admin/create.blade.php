@extends('admin.layouts.backoffice')

@section('title', 'Create new Comic')

@section('main-content')

    <div class="container">
        <div class="row">
            @dump(Route::currentRouteName())
            <div class="col-12">
                @include('admin.partials.form', ['route' => 'comics.store', 'method' => 'POST', 'comic' => $comic])
            </div>
        </div>
    </div>

@endsection

