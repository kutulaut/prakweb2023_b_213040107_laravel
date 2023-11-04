<?php

namespace App\Models;

class Post 
{
  private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Sandhika Galih",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quaerat error libero quod ipsa minus labore eos, alias iusto at, ipsum obcaecati repellendus. Deleniti placeat est quam ea error. Assumenda, ut dicta ullam ipsam quaerat ipsum, odio quidem doloremque rerum accusamus voluptate qui saepe consectetur fugiat repellendus? Vitae delectus ipsum minus doloribus officiis illo est recusandae enim nisi ab perspiciatis tenetur, quam perferendis, soluta officia numquam amet tempora dolorum animi ut voluptates id neque nostrum veniam. Incidunt ut laboriosam ab."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Doddy Ferdiansyah",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam voluptates numquam voluptatem illum. Assumenda corporis rem ut vel veniam magni explicabo mollitia blanditiis, nobis voluptates? Corrupti, fuga. Laudantium nemo nesciunt aspernatur, quis accusamus molestiae porro dolorem quidem nostrum ipsam iusto laborum, repellendus esse maxime voluptate odio inventore itaque suscipit sed repellat quasi. Qui provident non iure sapiente harum amet et minus, officia dolorum cupiditate ut voluptates modi. Ipsum cupiditate dolores ex, soluta doloribus facilis dolorem explicabo laborum quidem aperiam? Eos ad asperiores debitis laboriosam maiores, in ipsum possimus earum officia id ipsam molestias consequatur iusto, odio, consectetur aspernatur laudantium dolorem."
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
