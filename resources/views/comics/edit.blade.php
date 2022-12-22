@extends('layouts.app')
@section('title', 'Edit Comic')
@section('content')
    <div class="container">
        <h2>Edit Comic</h2>
        <div class="w-50">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-1">
                    <label for="title">title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-1">
                    <label for="series">series:</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-1">
                    <label for="thumb">thumb:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-1">
                    <label for="price">price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-1">
                    <label for="type">type:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Select type</option>
                        <option value="comic book" @selected($comic->type === 'comic book')>Comic Book</option>
                        <option value="graphic novel" @selected($comic->type === 'graphic novel')>Graphic Novel</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-success text mb-4" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
