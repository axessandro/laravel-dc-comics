@extends('layouts.app')

@section('title', 'Create a new Comic')

@section('content')
    <section class="container p-4">
        <h1 class="text-center pb-4">Create new article</h1>
        <form class="w-75 m-auto mt-4" action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-4 d-flex">
                <label class="w-50" for="title">
                    <h3>Title:</h3>
                </label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                    class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4 d-flex">
                <label class="w-50" for="series">
                    <h3>Series:</h3>
                </label>
                <input type="text" id="series" name="series" value="{{ old('series') }}"
                    class="form-control @error('series') is-invalid @enderror">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4 d-flex">
                <label class="w-50" for="thumb">
                    <h3>Thumb URL:</h3>
                </label>
                <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}"
                    class="form-control @error('thumb') is-invalid @enderror">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4 d-flex">
                <label class="w-50" for="price">
                    <h3>Price:</h3>
                </label>
                <input type="text" id="price" name="price" value="{{ old('price') }}"
                    class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4 d-flex">
                <label class="w-50" for="type">
                    <h3>Type:</h3>
                </label>
                <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                    <option value="">Select type</option>
                    <option value="comic book" @selected(old('type') === 'comic book')>Comic Book</option>
                    <option value="graphic novel" @selected(old('type') === 'graphic novel')>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success text mb-4 w-100" type="submit">Generate new article</button>
            </div>
        </form>
    </section>
@endsection
