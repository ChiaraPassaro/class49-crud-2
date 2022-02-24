<?php

use App\Glass;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class GlassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newGlass = new Glass();
            $newGlass->name = $faker->words(2, true);
            $newGlass->type = $faker->words(2, true);
            $newGlass->material = $faker->words(1, true);
            $newGlass->capacity =
                $faker->randomNumber(3, false);
            $newGlass->height =
                $faker->randomNumber(3, false);
            $newGlass->diameter =
                $faker->randomNumber(3, false);

            $newGlass->save();
        }
    }
}
