<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, "showLoginForm"])->name("login");
Route::get('/logout', [AuthController::class, "logout"])->name("logout");
Route::post('/login', [AuthController::class, 'signin'])->name('signin');

Route::middleware("auth")
    ->group(function(\Illuminate\Routing\Router $router) {
        $router->get('books/{book}/delete', [BooksController::class, "destroy"])->name("books.destroy");
        $router->resource("books", BooksController::class)
            ->except("destroy");

        $router->get('authors/{author}/delete', [AuthorsController::class, "destroy"])->name("authors.destroy");
        $router->resource("authors", AuthorsController::class)
            ->except("destroy");


    });
