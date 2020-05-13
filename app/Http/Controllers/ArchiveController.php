<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;
use App\Project;
use App\Category;
use Storage;
use Str;

class ArchiveController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $archives = Archive::all();
        return view('pages.archive.index', compact('archives'));
    }

    public function create()
    {
        $projects = Project::all();
        $categories = Category::all();
        return view('pages.archive.create',compact('projects', 'categories'));
    }

    public function store(Request $request)
    {
        $file = $request->File('file')->store('document');
        $userid = auth()->user()->id;
        Archive::create([
            'project_id'=>$request->project,
            'category_id'=>$request->category,
            'user_id'=>$userid,
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
            'tipe_file'=>$file,
            'keterangan'=>'keterangan',
        ]);
             return redirect()->route('archive.index');
    }

    public function show(Archive $archive)
    {
        return view('pages.archive.show', compact('archive'));
    
    }
}
