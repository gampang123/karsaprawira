<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Project; 
use App\Models\Detail;
use Illuminate\View\View;

class DetailProjekController extends Controller
{
    public function detailprojek($id_projek): View
    {
        $project = Project::findOrFail($id_projek); // Cari proyek berdasarkan ID
        $details = Detail::where('id_projek', $id_projek)->get(); // Ambil detail terkait proyek

        return view('superadmin.detail-projek.detail-projek', compact('project', 'details'));
    }
}

