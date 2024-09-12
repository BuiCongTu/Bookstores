<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('OrderItem')->insert([
            'orderItemID' => 'ODIT01',
            'orderID' => 'order0001',
            'bookID' => 'book01',
            'quantity' => '5'
        ]);
        DB::table('OrderItem')->insert([
            'orderItemID' => 'ODIT02',
            'orderID' => 'order0001',
            'bookID' => 'book02',
            'quantity' => '51'
        ]);
        DB::table('OrderItem')->insert([
            'orderItemID' => 'ODIT03',
            'orderID' => 'order0001',
            'bookID' => 'book01',
            'quantity' => '122'
        ]);
        DB::table('OrderItem')->insert([
            'orderItemID' => 'ODIT04',
            'orderID' => 'order0001',
            'bookID' => 'book02',
            'quantity' => '133'
        ]);
        DB::table('OrderItem')->insert([
            'orderItemID' => 'ODIT05',
            'orderID' => 'order0001',
            'bookID' => 'book02',
            'quantity' => '166'
        ]);
    }
}
