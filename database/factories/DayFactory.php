<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Day::class, function (Faker $faker) {
    return [
        'binder_id' => function () {
            return factory(App\Binder::class)->create()->id;
        },
        'name' => $faker->name,
        'date' => $faker->date(),
    ];
});
