<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sensor;

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
            'mert_ertek' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10),
        ];
    }
}
