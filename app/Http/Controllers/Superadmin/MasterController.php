<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; 

class MasterController extends Controller
{
    public function master()
    {
        $projectsCount = Project::count();
        return view('superadmin.master' , compact('projectsCount'));
    }
}
