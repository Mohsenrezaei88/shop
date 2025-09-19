<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('attributes')->insert([
            ['id'=>49, 'product_id'=>15, 'name'=>'رنگ', 'value'=>'#e6c794', 'price'=>1500000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>51, 'product_id'=>15, 'name'=>'حافظه', 'value'=>'256 گیگابایت', 'price'=>1000000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>52, 'product_id'=>15, 'name'=>'حافظه', 'value'=>'512 گیگابایت', 'price'=>2000000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>53, 'product_id'=>15, 'name'=>'رم', 'value'=>'8', 'price'=>1000000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>54, 'product_id'=>15, 'name'=>'رم', 'value'=>'16', 'price'=>1500000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>55, 'product_id'=>15, 'name'=>'گارانتی', 'value'=>'6 ماهه', 'price'=>500000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>56, 'product_id'=>15, 'name'=>'گارانتی', 'value'=>'1 ساله', 'price'=>1000000, 'created_at'=>'2025-09-16 05:54:35', 'updated_at'=>'2025-09-16 15:17:42'],
            ['id'=>59, 'product_id'=>17, 'name'=>'رنگ', 'value'=>'#00e676', 'price'=>1500000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>60, 'product_id'=>17, 'name'=>'حافظه', 'value'=>'256', 'price'=>1000000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>61, 'product_id'=>17, 'name'=>'حافظه', 'value'=>'512', 'price'=>1500000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>62, 'product_id'=>17, 'name'=>'رم', 'value'=>'8', 'price'=>1000000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>63, 'product_id'=>17, 'name'=>'رم', 'value'=>'12', 'price'=>2000000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>64, 'product_id'=>17, 'name'=>'گارانتی', 'value'=>'6 ماهه', 'price'=>500000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>65, 'product_id'=>17, 'name'=>'گارانتی', 'value'=>'1 ساله', 'price'=>1000000, 'created_at'=>'2025-09-17 02:28:50', 'updated_at'=>'2025-09-17 02:28:50'],
            ['id'=>66, 'product_id'=>18, 'name'=>'رم', 'value'=>'8', 'price'=>1000000, 'created_at'=>'2025-09-17 02:47:39', 'updated_at'=>'2025-09-17 02:47:39'],
            ['id'=>67, 'product_id'=>18, 'name'=>'رم', 'value'=>'16', 'price'=>2000000, 'created_at'=>'2025-09-17 02:47:39', 'updated_at'=>'2025-09-17 02:47:39'],
            ['id'=>68, 'product_id'=>18, 'name'=>'حافظه', 'value'=>'256', 'price'=>200000, 'created_at'=>'2025-09-17 02:47:39', 'updated_at'=>'2025-09-17 02:47:39'],
            ['id'=>69, 'product_id'=>18, 'name'=>'حافظه', 'value'=>'512', 'price'=>250000, 'created_at'=>'2025-09-17 02:47:39', 'updated_at'=>'2025-09-17 02:47:39'],
            ['id'=>70, 'product_id'=>18, 'name'=>'رنگ', 'value'=>'#000000', 'price'=>1000000, 'created_at'=>'2025-09-17 02:47:39', 'updated_at'=>'2025-09-17 02:47:39'],
            ['id'=>71, 'product_id'=>18, 'name'=>'رنگ', 'value'=>'#00e676', 'price'=>500000, 'created_at'=>'2025-09-17 02:47:39', 'updated_at'=>'2025-09-17 02:47:39'],
            ['id'=>72, 'product_id'=>22, 'name'=>'رنگ', 'value'=>'#000000', 'price'=>1500000, 'created_at'=>'2025-09-17 03:22:14', 'updated_at'=>'2025-09-17 03:22:14'],
            ['id'=>73, 'product_id'=>22, 'name'=>'رنگ', 'value'=>'#1c39ca', 'price'=>1000000, 'created_at'=>'2025-09-17 03:22:14', 'updated_at'=>'2025-09-17 03:22:14'],
            ['id'=>74, 'product_id'=>22, 'name'=>'حافظه', 'value'=>'256', 'price'=>1500000, 'created_at'=>'2025-09-17 03:22:14', 'updated_at'=>'2025-09-17 03:22:14'],
            ['id'=>75, 'product_id'=>22, 'name'=>'حافظه', 'value'=>'512', 'price'=>2500000, 'created_at'=>'2025-09-17 03:22:14', 'updated_at'=>'2025-09-17 03:22:14'],
            ['id'=>76, 'product_id'=>22, 'name'=>'رم', 'value'=>'8', 'price'=>1000000, 'created_at'=>'2025-09-17 03:22:14', 'updated_at'=>'2025-09-17 03:22:14'],
        ]);
    }
}
