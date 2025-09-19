<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ["id" => 1,"role" => "user",],
            ["id" => 2, "role" => "writer"],
            ["id" => 3,"role" => "admin"],
        ]);
    }
}
