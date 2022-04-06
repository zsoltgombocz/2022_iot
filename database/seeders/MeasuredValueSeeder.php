<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MeasuredValue;

class MeasuredValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MeasuredValue::factory()->count(3)->create(['szenzor_id'=>1]);
        MeasuredValue::factory()->count(3)->create(['szenzor_id'=>3]);
        
    }
}
