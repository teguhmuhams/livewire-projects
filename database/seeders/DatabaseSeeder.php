<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $continents = [
            ['id' => 1, 'name' => 'Asia'],
            ['id' => 2, 'name' => 'Europe'],
            ['id' => 3, 'name' => 'Africa'],
            ['id' => 4, 'name' => 'America'],
            ['id' => 5, 'name' => 'Australia']
        ];

        foreach ($continents as $continent) {
            Continent::factory()->create($continent)->each(function ($c) {
                $c->countries()->saveMany(Country::factory(10)->make());
            });
        }

        Product::factory(100)->create();
    }
}
