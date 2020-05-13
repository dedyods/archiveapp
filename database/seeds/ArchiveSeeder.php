<?php

use Illuminate\Database\Seeder;
use App\Archive;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Archive::create([
            'category_id'=>'1',
            'project_id'=>'1',
            'user_id'=>'1',
            'name'=>'Dokumen Instalasi Perangkat',
            'slug'=>'dokumen-instalasi-perangkat',
            'tipe_file'=>'word',
            'keterangan'=>'Revisi 1'
        ]);
    }
}
