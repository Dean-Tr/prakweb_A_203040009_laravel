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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dean Tirta S",
        "email" => "203040009@unpas.mail.ac.id",
        "image" => "foto.jpg"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
