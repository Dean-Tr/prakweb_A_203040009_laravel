<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "autor" => "Dean Tirta",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad officiis perferendis repellendus harum provident perspiciatis vero corporis debitis exercitationem nisi. Assumenda, veritatis. Repudiandae, incidunt officiis nihil vel culpa id magnam natus debitis autem eos? Sint, nulla? Vitae eaque minima iste deleniti ipsam provident? Rem possimus minima odit doloremque quis pariatur soluta quisquam, beatae magnam hic ducimus temporibus. Laborum sapiente quam, maiores sequi sunt quisquam aliquid dolor omnis ut ullam voluptate excepturi consectetur, quidem asperiores accusantium explicabo. Expedita fuga odio quisquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "autor" => "jhdksa",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis eligendi hic commodi, voluptas ab inventore sit fugit perspiciatis illo consectetur exercitationem veniam minima distinctio ad quaerat, aut minus eius magnam temporibus enim velit soluta? Illo quisquam perferendis fugiat animi cumque quos minus culpa, rerum aperiam tenetur, dolorum voluptates dolorem officia quae harum blanditiis. Laborum qui necessitatibus, neque nulla eveniet incidunt sit ad illo ipsum at, quo quasi quos nam quibusdam vero expedita quia eos quisquam doloremque nisi odio animi voluptate quod. Laborum, nobis facere, earum facilis veritatis culpa dolore officiis sint vel quo reiciendis? Sint at ipsa mollitia distinctio corporis?"
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
