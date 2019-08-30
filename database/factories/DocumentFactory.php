<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'binder_id' => function () {
            return factory(App\Binder::class)->create()->id;
        },
        'document_type' => $faker->text,
        'name' => $faker->name,
        'file' => $faker->word,
        'sort_id' => $faker->randomNumber(),
        'is_protected' => $faker->boolean,
        'document_type_id' => function () {
            return factory(App\DocumentType::class)->create()->id;
        },
    ];
});
