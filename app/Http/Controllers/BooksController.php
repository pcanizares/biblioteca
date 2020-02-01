<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    
    public function index() {

        $books = Book::get();

        return view('books-list', compact('books'));

    }



    public function show($id) {

        $book = Book::find($id);

        return view('book-details', compact('book'));

    }


    public function create() {

        return view('create-book');
        
    }


    public function store(Request $request) {

        $data = $request->validate(
            [
                'title' => 'required',
                'isbn' => ['required', 'unique:books,isbn'],
                'author' => 'required',
                'pages' => ['required', 'integer', 'min:0'],
                'sinopsis' => 'required'
            ],
            [
                'title.required' => 'El título es obligatorio',
                'isbn.required' => 'El isbn es obligatorio',
                'isbn.unique' => 'El isbn debe ser único',
                'author.required' => 'El autor es obligatorio',
                'sinopsis.required' => 'La sinopsis es obligatoria',
                'pages.required' => 'El número de páginas es obligatorio',
                'pages.integer' => 'El número de páginas debe ser un número',
                'pages.min' => 'El número de páginas debe ser un número positivo',
                
            ]    
        );

        $book = new Book();

        $book->title = $request->get('title');
        $book->isbn = $request->get('isbn');
        $book->author = $request->get('author');
        $book->sinopsis = $request->get('sinopsis');
        $book->pages = $request->get('pages');

        $book->save();

        return redirect('/books');

    }


    
    public function edit($id) {

        $book = Book::find($id);

        return view('edit-book', compact('book'));
        
    }


    public function update(Request $request, $id) {

        $data = $request->validate(
            [
                'title' => 'required',
                'isbn' => ['required', 'unique:books,isbn,'. $id],
                'author' => 'required',
                'pages' => ['required', 'integer', 'min:0'],
                'sinopsis' => 'required'
            ],
            [
                'title.required' => 'El título es obligatorio',
                'isbn.required' => 'El isbn es obligatorio',
                'isbn.unique' => 'El isbn debe ser único',
                'author.required' => 'El autor es obligatorio',
                'sinopsis.required' => 'La sinopsis es obligatoria',
                'pages.required' => 'El número de páginas es obligatorio',
                'pages.integer' => 'El número de páginas debe ser un número',
                'pages.min' => 'El número de páginas debe ser un número positivo',
                
            ]    
        );


        $book = Book::find($id);

        $book->title = $request->get('title');
        $book->isbn = $request->get('isbn');
        $book->author = $request->get('author');
        $book->sinopsis = $request->get('sinopsis');
        $book->pages = $request->get('pages');

        $book->update();

        return redirect('/books');

    }


    public function destroy(Book $book) {

        $book->delete();

        return redirect('/books');

    }

    

}



