<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ObjekWisata;
use Faker\Generator as Faker;

$factory->define(ObjekWisata::class, function (Faker $faker) {
    return [
        'nama_objek_wisata' => $faker->words(3,true),
        'lokasi' => $faker->text,
        'foto' => $faker->text,
        'longitude' => $faker->text,
        'latitude' => $faker->text,
        'category_id' => 1,
        'kabupaten_id' => 2,
        'deskripsi' => $faker->text,
        'cbt_id' => 1,
    ];
});
