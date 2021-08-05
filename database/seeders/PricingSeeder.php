<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pricing::create([
            'title' => 'Bronze',
            'plainMyId' => 'pay-602526be3d5cfkass.43389561',
            'price' => 2799
        ]);

        Pricing::create([
            'title' => 'Prata',
            'plainMyId' => 'pay-602526be3d5cfkass.43389562',
            'price' => 5999
        ]);
    }
}
