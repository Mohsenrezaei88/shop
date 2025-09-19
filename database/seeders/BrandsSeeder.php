<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('brands')->insert([
            ['id'=>1, 'name'=>'اپل', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>null],
            ['id'=>2, 'name'=>'سامسونگ', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>'2025-09-06 01:14:49'],
            ['id'=>3, 'name'=>'گوگل پیکسل', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>null],
            ['id'=>4, 'name'=>'وان پلاس', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>null],
            ['id'=>5, 'name'=>'هوواوی', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>null],
            ['id'=>6, 'name'=>'شیائومی', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>null],
            ['id'=>7, 'name'=>'اوپو', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>null],
            ['id'=>9, 'name'=>'ویوو', 'created_at'=>'2025-09-06 01:17:44', 'updated_at'=>'2025-09-06 01:17:44'],
        ]);
    }
}
