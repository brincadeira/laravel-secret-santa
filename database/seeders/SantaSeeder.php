<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santa;
use Faker\Factory as Faker;

class SantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i<51; $i++) {
            Santa::create([
                'id' => $i,
                'name' => $faker->name,
            ]);
        }
    }
}