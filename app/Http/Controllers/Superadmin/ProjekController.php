<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Project;

class ProjekController extends Controller
{
    /**
     * Display a listing of the projects.
     */
    public function projek()
    {
        $projects = Project::all(); // Mengambil semua data project dari database
        return view('superadmin.projek.projek-list', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('superadmin.projek.projek-create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_projek' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload file
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('projects', 'public');
        }

        // Simpan data ke database
        Project::create([
            'nama_projek' => $request->nama_projek,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->getClientOriginalName() ?? null,
            'foto_path' => $fotoPath,
        ]);

        // Tampilkan alert sukses
        Session::flash('success', 'Proyek berhasil ditambahkan!');

        return redirect()->route('superadmin.projek.projek-list');
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id); // Cari project berdasarkan ID
        return view('superadmin.projek.projek-edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_projek' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $project = Project::findOrFail($id);

        // Proses upload file jika ada perubahan
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('projects', 'public');
            $project->foto = $request->file('foto')->getClientOriginalName();
            $project->foto_path = $fotoPath;
        }

        // Update data
        $project->nama_projek = $request->nama_projek;
        $project->deskripsi = $request->deskripsi;
        $project->save();

        // Tampilkan alert sukses
        Session::flash('success', 'Proyek berhasil diperbarui!');

        return redirect()->route('superadmin.projek.projek-list');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        // Tampilkan alert sukses
        Session::flash('success', 'Proyek berhasil dihapus!');

        return redirect()->route('superadmin.projek.projek-list');
    }
}
