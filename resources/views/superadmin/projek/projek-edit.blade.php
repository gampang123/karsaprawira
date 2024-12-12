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
                            <form action="" method="POST" enctype="multipart/form-data">
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
                                        <input id="" type="file" name="Nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Projek :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="" type="text" name="Nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="" type="text" name="Nama" class="form-control" required>
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