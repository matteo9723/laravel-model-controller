<?php

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

// Route::get('/orderVote', function () {
//     return view('orderVote');
// })->name('orderVote');
// Route::get('/orderDate', function () {
//     return view('orderDate');
// })->name('orderDate');

Route::get('/', 'MovieController@index' )->name('movies');
Route::get('/vote', 'OrderVoteController@index' )->name('orderVote');
Route::get('/date', 'OrderDateController@index' )->name('orderDate');
