<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Publishers')->insert([
            'publisherID' => 'NXBGD',
            'publisherName' => 'Nha xuat ban Giao Duc'
        ]);
        DB::table('Publishers')->insert([
            'publisherID' => 'NXBKD',
            'publisherName' => 'Nha xuat ban Kim Dong'
        ]);
        DB::table('Publishers')->insert([
            'publisherID' => 'NXBTG',
            'publisherName' => 'Nha xuat ban Ton Giao'
        ]);
        DB::table('Publishers')->insert([
            'publisherID' => 'NXBPD',
            'publisherName' => 'Nha xuat ban Phuong Dong'
        ]);
        DB::table('Publishers')->insert([
            'publisherID' => 'NXBHD',
            'publisherName' => 'Nha xuat ban Hong Duc'
        ]);
    }
}
