@extends('dashboard')

@section('superadmin.master')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
            <a href="{{ route('superadmin.projek.projek-list') }}" class="btn btn-primary"><i class="fas fa-arrow-left"> Kembali</i></a>
        </div>
        <h1>Form Edit Projek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Edit Projek</a></div>
        </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Edit Projek</h2>
            <p class="section-lead">
                Lengkapi data berikut, untuk memperbarui Projek Anda
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('superadmin.projek.projek-edit', $project->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PATCH')
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Foto :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="foto" class="form-control">
                                        @if ($project->foto_path)
                                            <img src="{{ asset('storage/' . $project->foto_path) }}" alt="Project Photo" class="mt-2" width="100">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Projek :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nama_projek" class="form-control" value="{{ old('nama_projek', $project->nama_projek) }}" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="deskripsi" class="form-control" rows="5">{{ old('deskripsi', $project->deskripsi) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Perbarui Projek</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
