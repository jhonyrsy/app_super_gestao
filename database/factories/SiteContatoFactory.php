<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContatos;
use Faker\Generator as Faker;

$factory->define(SiteContatos::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->email,
        'motivo_contato' => $faker->numberBetween(1,3),
        'mensagem' => $faker->text(200)
    ];
});
