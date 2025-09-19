<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 4,
                'name' => 'آیفون',
                'created_at' => '2025-09-02 09:23:07',
                'updated_at' => '2025-09-02 09:23:07',
                'image' => 'images/1756817587.static_phone_iphone_new.webp'
            ],
            [
                'id' => 5,
                'name' => 'سامسونگ',
                'created_at' => '2025-09-02 10:06:39',
                'updated_at' => '2025-09-02 10:06:39',
                'image' => 'images/1756820199.static_phone_samsung_new.png'
            ],
            [
                'id' => 7,
                'name' => 'شیائومی',
                'created_at' => '2025-09-17 02:33:57',
                'updated_at' => '2025-09-17 02:33:57',
                'image' => 'images/1758089036.static_phone_xiaomi_new.png'
            ],
        ]);
    }
}
