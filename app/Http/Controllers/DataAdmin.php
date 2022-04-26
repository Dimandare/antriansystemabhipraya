<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoAdmin;

class DataAdmin extends Controller
{
    
    public function index()
    {
        $data_info=InfoAdmin::all();
        return $data_info;
    }
}
