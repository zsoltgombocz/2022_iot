<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sensor;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensor::factory()->count(2)->create(['berendezes_id'=>1]);
        Sensor::factory()->count(1)->create(['berendezes_id'=>2]);
    }
}
