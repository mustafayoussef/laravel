<?php

use App\Company;
use App\User;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {

    return [
        'name'       => $faker->word,
        'email'      => $faker->email,
        'creator_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
