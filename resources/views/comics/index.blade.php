@extends('layouts.app')

@section('title', 'Comics Shop')

@section('content')
    <section class="container">
        <div class="d-flex justify-content-center">
            <button class="btn btn-success text mb-4"><a href="{{ route('comics.create') }}">Add new comic</a></button>
        </div>
        <h2>Comics List</h1>

            <table class="table text-light">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">series</th>
                        <th scope="col">price</th>
                        <th scope="col">type</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <button class="btn btn-primary text mb-4"><a
                                        href="{{ route('comics.show', $comic->id) }}">details</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
@endsection
