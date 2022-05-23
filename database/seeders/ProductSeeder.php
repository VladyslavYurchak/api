<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $value) {
            DB::table('products')->insert(
                [
                    'name' => $faker->name,
                    'detail' => $faker->text('50'),
                    'price' => $faker->numberBetween(1000, 50000),
                    'stock' => $faker->numberBetween(1, 20),
                    'discount' => $faker->numberBetween(1, 50),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
        }
    }
}
