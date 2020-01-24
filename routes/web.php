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

Route::get('/', 'BooksController@index')->name('books-list');

Route::get('/book-details/{id}', 'BooksController@show')->name('book-details');

Route::get('/create-book', 'BooksController@create')->name('create-book');

Route::post('/store-book', 'BooksController@store')->name('store-book');

Route::get('/edit-book/{id}', 'BooksController@edit')->name('edit-book');

Route::put('/update-book/{id}', 'BooksController@update')->name('update-book');

Route::delete('/delete-book/{book}', 'BooksController@destroy')->name('destroy-book');


