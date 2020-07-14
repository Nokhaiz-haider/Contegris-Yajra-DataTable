<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customers;
use Faker\Generator as Faker;

$factory->define(App\Customers::class, function (Faker\Generator $faker) {
    return [
        'cust_first_name' => $faker->firstName,
        'cust_last_name'  => $faker->lastName,
        'cust_email'      => $faker->email,
        'cust_tel_no'     => $faker->phoneNumber,
        'cust_address'    => $faker->address,
        'cust_city'       => $faker->city,
    ];
});
