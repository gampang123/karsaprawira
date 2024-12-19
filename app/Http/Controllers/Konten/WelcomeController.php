<?php

namespace App\Http\Controllers\konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; // Import class View
use App\Models\Project;

class WelcomeController extends Controller
{
    public function welcome(): View
    {
        $projects = Project::latest()->take(3)->get();
        return view('tampilan.isi', compact('projects'));
    }
}
