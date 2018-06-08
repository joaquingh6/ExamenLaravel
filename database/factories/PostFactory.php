<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        "user_id"       => rand(1,19),
        "category_id"   => rand(1,20),
        "name"          => $title,
        "slug"          => str_slug($title),
        "excerpt"       => $faker->text(rand(50,100)),
        "body"          => $faker->text(rand(150,200)),
        "file"          => "http://placeimg.com/1200/400/".rand(1,1000),
        "status"        => $faker->randomElement(["DRAFT" , "PUBLISHED"]),
        "access"        => $faker->randomElement(["PRIVATE" , "PUBLIC"]),

    ];
});
