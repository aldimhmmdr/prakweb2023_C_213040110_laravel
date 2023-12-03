<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'web programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-Design'
        ]);


        Post::factory(20)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Aldi Muhammad',
            'email' => 'aldimuhammad@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        // 'name' => 'Dika Karomalloh',
        // 'email' => 'dika@gmail.com',
        // 'password' => bcrypt('12345')
        // ]);

        //Post::create([
        //  'title' => 'Judul Pertama',
        //  'slug' => 'judul-pertama',
        //  'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //  'body' => '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa architecto deleniti at! Optio provident beatae, nam veniam ullam blanditiis asperiores dolor totam obcaecati commodi delectus quia, dignissimos possimus minima eum? Earum rem porro, quo molestias sit placeat dolore odio ad minus nihil distinctio expedita voluptates illo deleniti praesentium maiores modi aperiam alias facere? Praesentium in, dolores placeat sit vel esse, cum magni optio quisquam harum impedit repudiandae deleniti obcaecati aliquam rerum quam sunt magnam nobis odio! Nobis hic voluptate, molestias minima eaque ut unde magnam, veniam consectetur itaque praesentium ipsa eos, nesciunt expedita possimus quas fugiat inventore nulla repudiandae.',
        //  'category_id' => 1,
        //  'user_id' => 1
        //]);

        // Post::create([
        // 'title' => 'Judul Ke Dua',
        // 'slug' => 'judul-ke-dua',
        // 'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //  'body' => '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa architecto deleniti at! Optio provident beatae, nam veniam ullam blanditiis asperiores dolor totam obcaecati commodi delectus quia, dignissimos possimus minima eum? Earum rem porro, quo molestias sit placeat dolore odio ad minus nihil distinctio expedita voluptates illo deleniti praesentium maiores modi aperiam alias facere? Praesentium in, dolores placeat sit vel esse, cum magni optio quisquam harum impedit repudiandae deleniti obcaecati aliquam rerum quam sunt magnam nobis odio! Nobis hic voluptate, molestias minima eaque ut unde magnam, veniam consectetur itaque praesentium ipsa eos, nesciunt expedita possimus quas fugiat inventore nulla repudiandae.',
        //  'category_id' => 1,
        //  'user_id' => 1
        //]);

        //Post::create([
        //  'title' => 'Judul Ke Tiga',
        //  'slug' => 'judul-ke-tiga',
        //  'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //  'body' => '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa architecto deleniti at! Optio provident beatae, nam veniam ullam blanditiis asperiores dolor totam obcaecati commodi delectus quia, dignissimos possimus minima eum? Earum rem porro, quo molestias sit placeat dolore odio ad minus nihil distinctio expedita voluptates illo deleniti praesentium maiores modi aperiam alias facere? Praesentium in, dolores placeat sit vel esse, cum magni optio quisquam harum impedit repudiandae deleniti obcaecati aliquam rerum quam sunt magnam nobis odio! Nobis hic voluptate, molestias minima eaque ut unde magnam, veniam consectetur itaque praesentium ipsa eos, nesciunt expedita possimus quas fugiat inventore nulla repudiandae.',
        //  'category_id' => 2,
        //  'user_id' => 1
        // ]);

        // Post::create([
        // 'title' => 'Judul Ke Empat',
        // 'slug' => 'judul-ke-empat',
        // 'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        // 'body' => '  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo culpa architecto deleniti at! Optio provident beatae, nam veniam ullam blanditiis asperiores dolor totam obcaecati commodi delectus quia, dignissimos possimus minima eum? Earum rem porro, quo molestias sit placeat dolore odio ad minus nihil distinctio expedita voluptates illo deleniti praesentium maiores modi aperiam alias facere? Praesentium in, dolores placeat sit vel esse, cum magni optio quisquam harum impedit repudiandae deleniti obcaecati aliquam rerum quam sunt magnam nobis odio! Nobis hic voluptate, molestias minima eaque ut unde magnam, veniam consectetur itaque praesentium ipsa eos, nesciunt expedita possimus quas fugiat inventore nulla repudiandae.',
        // 'category_id' => 2,
        //  'user_id' => 2
        //]);
    }
}
