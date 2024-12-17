<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; // Model Project
use App\Models\Detail; // Model Detail
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class DetailController extends Controller
{
    // READ: Menampilkan daftar detail
    public function detail()
    {
        $details = Detail::with('project')->get();
        return view('superadmin.detail.detail-list', compact('details'));
        
    }

    // CREATE: Form tambah detail
    public function create()
    {
        $projects = Project::all(); // Mengambil semua projek
        return view('superadmin.detail.detail-create', compact('projects'));
    }

    // STORE: Menyimpan data detail
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_projek' => 'required|exists:projects,id',
            'judul_detail' => 'required|string|max:255', // Pastikan nama detail wajib diisi
            'foto_1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $data = [
            'id_projek' => $request->id_projek,
            'nama_detail' => $request->judul_detail, // Kolom ini perlu diisi
            'foto_1' => $request->file('foto_1')->store('details', 'public'),
            'foto_2' => $request->file('foto_2') ? $request->file('foto_2')->store('details', 'public') : null,
            'foto_3' => $request->file('foto_3') ? $request->file('foto_3')->store('details', 'public') : null,
        ];
    
        Detail::create($data);
    
        return redirect()->route('superadmin.detail.detail-list')->with('success', 'Detail berhasil ditambahkan.');
    }
    


    // EDIT: Form edit detail
    public function edit($id_detail)
    {
        $detail = Detail::findOrFail($id_detail);
        $projects = Project::all();
        return view('superadmin.detail.detail-edit', compact('detail', 'projects'));
    }


    // UPDATE: Menyimpan perubahan detail
    public function update(Request $request, $id_detail)
    {
        $request->validate([
            'id_projek' => 'required|exists:projects,id',
            'nama_detail' => 'required|string|max:255',
            'foto_1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $detail = Detail::findOrFail($id_detail);

        // Update foto jika ada file baru
        if ($request->hasFile('foto_1')) {
            Storage::disk('public')->delete($detail->foto_1);
            $detail->foto_1 = $request->file('foto_1')->store('details', 'public');
        }

        if ($request->hasFile('foto_2')) {
            Storage::disk('public')->delete($detail->foto_2);
            $detail->foto_2 = $request->file('foto_2')->store('details', 'public');
        }

        if ($request->hasFile('foto_3')) {
            Storage::disk('public')->delete($detail->foto_3);
            $detail->foto_3 = $request->file('foto_3')->store('details', 'public');
        }

        // Update data lainnya
        $detail->id_projek = $request->id_projek;
        $detail->nama_detail = $request->nama_detail;
        $detail->save();

        return redirect()->route('superadmin.detail.detail-list')->with('success', 'Detail berhasil diperbarui.');
    }


    // DELETE: Menghapus detail

    

    public function destroy($id_detail)
    {
        // Cari data berdasarkan id_detail
        $detail = Detail::findOrFail($id_detail);
    
        // Hapus file foto jika ada
        if ($detail->foto_1 && Storage::disk('public')->exists($detail->foto_1)) {
            Storage::disk('public')->delete($detail->foto_1);
        }
        if ($detail->foto_2 && Storage::disk('public')->exists($detail->foto_2)) {
            Storage::disk('public')->delete($detail->foto_2);
        }
        if ($detail->foto_3 && Storage::disk('public')->exists($detail->foto_3)) {
            Storage::disk('public')->delete($detail->foto_3);
        }
    
        // Hapus data dari database
        $detail->delete();
    
        // Flash message sukses
        Session::flash('success', 'Detail berhasil dihapus!');
    
        return redirect()->route('superadmin.detail.detail-list');
    }
    


}
