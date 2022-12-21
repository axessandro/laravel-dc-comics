@extends('layouts.app')

@section('title', 'Comics Shop')

@section('content')
    <section>
        <h2>Comics List</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">series</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($comics as $comic)
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
    </section>
@endsection
