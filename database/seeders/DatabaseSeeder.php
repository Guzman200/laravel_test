<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(TestSeeder::class);
        Test::factory(100000)->create();
    }
}
