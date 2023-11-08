<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProjectController extends Controller
{
   public function index(){
    $mydata = json_decode(file_get_contents(storage_path('mydata/projects.json')));
    return view('projects', compact('mydata'));
   }

   public function projectView($id){
    $allData = json_decode(file_get_contents(storage_path('mydata/projects.json')));
    $data = collect($allData)->firstWhere( 'id', $id );
    return view('project_view', compact('data'));
   }
}
