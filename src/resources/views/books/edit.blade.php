@extends('layouts.dashboard')

@section('content')
    @php($isNew = empty($book))
    <h3>{{ $isNew ? "Create" : "Edit" }} book</h3>
    <form method="POST" action="{{ $isNew ? route("books.store") : route("books.update", $book) }}">
        @if(!$isNew)
            @method('put')
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $isNew ? "" : $book->name }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Author</label>
            <select class="form-control" id="author" name="author_id">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ !$isNew && $book->author_id == $author->id  ? "selected" : ""}}>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <br />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ $isNew ? "Create" : "Edit" }}</button>
        </div>
    </form>
@endsection
