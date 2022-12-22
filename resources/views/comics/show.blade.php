@extends('layouts.app')

@section('title', $comic->series)
@section('content')
    <section class="mt-4 pt-4">
        <div class="container d-flex justify-content-center">
            <div class="d-flex w-50 p-4 bg-secondary">
                <img class="" src="{{ $comic->thumb }}" alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Title : {{ $comic->title }}</li>
                    <li class="list-group-item">Series : {{ $comic->series }}</li>
                    <li class="list-group-item">Price : {{ $comic->price }}</li>
                    <li class="list-group-item">Type : {{ $comic->type }}</li>
                </ul>

            </div>
        </div>
    </section>
@endsection
