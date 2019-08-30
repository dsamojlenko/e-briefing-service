<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'binder_id' => function () {
            return factory(App\Binder::class)->create()->id;
        },
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'telephone' => $faker->word,
        'title' => $faker->word,
        'image' => $faker->word,
        'body' => $faker->text,
    ];
});
