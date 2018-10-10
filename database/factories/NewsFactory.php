<?php

use Illuminate\Support\Facades\Storage;
use Faker\Generator as Faker;
use App\Models\News;

$factory->define(News::class, function (Faker $faker) {
	return [
		'title' => $faker->unique()->text(100),
		'description' => $faker->text(255),
		'content' => $faker->paragraph(100),
		'thumbnail' => $faker->unique()
		                     ->image(
		                     	public_path('images'),
			                     150,
		                        150,
		                        null,
		                        false
		                     ),
		'image' => $faker->unique()
		                 ->image(
		                 	    public_path('images'),
			                 900,
			                 300,
			                 null,
			                 false
		                 ),
		'created_at' => $faker->dateTime,
	];
});
