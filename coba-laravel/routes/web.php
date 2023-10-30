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
        "name" => "Aldi Muhammad",
        "email" => "Aldimuhammad@unpas.ac.id",
        "image" => "aldi.jpg"
    ]);
});
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aldi Muhammad",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi saepe provident asperiores quae magnam totam quia, fuga sint, voluptas rem nisi, ipsam quam reprehenderit enim molestias eius sunt error vero tempore eveniet temporibus ex. Ea inventore quos nihil fugiat impedit itaque, adipisci aliquid pariatur sit fuga accusamus ducimus dolores vel, quidem consequatur voluptatem sunt? Blanditiis non exercitationem sequi eum voluptates molestias distinctio architecto, eaque veniam neque eligendi nesciunt saepe tenetur cum? Recusandae iure quidem atque aperiam omnis hic rerum numquam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dika Karomalloh",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nam minima doloremque molestiae beatae, quam, ratione modi illo ut debitis, eos qui expedita suscipit excepturi repudiandae? Ea totam natus at laborum est optio laudantium qui voluptas nam fugit assumenda repellendus mollitia, sapiente aspernatur beatae eaque quam provident? Nihil culpa molestias, eos veritatis fugit, sequi magnam saepe libero nam, laborum unde tempora asperiores excepturi eum cum aliquam architecto provident illum dignissimos. Fugit, porro. Sunt voluptatum quisquam labore asperiores quam optio, enim esse quae consequuntur quia! Quisquam nulla fugiat amet rerum est pariatur maxime reprehenderit autem. Natus sequi odit a quod dicta?"
        ],
    ];

    return view('Posts', [
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
            "author" => "Aldi Muhammad",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi saepe provident asperiores quae magnam totam quia, fuga sint, voluptas rem nisi, ipsam quam reprehenderit enim molestias eius sunt error vero tempore eveniet temporibus ex. Ea inventore quos nihil fugiat impedit itaque, adipisci aliquid pariatur sit fuga accusamus ducimus dolores vel, quidem consequatur voluptatem sunt? Blanditiis non exercitationem sequi eum voluptates molestias distinctio architecto, eaque veniam neque eligendi nesciunt saepe tenetur cum? Recusandae iure quidem atque aperiam omnis hic rerum numquam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dika Karomalloh",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nam minima doloremque molestiae beatae, quam, ratione modi illo ut debitis, eos qui expedita suscipit excepturi repudiandae? Ea totam natus at laborum est optio laudantium qui voluptas nam fugit assumenda repellendus mollitia, sapiente aspernatur beatae eaque quam provident? Nihil culpa molestias, eos veritatis fugit, sequi magnam saepe libero nam, laborum unde tempora asperiores excepturi eum cum aliquam architecto provident illum dignissimos. Fugit, porro. Sunt voluptatum quisquam labore asperiores quam optio, enim esse quae consequuntur quia! Quisquam nulla fugiat amet rerum est pariatur maxime reprehenderit autem. Natus sequi odit a quod dicta?"
        ],
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
