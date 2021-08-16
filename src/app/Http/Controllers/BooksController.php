<?php


namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
        $books = Book::with("author")
            ->orderBy("created_at", "desc")
            ->get();

        return view("books.list", [
            "books" => $books,
        ]);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->withSuccess("book was removed");
    }

    public function create(Request $request)
    {
        $authors = Author::all();
        return view("books.edit", [
            "authors" => $authors
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author_id' => 'required',
        ]);

        $bookData = $request->only('name', 'author_id');

        $book = Book::create($bookData);

        if (empty($book)) {
            return redirect()->back()->withErrors('Could not create book');
        }
        return redirect()->route("books.index")->withSuccess("Book created successfully");
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view("books.edit", [
            "authors" => $authors,
            "book" => $book,
        ]);
    }

    public function update(Book $book, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author_id' => 'required',
        ]);

        $bookData = $request->only('name', 'author_id');

        $updated = $book->update($bookData);

        return redirect()->route("books.index")->withSuccess("Book updated successfully");
    }
}
