<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(Faker $faker)
        {
            for($i = 0; $i < 10; $i++) {
                    $new_train = new Train();
                
                    $new_train->azienda = $faker->company();
                    $new_train->stazione_di_partenza = $faker->streetName();
                    $new_train->stazione_di_arrivo = $faker->streetName();
                    $new_train->orario_di_partenza = $faker->dateTimeAD('now');
                    $new_train->orario_di_arrivo = $faker->dateTimeAD('now');
                    $new_train->codice_treno = $faker->numberBetween(0, 1000);
                    $new_train->numero_carrozze = $faker->numberBetween(0, 20);
                    $new_train->in_orario = $faker->boolean();
                    $new_train->cancellato = $faker->boolean();
                    
                    $new_train->save();
                
            }
        }
}
