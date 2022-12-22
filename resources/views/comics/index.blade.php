@extends('layouts.app')

@section('title', 'Comics Shop')

@section('content')
    <section class="container">

        <h2 class="py-3 text-center">Comics List</h1>

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
                            <td class="d-flex">
                                <button class="btn btn-secondary text"><a
                                        href="{{ route('comics.show', $comic->id) }}">details</a></button>
                                <button class="btn btn-warning text"><a
                                        href="{{ route('comics.edit', $comic->id) }}">edit</a></button>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text"><a>delete</a></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success text mb-4"><a href="{{ route('comics.create') }}">Add new comic</a></button>
            </div>
    </section>
@endsection
