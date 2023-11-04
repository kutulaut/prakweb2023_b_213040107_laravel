<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab distinctio natus quibusdam ad, minus error, nisi soluta aperiam quos nobis nam nulla dicta assumenda incidunt illo cumque, nihil eaque maiores enim nesciunt atque provident explicabo qui. Illum possimus ex debitis consectetur voluptatum! Quaerat sit blanditiis amet. Doloribus similique dolore deserunt iusto, error quis voluptatem nostrum cum impedit reiciendis alias excepturi, fuga aliquam provident quisquam dolor iste officiis veritatis illo animi repellat asperiores quasi ut! Eum obcaecati, id minus assumenda consectetur nam quis ex nemo praesentium ducimus totam quam aut quibusdam magni soluta saepe? Exercitationem esse distinctio optio tempore adipisci omnis.',
        //     'category_id' =>1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab distinctio natus quibusdam ad, minus error, nisi soluta aperiam quos nobis nam nulla dicta assumenda incidunt illo cumque, nihil eaque maiores enim nesciunt atque provident explicabo qui. Illum possimus ex debitis consectetur voluptatum! Quaerat sit blanditiis amet. Doloribus similique dolore deserunt iusto, error quis voluptatem nostrum cum impedit reiciendis alias excepturi, fuga aliquam provident quisquam dolor iste officiis veritatis illo animi repellat asperiores quasi ut! Eum obcaecati, id minus assumenda consectetur nam quis ex nemo praesentium ducimus totam quam aut quibusdam magni soluta saepe? Exercitationem esse distinctio optio tempore adipisci omnis.',
        //     'category_id' =>1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab distinctio natus quibusdam ad, minus error, nisi soluta aperiam quos nobis nam nulla dicta assumenda incidunt illo cumque, nihil eaque maiores enim nesciunt atque provident explicabo qui. Illum possimus ex debitis consectetur voluptatum! Quaerat sit blanditiis amet. Doloribus similique dolore deserunt iusto, error quis voluptatem nostrum cum impedit reiciendis alias excepturi, fuga aliquam provident quisquam dolor iste officiis veritatis illo animi repellat asperiores quasi ut! Eum obcaecati, id minus assumenda consectetur nam quis ex nemo praesentium ducimus totam quam aut quibusdam magni soluta saepe? Exercitationem esse distinctio optio tempore adipisci omnis.',
        //     'category_id' =>2,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab distinctio natus quibusdam ad, minus error, nisi soluta aperiam quos nobis nam nulla dicta assumenda incidunt illo cumque, nihil eaque maiores enim nesciunt atque provident explicabo qui. Illum possimus ex debitis consectetur voluptatum! Quaerat sit blanditiis amet. Doloribus similique dolore deserunt iusto, error quis voluptatem nostrum cum impedit reiciendis alias excepturi, fuga aliquam provident quisquam dolor iste officiis veritatis illo animi repellat asperiores quasi ut! Eum obcaecati, id minus assumenda consectetur nam quis ex nemo praesentium ducimus totam quam aut quibusdam magni soluta saepe? Exercitationem esse distinctio optio tempore adipisci omnis.',
        //     'category_id' =>2,
        //     'user_id' =>2
        // ]);
    }
}
