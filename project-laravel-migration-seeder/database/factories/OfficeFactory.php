<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'name' => ($faker -> name),
        'address' => ($faker -> address),
        'numberDependent' => ($faker -> numberBetween($min = 5, $max = 30))
    ];
});
