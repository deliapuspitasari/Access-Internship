<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'nama_project' => 'required',
            'jenis_project' => 'required',
            'kategori_peserta' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        Project::create([
            'nama_project' => $request->nama_project,
            'jenis_project' => $request->jenis_project,
            'kategori_peserta' => $request->kategori_peserta,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/project')->with('success', 'Project berhasil ditambahkan.');
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('dashboard.project.show', compact('project'));
    }
}