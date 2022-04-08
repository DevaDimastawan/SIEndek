<?php

namespace App\Models;



class iseng 
{
    private static $blog_posts =[
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Deva Dimastawan",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit consectetur voluptate dolorum ipsam quasi, consequuntur non in sunt magni beatae voluptatum porro atque dolorem. Tempora sunt eaque repellendus cumque quae."
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Anom",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit consectetur voluptate dolorum ipsam quasi, consequuntur non in sunt magni beatae voluptatum porro atque dolorem. Tempora sunt eaque repellendus cumque quae."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);

    }
}
