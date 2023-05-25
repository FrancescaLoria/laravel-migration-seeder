<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i < 30; $i++) { 
            $new_train = new Train();
            $new_train->azienda = $faker->name();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->randomElement(['8:00', '9:00', '10:00', '11:00']);
            $new_train->orario_di_arrivo = $faker->randomElement(['17:00', '18:00', '19:00', '20:00']);
            $new_train->data = $faker->randomElement(['05/24/2023', '05/25/2023', '05/26/2023']);
            $new_train->codice_treno = $faker->randomNumber(5, true);
            $new_train->numero_carrozze = $faker->numberBetween(1, 10);
            $new_train->In_orario = $faker->boolean(true);
            $new_train->Cancellato = $faker->boolean(false);
            $new_train->save();

        }
    }
}
