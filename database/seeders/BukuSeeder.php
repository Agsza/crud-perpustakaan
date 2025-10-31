<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('bukus')->insert([
            
            
            [
                'title' => 'kucari rindu yang hilang',
                'author' => "Rendy Juliansyah",
                'stock' => 11,

            ],

             [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 21,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 30,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 33,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 7,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 3,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            [
                'title' => 'Rindu memang hilang ',
                'author' => "Rendy Juliansyah",
                'stock' => 50,

            ],
            
        ]);


    }
}
