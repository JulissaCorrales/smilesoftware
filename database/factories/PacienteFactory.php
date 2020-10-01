<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Paciente::class, function (Faker $faker) {
    return [
        'nombres'=>$faker->firstName." ".$faker->firstName,
        'apellidos'=>$faker->lastName." ".$faker->lastName,
        'identidad'=>$faker->numerify('####-').$faker->numberBetween(1950,2005)
        .$faker->numerify('#####'),
        'sexo'=>$faker->text,
        'fechaNacimiento'=>$faker->dateTimeBetween('-40 years','-16 years'),
        'departamento'=>$faker->state ,
        'ciudad'=>$faker->city,
        'direccion'=>$faker->address,
        'telefonoFijo'=>$faker->phoneNumber,
        'telefonoCelular'=>$faker->phoneNumber,
        'profesion'=>$faker->jobTitle,
        'empresa'=>$faker->company,
        'observaciones'=>$faker->realText(rand(10,20))


    ];
});
