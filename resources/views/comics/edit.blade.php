@extends('layouts.app')
@section('title', 'Edit Comic')
@section('content')
    <div class="container">
        <h2 class="text-center pt-4">Edit Comic</h2>
        <div class="w-50 mx-auto">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-4">
                    <label for="title">title:</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $comic->title) }}"
                    class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="series">series:</label>
                    <input type="text" id="series" name="series" value="{{ old('seires', $comic->series) }}"
                    class="form-control @error('series') is-invalid @enderror">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="thumb">thumb:</label>
                    <input type="text" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}"
                    class="form-control @error('thumb') is-invalid @enderror">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="price">price:</label>
                    <input type="text" id="price" name="price" value="{{ ('price', $comic->price) }}"
                    class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="type">type:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Select type</option>
                        <option value="comic book" @selected(old('type', $comic->type) === 'comic book')>Comic Book</option>
                        <option value="graphic novel" @selected(old('type', $comic->type) === 'graphic novel')>Graphic Novel</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-success text mb-4" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
