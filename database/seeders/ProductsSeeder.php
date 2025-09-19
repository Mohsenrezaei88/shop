<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id'=>15,
                'name'=>'اپل مدل iPhone 16 Pro Max ZA/A',
                'description'=>'<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، </h3><p>چاپگرها و متون بلکه روزنامه و مجله...</p><blockquote><strong>متن 1 : تست</strong></blockquote><p><span style="color: rgb(0, 102, 204);">متن 2 : </span><span style="color: rgb(230, 0, 0); background-color: rgb(102, 163, 224);">تست</span></p><ol><li>تست</li><li>تست</li><li>تست</li></ol>',
                'category_id'=>4,
                'created_at'=>'2025-09-16 05:48:50',
                'updated_at'=>'2025-09-17 03:27:27',
                'image'=>null,
                'public'=>1,
                'Inventory'=>'18',
                'price'=>110000000,
                'brand_id'=>1
            ],
            [
                'id'=>17,
                'name'=>'موبایل ریلمی مدل Plus 12',
                'description'=>'<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،</h3><p>چاپگرها و متون بلکه روزنامه و مجله...</p><blockquote><strong>متن 1 : تست</strong></blockquote><p><span style="color: rgb(0, 102, 204);">متن 2 : </span><span style="color: rgb(230, 0, 0); background-color: rgb(102, 163, 224);">تست</span></p><ol><li>تست</li><li>تست</li><li>تست</li></ol>',
                'category_id'=>7,
                'created_at'=>'2025-09-17 02:25:22',
                'updated_at'=>'2025-09-17 03:28:48',
                'image'=>null,
                'public'=>1,
                'Inventory'=>'28',
                'price'=>20000000,
                'brand_id'=>6
            ],
            [
                'id'=>18,
                'name'=>'گوشی شیائومی 15',
                'description'=>'<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،</h3><p>چاپگرها و متون بلکه روزنامه و مجله...</p><blockquote><strong>متن 1 : تست</strong></blockquote><p><span style="color: rgb(0, 102, 204);">متن 2 : </span><span style="color: rgb(230, 0, 0); background-color: rgb(102, 163, 224);">تست</span></p><ol><li>تست</li><li>تست</li><li>تست</li></ol>',
                'category_id'=>7,
                'created_at'=>'2025-09-17 02:45:25',
                'updated_at'=>'2025-09-17 02:45:25',
                'image'=>null,
                'public'=>1,
                'Inventory'=>'45',
                'price'=>80000000,
                'brand_id'=>6
            ],
            [
                'id'=>22,
                'name'=>'موبایل سامسونگ Galaxy Z Fold 7',
                'description'=>'<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،</h3><p>چاپگرها و متون بلکه روزنامه و مجله...</p><blockquote><strong>متن 1 : تست</strong></blockquote><p><span style="color: rgb(0, 102, 204);">متن 2 : </span><span style="color: rgb(230, 0, 0); background-color: rgb(102, 163, 224);">تست</span></p><ol><li>تست</li><li>تست</li><li>تست</li></ol>',
                'category_id'=>5,
                'created_at'=>'2025-09-17 03:19:44',
                'updated_at'=>'2025-09-17 03:28:48',
                'image'=>null,
                'public'=>1,
                'Inventory'=>'18',
                'price'=>250000000,
                'brand_id'=>2
            ],
        ]);
    }
}
