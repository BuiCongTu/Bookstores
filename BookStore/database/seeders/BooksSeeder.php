<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Books')->insert([
            'bookID' => 'book01',
            'categoryID' => 'GDTH01',
            'title' => 'Toan lop 1 tap 1',
            'authorID' => 'NHL01',
            'publisherID' => 'NXBGD',
            'publicationYear' => '2024',
            'price' => '15000',
            'stock' => 'Finish',
            'desciption' => 'sach lop 1'
        ]);
        DB::table('Books')->insert([
            'bookID' => 'book02',
            'categoryID' => 'GDTH01',
            'title' => 'Toan lop 1 tap 2',
            'authorID' => 'NHL01',
            'publisherID' => 'NXBGD',
            'publicationYear' => '2024',
            'price' => '15000',
            'stock' => '2000',
            'desciption' => 'sach lop 1'
        ]);
        DB::table('Books')->insert([
            'bookID' => 'book03',
            'categoryID' => 'GDTH01',
            'title' => 'Tieng viet lop 1 tap 1',
            'authorID' => 'BC01',
            'publisherID' => 'NXBKD',
            'publicationYear' => '2024',
            'price' => '15000',
            'stock' => '3000',
            'desciption' => 'sach lop 1'
        ]);
        DB::table('Books')->insert([
            'bookID' => 'book04',
            'categoryID' => 'GDTH01',
            'title' => 'Tieng viet lop 1 tap 2',
            'authorID' => 'BC01',
            'publisherID' => 'NXBKD',
            'publicationYear' => '2024',
            'price' => '15000',
            'stock' => '4000',
            'desciption' => 'sach lop 1'
        ]);
        DB::table('Books')->insert([
            'bookID' => 'book05',
            'categoryID' => 'GDTHCS01',
            'title' => 'LSDL',
            'authorID' => 'HD01',
            'publisherID' => 'NXBKD',
            'publicationYear' => '2024',
            'price' => '15000',
            'stock' => '2000',
            'desciption' => 'sach cap 2'
        ]);
    }
}
