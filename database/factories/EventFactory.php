<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'day_id' => function () {
            return factory(App\Day::class)->create()->id;
        },
        'contact_id' => $faker->randomNumber(),
        'title' => $faker->word,
        'type' => $faker->word,
        'time_from' => $faker->time(),
        'time_to' => $faker->time(),
        'location_name' => $faker->word,
        'location_address' => $faker->word,
        'location_postal' => $faker->word,
        'description' => $faker->text,
        'body' => $faker->text,
        'is_meal' => $faker->boolean,
    ];
});
