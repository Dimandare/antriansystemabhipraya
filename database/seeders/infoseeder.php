<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\video;
use App\Models\info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class infoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('info')->insert([
            [
             'judul_info'     => 'Selamat Datang',
             'isi_info'   => 'Selamat Datang di Pelayanan SKCK Poles Pati',
             'aktif'      => 'aktif',
             
            ],
            [
                'judul_info'     => 'Pengumuman',
                'isi_info'   => 'SKCK POLRES PATI PELAYANAN TUTUP',
                'aktif'      => 'tidak aktif',
               
               ],
            ]);
    }
}
