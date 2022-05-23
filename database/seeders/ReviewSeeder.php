<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
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
            DB::table('reviews')->insert(
                [
                    'product_id' => $faker->randomElement(DB::table('products')->pluck('id')),
                    'customer' => $faker->name,
                    'review' => $faker->text(100),
                    'star' => $faker->numberBetween(1, 5),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
        }
    }
}
