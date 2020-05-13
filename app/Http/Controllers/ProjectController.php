<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('pages.project.index');
    }

    public function create()
    {
        return view('pages.project.create');
    }
}
