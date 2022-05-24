<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MeasuredValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'szenzor_id' => Sensor::factory()->create(),
            'mert_ertek' => $this->faker->randomFloat(NULL, 0, 10),
        ];
    }
}
