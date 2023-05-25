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
            $new_train->stazione_diarrivo = $faker->city();

        }
    }
}
