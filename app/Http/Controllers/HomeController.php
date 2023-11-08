<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = json_decode(file_get_contents(storage_path('mydata/basic.json')));
        return view('home')->with('myinfo',$data);
    }
}
