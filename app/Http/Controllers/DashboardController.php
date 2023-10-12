<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Dashboard;
=======
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pageTitle = 'Dashboard';
        $project_count = Project::count();
        return view('home', compact('pageTitle', 'project_count'));
    }
}
