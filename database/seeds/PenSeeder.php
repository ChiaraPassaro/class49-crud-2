<?php

use App\Pen;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $newPen = new Pen();
            $newPen->name = $faker->word();
            $newPen->brand = $faker->word();
            $newPen->series = $faker->words(2, true);
            $newPen->color = $faker->safeColorName();
            $newPen->type = $faker->word();
            $newPen->refill = $faker->word();
            $newPen->body_material = $faker->words(2, true);
            $newPen->closed_length = $faker->randomNumber(3, false);
            $newPen->body_length = $faker->randomNumber(3, false);
            $newPen->cap_length = $faker->randomNumber(2, false);
            $newPen->diameter = $faker->randomFloat(1, 20, 30);
            $newPen->weight = $faker->randomNumber(2, false);

            $newPen->save();
        }
    }
}
