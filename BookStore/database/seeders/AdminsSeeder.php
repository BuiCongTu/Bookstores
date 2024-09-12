<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Admins')->insert([
            'adminID' => 'Admin',
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
        ]);
    }
}
