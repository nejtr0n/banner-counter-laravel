<?php


namespace App\Http\Controllers;


use App\Models\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view("authors.list", [
            "authors" => $authors,
        ]);
    }
}
