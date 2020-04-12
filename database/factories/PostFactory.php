<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'judul' => $faker->word,
        'kategori' => $faker->randomDigitNotNull,
        'tag' => $faker->randomDigitNotNull,
        'gambar' => $faker->word,
        'body' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
