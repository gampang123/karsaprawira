@extends('dashboard')

@section('superadmin.master')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('superadmin.detail.detail-list') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <h1>Form Detail</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Tambah Detail</a></div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Form Tambah Detail</h2>
        <p class="section-lead">
            Lengkapi data berikut untuk menambahkan Detail Proyek.
        </p>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('superadmin.detail.detail-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Dropdown Nama Projek -->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Projek:</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="id_projek" class="form-control" required>
                                    <option value="">-- Pilih Projek --</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->nama_projek }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Input Nama Detail -->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Detail:</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="judul_detail" class="form-control" placeholder="Masukkan nama detail" required>
                            </div>
                        </div>

                        <!-- Upload Foto -->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Foto:</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" name="foto_1" class="form-control mb-2" accept="image/*" required>
                                <input type="file" name="foto_2" class="form-control mb-2" accept="image/*">
                                <input type="file" name="foto_3" class="form-control" accept="image/*">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group row mb-4">
                            <div class="col-md-3"></div>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
