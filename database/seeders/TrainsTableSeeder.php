<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $faker = Faker\Factory::create('it_IT');
        $newTrain->azienda = $faker->randomElement(["Trenitalia SpA", "Trenord Srl"]);
        $newTrain->stazione_partenza = $faker->city();
        $newTrain->stazione_arrivo = $faker->city();
        $newTrain->data_di_partenza = $faker->dateTimeThisMonth('+30 days');
        $newTrain->orario_partenza = $faker->time();
        $newTrain->orario_arrivo = $faker->time();
        $newTrain->codice_treno = $faker->numberBetween(1000, 9999);
        $newTrain->numero_carrozze = $faker->numberBetween(4, 20);
        $newTrain->in_orario = $faker->boolean();
        $newTrain->in_ritardo = $faker->boolean();
        $newTrain->save();

        // dd($newTrain);
    }
}
