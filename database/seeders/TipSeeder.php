<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tip;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tips = [
            [
                'title' => 'Switch to LED Bulbs',
                'description' => 'LED bulbs consume far less energy and last longer than traditional bulbs.',
                'benefits' => "Reduces electricity consumption\nLower replacement cost\nProduces less heat",
                'energy_saving' => 'Save up to 75% compared to incandescent bulbs.',
            ],
            [
                'title' => 'Unplug Devices When Not in Use',
                'description' => 'Devices continue to draw power even when turned off. Unplugging them reduces wasted energy.',
                'benefits' => "Saves energy from unused devices\nProtects from power surges\nReduces electricity bill",
                'energy_saving' => 'Can save 5–10% of household electricity.',
            ],
            [
                'title' => 'Use Natural Light During the Day',
                'description' => 'Make use of sunlight instead of artificial light.',
                'benefits' => "Reduces lighting costs\nImproves productivity\nZero cost habit",
                'energy_saving' => 'Cuts daytime lighting usage by 30–50%.',
            ]
        ];

        foreach ($tips as $tip) {
            Tip::create($tip);
        }
    }
}
