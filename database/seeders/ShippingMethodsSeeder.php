<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipping_methods')->insert([
            [
                'id' => 1,
                'name' => 'تیباکس',
                'price' => '200000',
                'time' => '2',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'پست',
                'price' => '150000',
                'time' => '3',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
