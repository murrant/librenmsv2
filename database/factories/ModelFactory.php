<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Models\DbConfig;
use App\Models\Device;
use App\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->username,
        'realname' => $faker->name,
        'email'    => $faker->email,
        'password' => bcrypt(str_random(10)),
    ];
});


$factory->define(Device::class, function (Faker\Generator $faker) {
    return [
        'hostname' => $faker->domainWord . '.' . $faker->domainName,
        'ip'       => $faker->localIpv4,
    ];
});

$factory->define(DbConfig::class, function (Faker\Generator $faker) {
    return [
        'config_name'  => $faker->regexify('\w+(\.\w+)*'),
        'config_value' => str_random(random_int(0,512)),
    ];
});