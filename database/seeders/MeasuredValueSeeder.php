<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MeasuredValue;
use Carbon\Carbon;

class MeasuredValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = Carbon::create('2022', '4', '1', '0', '0', '0');
        while ($datetime <= Carbon::now()) {

            MeasuredValue::factory()->count(1)->create(['szenzor_id' => 1, 'created_at' => $datetime]);
            MeasuredValue::factory()->count(1)->create(['szenzor_id' => 2, 'created_at' => $datetime]);
            MeasuredValue::factory()->count(1)->create(['szenzor_id' => 3, 'created_at' => $datetime]);

            $datetime->addMinute('10');
        }
    }
}
