<?php

use App\{User, Timeline, Frame, Media};
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Timeline::class, function(Faker $faker) {
	return [
		'slug' => $faker->word,
		'title' => $faker->word,
		'subtitle' => $faker->sentence,
	];
});

$factory->define(Frame::class, function(Faker $faker) {
	return [
		'timeline_id' => function() {
			return create(Timeline::class)->id;
		},
		'title' => $faker->year(),
		'content' => $faker->paragraph,
		'background' => $faker->word,
	];
});

$factory->define(Media::class, function(Faker $faker) {
	return [
		'frame_id' => function() {
			return create(Frame::class)->id;
		},
		'url' => $faker->url,
		'label' => $faker->sentence,
		'description' => $faker->sentence,
	];
});