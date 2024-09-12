<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Authors')->insert([
            'authorID' => 'NHL01',
            'authorName' => 'Nguyen Hien Le'
        ]);

        DB::table('Authors')->insert([
            'authorID' => 'NHL02',
            'authorName' => 'Nguyen Hien Linh'
        ]);

        DB::table('Authors')->insert([
            'authorID' => 'BC01',
            'authorName' => 'Bach Cuc'
        ]);

        DB::table('Authors')->insert([
            'authorID' => 'HD01',
            'authorName' => 'Hanh Doan'
        ]);

        DB::table('Authors')->insert([
            'authorID' => 'DTC01',
            'authorName' => 'Doan Trung Con'
        ]);
    }
}
