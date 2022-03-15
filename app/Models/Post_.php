<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Pertama",
        "slug" => "judul-pertama",
        "author" => "Iqbal",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis"
    ],
    [
        "title" => "Judul Kedua",
        "slug" => "judul-kedua",
        "author" => "Iqbal",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis"
    ],
    [
        "title" => "Judul Ketiga",
        "slug" => "judul-ketiga",
        "author" => "Iqbal",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt rerum, reprehenderit ipsam rem minus aliquam. Quasi dicta expedita minus. Tempore incidunt officia fuga consequuntur ipsa, similique odio magnam laboriosam nobis"
    ]];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
