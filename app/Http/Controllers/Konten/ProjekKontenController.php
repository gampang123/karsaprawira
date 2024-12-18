<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Project; // Sesuaikan dengan nama model Anda
use Illuminate\View\View;

class ProjekKontenController extends Controller
{
    public function projek(): View
    {
        $projects = Project::all(); // Ambil semua proyek dari database
        return view('konten.projek', compact('projects'));
    }

    public function show($id_projek): View
    {
        $project = Project::findOrFail($id_projek); // Cari proyek berdasarkan ID
        $details = Detail::where('id_projek', $id_projek)->get(); // Ambil detail terkait proyek
        return view('konten.detail-projek', compact('project', 'details'));
    }
}

