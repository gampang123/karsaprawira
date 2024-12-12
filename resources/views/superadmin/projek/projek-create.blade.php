@extends('dashboard')

@section('superadmin.master')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('superadmin.projek.projek-list') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <h1>Form Projek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Tambah Projek</a></div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Form Tambah Projek</h2>
        <p class="section-lead">
            Lengkapi data berikut, untuk menambahkan data Projek.
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('superadmin.projek.projek-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Foto:</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Projek:</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="nama_projek" class="form-control" placeholder="Masukkan nama projek" required>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi:</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="deskripsi" class="form-control" placeholder="Masukkan deskripsi projek" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-success">Upload Data</button>
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
