<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kategori;
use Faker\Generator as Faker;

$factory->define(Kategori::class, function (Faker $faker) {

    return [
        'kategori' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
