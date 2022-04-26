<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\video;
use App\Models\info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class videoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('video')->insert([
            [
             'nama_video'     => 'Profil_Polres_Pati_mp4',
             'url'   => '/video/profil_polres_pati.mp4',
             'aktif'      => 'aktif',
             
            ],
            [
                'nama_video'     => 'Pancasila.mp4',
                'url'   => '/video/pancasila.mp4',
                'aktif'      => 'tidak aktif',
                
               ],
            ]);
    }
}
