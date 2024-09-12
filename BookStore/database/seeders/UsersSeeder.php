<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Members')->insert([
            'userID' => 'LD01',
            'name' => 'leader 01',
            'password' => '12345',
            'email' => 'leader01@gmail.com',
            'phone' => '0123456789',
            'address' => 'leader 01 - HCM',
            'role' => 'leader'
        ]);
        DB::table('Members')->insert([
            'userID' => 'LD02',
            'name' => 'leader 02',
            'password' => '12345',
            'email' => 'leader02@gmail.com',
            'phone' => '01234567890',
            'address' => 'leader 02 - HCM',
            'role' => 'leader'
        ]);
        DB::table('Members')->insert([
            'userID' => 'SL01',
            'name' => 'Seller 01',
            'password' => '123',
            'email' => 'seller01@gmail.com',
            'phone' => '01234567892',
            'address' => 'seller 01 - HCM',
            'role' => 'seller'
        ]);
        DB::table('Members')->insert([
            'userID' => 'SL02',
            'name' => 'Seller 02',
            'password' => '123',
            'email' => 'seller02@gmail.com',
            'phone' => '01234567891',
            'address' => 'seller 02 - HCM',
            'role' => 'seller'
        ]);
        DB::table('Members')->insert([
            'userID' => 'SL03',
            'name' => 'Seller 03',
            'password' => '123',
            'email' => 'seller03@gmail.com',
            'phone' => '01234567912',
            'address' => 'seller 03 - HCM',
            'role' => 'seller'
        ]);
    }
}
