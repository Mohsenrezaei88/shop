<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "name" => "Mohammad",
            "phonenumber" => "09153885712",
            "password" => Hash::make("12345678"),
            "role_id" => 3
        ]);
    }
}
