<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index')->name('index');

Route::get('/mvc', 'PagesController@mvc')->name('mvc');

Route::get('/laravel', 'PagesController@laravel')->name('laravel');

Route::get('/books', 'BooksController@index')->name('books-list');

Route::get('/books/book-details/{id}', 'BooksController@show')->name('book-details');

Route::get('/books/create-book', 'BooksController@create')->name('create-book');

Route::post('/books/store-book', 'BooksController@store')->name('store-book');

Route::get('/books/edit-book/{id}', 'BooksController@edit')->name('edit-book');

Route::put('/books/update-book/{id}', 'BooksController@update')->name('update-book');

Route::delete('/books/delete-book/{book}', 'BooksController@destroy')->name('destroy-book');


