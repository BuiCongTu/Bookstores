<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Orders')->insert([
            'orderID' => 'order0001',
            'userID' => 'SL02',
            'buyerName' => '',
            'phoneNumber' => '0987654321',
            'address' => '',
            'totalAmount' => '5555',
            'orderDate' => '2024-07-24',
            'status' => 'Finish'
        ]);
    }
}
