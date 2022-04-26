<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginpost extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('login');
        }
    }

    public function login(){
        return view('/login');
    }

    public function adminlogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'kode_akses' => 'required'
        ]);
        // dd('berhasil login');
        return view('Admin/Admin');
    }
    public function atasanlogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'kode_akses' => 'required'
        ]);
        // dd('berhasil login');
        return view('Atasan');
    }


    // public function loginPost(Request $request){

    //     $email = $request->email;
    //     $password = $request->password;

    //     $data = ModelUser::where('email',$email)->first();
    //     if($data){ //apakah email tersebut ada atau tidak
    //         if(Hash::check($password,$data->password)){
    //             Session::put('name',$data->name);
    //             Session::put('email',$data->email);
    //             Session::put('login',TRUE);
    //             return redirect('home_user');
    //         }
    //         else{
    //             return redirect('login')->with('alert','Password atau Email, Salah !');
    //         }
    //     }
    //     else{
    //         return redirect('login')->with('alert','Password atau Email, Salah!');
    //     }
    // }

    public function logout(){
        Session::flush();
        return redirect('')->with('alert','Kamu sudah logout');
    }
}