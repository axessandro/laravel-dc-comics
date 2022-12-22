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
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-4 d-flex">
                <label class="w-50" for="series">
                    <h3>Series:</h3>
                </label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-4 d-flex">
                <label class="w-50" for="thumb">
                    <h3>Thumb URL:</h3>
                </label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-4 d-flex">
                <label class="w-50" for="price">
                    <h3>Price:</h3>
                </label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-4 d-flex">
                <label class="w-50" for="type">
                    <h3>Type:</h3>
                </label>
                <select name="type" id="type" class="form-control">
                    <option value="">Select type</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success text mb-4 w-100" type="submit">Generate new article</button>
            </div>
        </form>
    </section>
@endsection
