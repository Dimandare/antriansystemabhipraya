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
      
       User::create([
        
            'username' => 'admin',
            'name'    => 'ini adalah admin',
            'password' => bcrypt('admin'),
            'role'     => 'admin',
            'remember_token' => str_random(10)
        ,
        
            'username' => 'kasat',
            'name'    => 'ini adalah kasat',
            'password' => bcrypt('kasat'),
            'role'     => 'kasat',
            'remember_token' => str_random(10)
        ,
        
            'username' => 'loket1',
            'name'    => 'ini adalah loket1',
            'password' => bcrypt('kasat'),
            'role'     => 'loket1',
            'remember_token' => str_random(10)
        ,
        
            'username' => 'loket2',
            'name'    => 'ini adalah loket2',
            'password' => bcrypt('kasat'),
            'role'     => 'loket2',
            'remember_token' => str_random(10)
        ,
    
            'username' => 'loket3',
            'name'    => 'ini adalah loket3',
            'password' => bcrypt('kasat'),
            'role'     => 'loket3',
            'remember_token' => str_random(10)
      
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
