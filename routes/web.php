<?php

use Illuminate\Http\Request;
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


Route::get('/hello', function () {
    return response ('<h1>Hello Worlds using response helper</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    dd($id);
    return response('Post' . $id);
})->where('id', '[0-9]+');

//on browser : http:127.0.0.1:8000/posts/8

//on browser : http:127.0.0.1:8000/search?name=Ryan&city=Cavite

Route::get('/search', function(Request $request) {
    dd($request);
    // dd ($request-> name . ' ' . $request->city);
    // return($request-> name . ' ' . $request->city);
});