<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $train = new Train();
        $train->azienda = $faker->randomElement(['Anas','Treni Italia','RFI']);
        $train->stazione_di_partenza = $faker->city();
        $train->stazione_di_arrivo = $faker->city();
        $train->orario_di_partenza = $faker->Time() > $train->stazione_di_arrivo;
        $train->orario_di_arrivo = $faker->Time();
        $train->codice_treno = $faker->randomNumber(6,true);
        $train->numero_carrozze = $faker-> numberBetween(7, 20);
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean() != $train->in_orario;
        $train->save();
    }
}
