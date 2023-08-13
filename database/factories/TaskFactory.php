<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'title' => $faker-> catchPhrase,
        'project_id' => $faker-> numberBetween($min = 1, $max = 100),
        'status' => $faker-> numberBetween($min = 1, $max = 3),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
