<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('dashboard.project.index', compact('projects'));
        
    }
     public function create()
    {
        return view('dashboard.project.create');
    }
    public function show($id)
{
    $project = Project::findOrFail($id);

    return view('dashboard.project.show', compact('project'));
}
}