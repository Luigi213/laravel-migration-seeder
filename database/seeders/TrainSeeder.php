<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<15; $i++){
            $newTrain = new Train();
            $newTrain->nome_azienda = $faker->lexify('id-????');
            $newTrain->stazione_di_partenza = $faker->streetName();
            $newTrain->stazione_di_arrivo = $faker->streetName();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->randomNumber(6, true);
            $newTrain->numero_di_carozze = $faker->randomNumber(2, false);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
