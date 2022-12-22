@extends('layouts.app')

@section('title', 'Create a new Comic')

@section('content')
    <section class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-1">
                <label for="series">series:</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-1">
                <label for="thumb">thumb:</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-1">
                <label for="price">price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-1">
                <label for="type">type:</label>
                <select name="type" id="type" class="form-control">
                    <option value="">Select type</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success text mb-4" type="submit">Save</button>
            </div>
        </form>
    </section>
@endsection
