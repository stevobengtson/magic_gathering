<?php

use App\Post;
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

Route::redirect('/', '/posts');

/**
 * Posts routes
 *  GET     /posts      List all posts
 *  POST    /posts      Create a new post
 *  DELETE  /post/{id}  Delete a post
 */
Route::namespace('Posts')->group(function() {
  Route::get('/posts', function () {
      return view('posts/posts', [
          'posts' => Post::orderBy('created_at', 'asc')->get()
      ]);
  })->name('posts');

  Route::post('/posts', function () {

  })->name('create_post');

  Route::delete('/post/{id}', function ($id) {

  })->name('delete_post');
});
