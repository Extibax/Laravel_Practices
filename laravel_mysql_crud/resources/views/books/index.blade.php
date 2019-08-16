@extends('books.layout')
@section('content')

<h1 class="text-center m-5">Libros</h1>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Reseña</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection