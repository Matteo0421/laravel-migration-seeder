<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

use Faker\Generator as Faker;

class TrainsSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++){

            $new_train = new Train();
            $new_train->agency = $faker->words(1,true);
            $new_train->departure_station = $faker->words(1,true);
            $new_train->arrival_station = $faker->words(1,true);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->duration = $faker->time();
            $new_train->train_code = $faker->numberBetween(0, 100);
            $new_train->carriage_number = $faker->numberBetween(0, 100);
            $new_train->in_time = $faker->words(1,true);

            $new_train->save();

            dump($new_train);
        }
    }
}


// bisogna installare il faker tramite terminale con il comando composer require fakerphp/faker --dev
