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
            
            
            ['title'=>'Langit yang Berbisik','author'=>'Arina Putri','stock'=>12],
            ['title'=>'Pelajaran tentang Senja','author'=>'Bayu Santoso','stock'=>5],
            ['title'=>'The Last Lighthouse','author'=>'Emma Radcliffe','stock'=>7],
            ['title'=>'Kopi di Pagi Hari','author'=>'Maya Kurnia','stock'=>20],
            ['title'=>'Catatan Seorang Pelaut','author'=>'Dedi Prasetyo','stock'=>3],
            ['title'=>'Algorithmic Thinking','author'=>'L. Chen','stock'=>15],
            ['title'=>'Rahasia Hutan Kecil','author'=>'Siti Anjani','stock'=>0],
            ['title'=>'Design Patterns Practical','author'=>'Rizky Firmansyah','stock'=>11],
            ['title'=>'Malam dan Kota','author'=>'Arif Maulana','stock'=>6],
            ['title'=>'Belajar Javascript untuk Pemula','author'=>'Elena Widya','stock'=>25],
            ['title'=>'Catatan Jalan','author'=>'Fajar Nugroho','stock'=>9],
            ['title'=>'The Quiet Code','author'=>'M. Harper','stock'=>4],
            ['title'=>'Kisah dari Pulau','author'=>'Nina Larasati','stock'=>18],
            ['title'=>'Panduan DevOps Modern','author'=>'Iwan Sutanto','stock'=>13],
            ['title'=>'Sebuah Surat untuk Kamu','author'=>'Rara Melati','stock'=>2],
            ['title'=>'Practical Machine Learning','author'=>'Daniel K.','stock'=>30],
            ['title'=>'Jejak di Salju','author'=>'Gilang Prakoso','stock'=>1],
            ['title'=>'Mindful Living','author'=>'S. Hapsari','stock'=>22],
            ['title'=>'Arsitektur Web Modern','author'=>'Vika Ramadani','stock'=>16],
            ['title'=>'Legenda di Balik Bukit','author'=>'Tono Waluyo','stock'=>8],
            
        ]);


    }
}
