<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
	$products = App\Product::pluck('id');
	$customers = App\Customer::pluck('id');
    return [
        'title' => $faker->name,
        'content' => $faker->text,
        'product_id' => $faker->randomElement($products),
        'customer_id' => $faker->randomElement($customers),
    ];
});
