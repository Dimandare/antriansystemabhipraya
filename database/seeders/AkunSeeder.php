<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\video;
use App\Models\info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       //KOSONGKAN TABEL SISWA
       \DB::table('users')->insert([
        [
         'name'     => 'Ini adalah Admin',
         'username'   => 'admin',
         'password'   => bcrypt('admin'),
         'aktif'      => 'aktif',
         'level'       => 'Administrator',
        

        ],
        [
            'name'     => 'Ini adalah Kasat',
            'username'   => 'kasat',
            'password'   => bcrypt('kasat'),
            'aktif'      => 'aktif',
            'level'       => 'Atasan',
            
        ],
        [
            'name'     => 'Ini adalah Loket1',
            'username'   => 'loket1',
            'password'   => bcrypt('loket1'),
            'aktif'      => 'aktif',
            'level'       => 'User',
            


        ],
        [
        'name'     => 'Ini adalah Loket2',
        'username'   => 'loket2',
        'password'   => bcrypt('loket2'),
        'aktif'      => 'aktif',
        'level'       => 'User',
        
        ],
        [
            'name'     => 'Ini adalah Loket3',
            'username'   => 'loket3',
            'password'   => bcrypt('loket3'),
            'aktif'      => 'aktif',
            'level'       => 'User',
           

        ],
        [
        'name'     => 'Ini adalah Loket4',
        'username'   => 'loket4',
        'password'   => bcrypt('loket4'),
        'aktif'      => 'aktif',
        'level'       => 'User',
       


        ],
        [
            'name'     => 'Ini adalah Loket5',
        'username'   => 'loket5',
        'password'   => bcrypt('loket5'),
        'aktif'      => 'aktif',
        'level'       => 'User',
       

        ],
    

       ]);
       

    
        // Video::create([
        
        //     'nama_video' => 'polres.mp4',
        //     'url'    => 'video1'

        // ,
        
        //     'nama_video' => 'pancasila.mp4',
        //     'url'    => 'video2'
    
        // ]);

       
    
    }
}
