<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syafiq Fajrian Emha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae maiores consequatur nostrum laborum natus voluptate in eligendi quisquam. Eveniet debitis libero similique porro ipsum sapiente atque dolorum delectus doloribus officiis nobis, ad maiores sunt a. Reprehenderit velit id in magni qui dicta, odit dolorem facilis asperiores ut, vero fugit similique? Recusandae deleniti vel blanditiis. Amet cumque nihil distinctio nesciunt eaque, inventore nam doloribus ipsam, unde quaerat ab. Officia aperiam deleniti adipisci illum velit quia excepturi? Porro veritatis saepe inventore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "John Smith",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, quis eius omnis a rem excepturi magni corporis delectus sunt error, dicta dolor ipsa quibusdam distinctio! Recusandae dolor maiores dolore, nemo, doloribus cupiditate nobis, facilis temporibus expedita adipisci voluptate similique nihil a exercitationem error distinctio quidem! Labore possimus eum vero officiis molestias dicta soluta odio sunt ipsam ut natus atque excepturi, reprehenderit pariatur nulla assumenda corporis iure facilis placeat maxime dolor? Quisquam odit, rem ut, quo ab hic quam distinctio quasi vel natus deserunt laboriosam nisi blanditiis cum corporis unde esse, sequi possimus. Culpa hic assumenda voluptas iure odio magnam ipsum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
