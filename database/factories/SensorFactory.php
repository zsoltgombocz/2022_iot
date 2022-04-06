<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Installment;

class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'berendezes_id' => Installment::factory()->create(),
            'nev' => $this->faker->creditCardNumber(),
        ];
    }
}
