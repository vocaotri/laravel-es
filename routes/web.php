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
});
Route::get('add', function () {
    $post = \App\Post::all();
    $post->addToIndex();
    return $post;
});
Route::get('search-es', function () {
//    $response = \App\Post::searchByQuery([
//        'match' => [
//            'title' => '1'
//        ]
//    ]);
    $response = \App\Post::search('et');

    return $response;
});
