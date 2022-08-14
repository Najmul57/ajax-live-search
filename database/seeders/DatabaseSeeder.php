<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(100)->create();
        // \App\Models\Brand::factory(100)->create();
        \App\Models\Category::factory(10)->create();
    }
}
