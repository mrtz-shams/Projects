<?php

use Faker\Generator as Faker;

// $factory->define(App\Project::class, function (Faker $faker) {
//     return [
//         'title'=> $faker -> company,
//         'user_id' => $faker -> numberBetween($min = 1, $max = 20),
//         'description' => $faker -> paragraphs($nb = 3, $asText = false),
//         'status' => $faker -> numberBetween($min = 0, $max = 1),
//     ];
// });

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker-> company,
        'user_id' => $faker-> numberBetween($min = 1, $max = 20),
        'status' => $faker-> numberBetween($min = 0, $max = 1),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});