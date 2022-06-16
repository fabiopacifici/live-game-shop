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

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* Scorciatia per generare le sette rotte rest per le operazione CRUD  */
//Route::resource('/games', 'GameController');

/* Rotte per CRUD games*/
Route::get('/games', 'GameController@index')->name('games.index');
Route::get('/games/create', 'GameController@create')->name('games.create');
Route::post('/games', 'GameController@store')->name('games.store');
Route::get('/games/{game}', 'GameController@show')->name('games.show');

/* Rotter per CRUD posts */
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

/*  model: Game
    migration: games
    controller resource GameController
    seeder GameSeeder

    - id
    - tile
    - description
    - thumb
    - cover_image
    - created_at
    - updated_at

    */