<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        //\App\Models\address::factory()->count(30)->create();
        //factory(\App\Models\Addresses::class, 15)->create();
        //App\Models\addresses::factory(15)->create();
        $this=->call([CircleSeeder::class]);
    }
}
