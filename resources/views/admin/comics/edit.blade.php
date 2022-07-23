@extends('admin.templates.base')

@section('mainContent')
    <div class="container">
        <h3 class="my-4">
            <big>
                Insert new comic
            </big>
        </h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', ['comic' => $comic]) }}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $comic->description) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="thumb">Thumb</label>
                <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="series">Series</label>
                <input class="form-control" type="text" name="series" id="series" value="{{ old('series', $comic->series) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="sale_date">Sale date</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="artists">Artists</label>
                <input class="form-control" type="text" name="artists" id="artists" value="{{ old('artists', $comic->artists) }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="writers">Writers</label>
                <input class="form-control" type="text" name="writers" id="writers" value="{{ old('writers', $comic->writers) }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">View</a>
        </form>
    </div>
@endsection
