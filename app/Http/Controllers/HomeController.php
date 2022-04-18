<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('auth');
    }
    public function proses_login(Reques $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

            $kredensil = $request->only('username','password');

            if(Auth::attempt($kredensil)){
               $user = Auth::user();
               if($user->role == 'admin'){
                   return redirect()->intended('admin');
               }else if ($user->role== 'kasat')
               {
                   return redirect()->intended('admin');

               }
               return redirect()->intended('/');
               }
               return redirect('login');
            }
        
    }

