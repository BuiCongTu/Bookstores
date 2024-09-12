<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Reviews')->insert([
            'reviewID' => 'review0001',
            'orderID' => 'order0001',
            'content' => 'content 01',
            'rating' => '5.5',
            'reviewDate' => '2024-05-15'
        ]);
        DB::table('Reviews')->insert([
            'reviewID' => 'review0002',
            'orderID' => 'order0001',
            'content' => 'content 02',
            'rating' => '4.9',
            'reviewDate' => '2024-03-15'
        ]);
        DB::table('Reviews')->insert([
            'reviewID' => 'review0003',
            'orderID' => 'order0001',
            'content' => 'content 03',
            'rating' => '9.5',
            'reviewDate' => '2024-05-16'
        ]);
    }
}
