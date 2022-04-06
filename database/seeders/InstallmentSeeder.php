<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Installment;

class InstallmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Installment::factory()->count(2)->create(['uzem_id'=>1]);
    }
}
