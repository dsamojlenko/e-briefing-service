<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'binder_id' => function () {
            return factory(App\Binder::class)->create()->id;
        },
        'title' => $faker->word,
        'body' => $faker->text,
        'sort_id' => $faker->randomNumber(),
        'is_protected' => $faker->boolean,
    ];
});
