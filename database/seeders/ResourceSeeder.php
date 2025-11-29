<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $resources = [
            [
                'title' => 'What is Clean Energy? (United Nations)',
                'type' => 'article',
                'url' => 'https://www.un.org/sustainabledevelopment/energy/',
                'description' => 'An official overview of SDG 7 and the global push toward affordable and clean energy.'
            ],
            [
                'title' => 'How Solar Panels Work',
                'type' => 'video',
                'url' => 'https://www.youtube.com/watch?v=xKxrkht7CpY',
                'description' => 'A simple explanation of how solar photovoltaic systems convert sunlight into electricity.'
            ],
            [
                'title' => 'Energy Saving Tips (Energy.gov)',
                'type' => 'article',
                'url' => 'https://www.energy.gov/energysaver/energy-saver',
                'description' => 'Government-certified energy-saving advice for homes and buildings.'
            ],
        ];

        foreach ($resources as $resource) {
            Resource::create($resource);
        }
    }
}
