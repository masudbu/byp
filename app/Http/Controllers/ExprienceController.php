<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExprienceController extends Controller
{
    public function index(){
        $mydata = json_decode(file_get_contents(storage_path('mydata/exprience.json')));
        return view('exprience', compact('mydata'));
   }
}
