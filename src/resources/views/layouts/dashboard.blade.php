@extends('layouts.app')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand abs">Counter: <b></b></span>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route("books.index") }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("authors.index") }}">Authors</a>
                    </li>
                </ul>
            </div>
            <span class="navbar-text">
                <a href="{{ route("logout") }}">Logout</a>
            </span>
    </nav>
</div>
