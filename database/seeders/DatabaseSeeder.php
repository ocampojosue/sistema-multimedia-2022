<?php

namespace Database\Seeders;

use App\Models\Matter;
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

        // User::factory(1)->create();ejecutar factory
        // $this->call(UserSeeder::class); ejecutar seeder
        $this->call(UserSeeder::class);
        Matter::factory(10)->create();
    }
}
