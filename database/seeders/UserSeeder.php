<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Fill users table with data!
     * @return void
     */
    public function run()
    {
        User::factory()->times(10)->create();
    }
}
