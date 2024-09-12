<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Categories')->insert([
            'categoryID' => 'GDTH01',
            'categoryName' => 'Tu sach Tieu hoc'
        ]);
        DB::table('Categories')->insert([
            'categoryID' => 'GDTHCS01',
            'categoryName' => 'Tu sach Trung hoc co so'
        ]);
        DB::table('Categories')->insert([
            'categoryID' => 'GDTHPT01',
            'categoryName' => 'Tu sach Trung hoc pho thong'
        ]);
        DB::table('Categories')->insert([
            'categoryID' => 'GDDH01',
            'categoryName' => 'Tu sach Dai Hoc'
        ]);
        DB::table('Categories')->insert([
            'categoryID' => 'TN01',
            'categoryName' => 'Tu sach thieu nhi'
        ]);
    }
}
