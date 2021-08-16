@extends('layouts.dashboard')

@section('content')
    <h3>Authors</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
