<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        dump('run TrainsSeeder !!!!');


        //
        $trains = [

            [
                "agency" => 'italo',
                "departure_station" => 'napoli',
                "arrival_station" => 'milano',
                "departure_time" => '08:00:00',
                "arrival_time" => '14:00:00',
                "duration" => '06:00:00',
                "train_code" => '43',
                "carriage_number" => '01',
                "in_time" => 'true',
            ],
            [
                "agency" => 'italo',
                "departure_station" => 'napoli',
                "arrival_station" => 'roma',
                "departure_time" => '08:00:00',
                "arrival_time" => '12:00:00',
                "duration" => '04:00:00',
                "train_code" => '22',
                "carriage_number" => '11',
                "in_time" => 'false',
            ],
        ];

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->agency = $train['agency'];
            $new_train->departure_station = $train['departure_station'];
            $new_train->arrival_station = $train['arrival_station'];
            $new_train->departure_time = $train['departure_time'];
            $new_train->arrival_time = $train['arrival_time'];
            $new_train->duration = $train['duration'];
            $new_train->train_code = $train['train_code'];
            $new_train->carriage_number = $train['carriage_number'];
            $new_train->in_time = $train['in_time'];

            $new_train->save();

        }

    }
}
