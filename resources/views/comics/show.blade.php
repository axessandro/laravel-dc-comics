@extends('layouts.app')

@section('title', $comic->series)
@section('content')
    <section class="mt-4 pt-4">
        <div class="container d-flex justify-content-center">

            <div class="d-flex w-75 rounded text-dark p-4 bg-secondary">
                @if (!empty($comic->thumb))
                    <img class="" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                @else
                    <p>no image</p>
                @endif

                <div class="d-flex flex-column justify-content-between p-4">
                    <h4>Title : {{ $comic->title }}</h4>
                    <h4>Series : {{ $comic->series }}</h4>
                    <h4>Price : {{ $comic->price }}</h4>
                    <h4>Type : {{ $comic->type }}</h4>
                </div>
            </div>

        </div>
    </section>
@endsection
