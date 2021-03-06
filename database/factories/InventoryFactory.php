<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inventory;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'middlename' => $faker->middlename,
        'lastname' => $faker->lastname,
    ];
});