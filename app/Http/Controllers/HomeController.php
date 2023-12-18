<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
{
    // Logic for the home page
    return view('home');
}

public function about()
{
    // Logic for the about me page
    return view('about');
}

public function studyCases()
{
    // Logic for the study cases page'
        $projects = Project::all();
        return view('study-cases', ['projects' => $projects]);
}

public function show($project)
{
    // Retrieve the project by its name from the database
    $project = Project::where('project', $project)->first();

    // Check if the project exists
    if ($project) {
        return view('project', ['project' => $project]);
    } else {
        // Handle the case where the project is not found (e.g., show a "project not found" page or redirect)
        // You can customize this part based on your application's requirements
    }
}




public function contact()
{
    // Logic for the contact page
    return view('contact');
}

}
