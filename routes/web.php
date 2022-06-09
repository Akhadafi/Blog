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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Khadafi",
        "age" => "21",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "judul" => "First Post",
            "slug" => "first-post",
            "author" => "Khadafi",
            "body" => "This is the first post Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quidem eligendi quia. Fuga, omnis, aperiam tempora, explicabo id dolorum dolor voluptatum doloribus consectetur tempore rem? A officiis vel repellendus voluptatem, pariatur numquam fugiat consequatur obcaecati facere doloribus ducimus rem, magnam, reiciendis excepturi! Impedit illo a laudantium, magnam eligendi quos dignissimos.",
        ],
        [
            "judul" => "Second Post",
            "slug" => "second-post",
            "author" => "Nana",
            "body" => "This is the second  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quidem eligendi quia. Fuga, omnis, aperiam tempora, explicabo id dolorum dolor voluptatum doloribus consectetur tempore rem? A officiis vel repellendus voluptatem, pariatur numquam fugiat consequatur obcaecati facere doloribus ducimus rem, magnam, reiciendis excepturi! Impedit illo a laudantium, magnam eligendi quos dignissimos.",
        ],
        [
            "judul" => "Third Post",
            "slug" => "third-post",
            "author" => "Yuda",
            "body" => "This is the third post Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quidem eligendi quia. Fuga, omnis, aperiam tempora, explicabo id dolorum dolor voluptatum doloribus consectetur tempore rem? A officiis vel repellendus voluptatem, pariatur numquam fugiat consequatur obcaecati facere doloribus ducimus rem, magnam, reiciendis excepturi! Impedit illo a laudantium, magnam eligendi quos dignissimos.",
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Posts",
    ]);
});
