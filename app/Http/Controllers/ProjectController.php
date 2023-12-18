<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        dd($projects); // Add this line for debugging
        return view('study-cases', ['projects' => $projects]);
    }

    public function show(Project $project)
    {
        dd($project); // Add this line for debugging
        return view('project', ['project' => $project]);
    }
}

