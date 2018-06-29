<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email' => $faker->unique()->safeEmail,
        'cost' =>$faker->numberBetween($min=1000, $max=999999),
        'category_id' => $faker->numberBetween($min=1, $max=3)
    ];
});
