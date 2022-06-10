<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->where("slug", $slug)->first();
    }
}
