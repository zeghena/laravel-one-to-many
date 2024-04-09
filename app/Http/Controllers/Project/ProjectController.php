<?php

namespace App\Http\Controllers\Project;


use App\Http\Controllers\Controller;

class ProjectController extends Controller {
  public function index()
  {
     
     return view('guest.project');
  }
}