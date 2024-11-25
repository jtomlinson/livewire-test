<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($x = 1; $x <= 20; $x++) {
            Route::create([
                'name' => "Route: $x",
                'active' => true,
            ]);
        }
    }
}
