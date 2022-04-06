<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plant;

class InstallmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'uzem_id' => Plant::factory()->create(),
            'nev' => 'randomberedenzes_faker_nem_tud_adni'
        ];
    }
}
