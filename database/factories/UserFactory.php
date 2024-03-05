<?php

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * Model Factories
 *
 * This directory should contain each of the model factory definitions for
 * your application. Factories provide a convenient way to generate new
 * model instances for testing / seeding your application's database.
 *
 * @category UserFactory
 * @package  UserFactory
 * @author   Sugiarto <sugiarto.dlingo@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

$factory->define(
	User::class,
	function (Faker $faker) {
		return [
			'first_name' => $faker->firstName,
			'last_name' => $faker->lastName,
			'email' => $faker->unique()->safeEmail,
			'email_verified_at' => now(),
			'password' => bcrypt('kini@123'), // password
			'remember_token' => Str::random(10),
		];
	}
);
