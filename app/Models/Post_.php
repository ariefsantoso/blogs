<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Sandhika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae veritatis, eum dolorem labore neque sunt tenetur. Consectetur amet voluptatibus, quasi veritatis voluptas obcaecati ratione itaque, delectus quidem labore molestias voluptates ut officia, ipsam quia! Atque iusto laudantium quasi, blanditiis eaque neque, quas incidunt soluta, error nesciunt facilis quae amet molestiae quaerat. Pariatur vel magni quod sunt expedita voluptas distinctio suscipit rerum minus, animi dolor ut accusamus explicabo dicta incidunt, sapiente neque quisquam eius nam consequatur debitis porro repellat possimus amet?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Sandhika",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti rem modi provident dignissimos nobis eligendi. Ipsam in autem corporis odio deserunt nemo consequatur harum esse quia fugit molestias tempora, magnam nulla obcaecati temporibus iusto! Voluptates saepe dicta soluta ratione repellat exercitationem debitis nobis aperiam optio accusantium error nemo omnis minus, delectus nisi fugiat! Nihil eaque cum nulla aut earum dignissimos deleniti quaerat nobis veritatis blanditiis sunt exercitationem laborum, magni voluptatum ut maiores amet, ullam fugiat dolorum? Animi deleniti itaque vel? Ut nihil praesentium cumque perferendis, fugit nisi, numquam explicabo eum quidem accusamus delectus quas! Fugiat error debitis consectetur cum id."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
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
