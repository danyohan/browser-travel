<?php

namespace Database\Seeders;

use App\Models\Weather;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weather::create([
            'lat' => '25.77427',
            'lng' => '-80.19366',
            'city'=> 'Miami'
        ]);

        Weather::create([
            'lat' => '28.53834',
            'lng' => '-81.37924',
            'city'=> 'Orlando'
        ]);

        Weather::create([
            'lat' => '40.71427',
            'lng' => '-74.00597',
            'city'=> 'New York'
        ]);
    }
}
