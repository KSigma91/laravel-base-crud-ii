@extends('admin.templates.base')

@section('mainContent')
    <div class="container">
        <h3 class="my-4">
            <big>
                Insert new comic
            </big>
        </h3>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ old('description') }}">
                @error('description')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="thumb">Thumb</label>
                <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="series">Series</label>
                <input class="form-control" type="text" name="series" id="series" value="{{ old('series') }}">
                @error('series')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="sale_date">Sale date</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type" step="0.01" value="{{ old('type') }}">
                @error('type')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="artists">Artists</label>
                <input class="form-control" artists="text" name="artists" id="artists" step="0.01" value="{{ old('artists') }}">
                @error('artists')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="writers">Writers</label>
                <input class="form-control" type="text" name="writers" id="writers" step="0.01" value="{{ old('writers') }}">
                @error('writers')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
