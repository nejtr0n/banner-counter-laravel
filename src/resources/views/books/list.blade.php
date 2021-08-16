@extends('layouts.dashboard')

@section('content')
<h3>Books</h3>
<p class="item-create">
    <a class="btn btn-success" href="{{ route("books.create") }}">
        <span>Create</span>
    </a>
</p>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>ID</td>
        <td>Author</td>
        <td>Name</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->name }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{  route("books.edit", $book) }}">Edit</a>
                <a class="btn btn-small btn-danger" href="{{  route("books.destroy", $book) }}">Remove</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
