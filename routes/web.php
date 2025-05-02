<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});



Route::get('/posts', function () {
    return view('posts',['title' => 'Blog', 'posts' =>Post::all()]);
    });
Route::get('/about', function () {
    return view('about', [
        'NamaLengkap' => 'Rifqy Fakhry Zain',
        'Nama' => 'Rifqy',
        'Universitas' => 'Universitas Komputer Indonesia',
        'Fakultas' => 'Teknik dan Ilmu Komputer',
        'Jurusan' => 'Teknik Informatika',
    ], ['title' => 'About']);
});

Route::get('/posts/{post:slug}', function(Post $post){
    // $post = Post::find($id);

    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user){
    return view('posts',['title' => 'Artikel '. $user->name , 'posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
