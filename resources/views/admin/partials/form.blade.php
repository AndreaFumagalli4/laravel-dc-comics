{{-- 
    Cose che cambiano:
    Rotta: da store a update
    Metodo: o post o put
    Dato: vuoti nella create e popolati nella edit
--}}

<form action="{{route($route, $comic->id)}}" method="POST">
    @csrf
    @method($method)
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label class="form-label" for="title">
            Title
        </label>
        <input type="text" class="form-control" name="title" value="{{ old('title') ?? $comic->title }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">
            Description
        </label>
        <textarea class="form-control" name="description">{{ old('description') ?? $comic->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumb">
            Thumb
        </label>
        <textarea class="form-control" name="thumb">{{ old('thumb') ?? $comic->thumb }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">
            Price
        </label>
        <input type="text" class="form-control" name="price" value="{{ old('price') ?? $comic->price }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">
            Series
        </label>
        <input type="text" class="form-control" name="series" value="{{ old('series') ?? $comic->series }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="sale_date">
            Sale_date
        </label>
        <input type="text" class="form-control" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="type">
            Type
        </label>
        <input type="text" class="form-control" name="type" value="{{ old('type') ?? $comic->type }}">
    </div>
    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</form>