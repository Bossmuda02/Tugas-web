<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            [
                'judul'         => 'Adi',
                'edisi_ke'      => 1,
                'penerbit_id'   => 1,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Sukri',
                'edisi_ke'      => 2,
                'penerbit_id'   => 1,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Siwo',
                'edisi_ke'      => 2,
                'penerbit_id'   => 1,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Yahu',
                'edisi_ke'      => 1,
                'penerbit_id'   => 1,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Supra',
                'edisi_ke'      => 1,
                'penerbit_id'   => 1,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Bagus',
                'edisi_ke'      => 1,
                'penerbit_id'   => 1,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Fresh Tea',
                'edisi_ke'      => 1,
                'penerbit_id'   => 2,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Asus',
                'edisi_ke'      => 1,
                'penerbit_id'   => 2,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Miyako',
                'edisi_ke'      => 1,
                'penerbit_id'   => 2,
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'judul'         => 'Jono',
                'edisi_ke'      => 1,
                'penerbit_id'   => 2,
                'created_at'    => date("Y-m-d H:i:s")
            ],

        ]);
    }
}