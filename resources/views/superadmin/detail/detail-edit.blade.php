@extends('dashboard')

@section('superadmin.master')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('superadmin.detail.detail-list') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"> Kembali</i>
                </a>
            </div>
            <h1>Form Edit Detail</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Menu</a></div>
                <div class="breadcrumb-item"><a href="#">Form Edit Detail</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Edit Detail</h2>
            <p class="section-lead">Lengkapi data berikut, untuk memperbarui Detail Anda</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- Form Edit --}}
                            <form action="{{ route('superadmin.detail.detail-update', $detail->id_detail) }}" 
                                  method="POST" 
                                  enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf

                                {{-- Error Validation --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{-- Nama Projek --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Projek :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="id_projek" class="form-control" required>
                                            <option value="">-- Pilih Projek --</option>
                                            @foreach ($projects as $project)
                                                <option value="{{ $project->id }}" 
                                                    {{ $detail->id_projek == $project->id ? 'selected' : '' }}>
                                                    {{ $project->nama_projek }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Nama Detail --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Detail :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nama_detail" class="form-control" 
                                               value="{{ old('nama_detail', $detail->nama_detail) }}" required>
                                    </div>
                                </div>

                                {{-- Foto 1 --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto 1 :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="foto_1" class="form-control">
                                        @if ($detail->foto_1)
                                            <div class="mt-2">
                                                <strong>Foto Saat Ini:</strong>
                                                <a href="{{ Storage::url($detail->foto_1) }}" target="_blank">
                                                    Lihat Foto 1
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Foto 2 --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto 2 :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="foto_2" class="form-control">
                                        @if ($detail->foto_2)
                                            <div class="mt-2">
                                                <strong>Foto Saat Ini:</strong>
                                                <a href="{{ Storage::url($detail->foto_2) }}" target="_blank">
                                                    Lihat Foto 2
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Foto 3 --}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto 3 :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="foto_3" class="form-control">
                                        @if ($detail->foto_3)
                                            <div class="mt-2">
                                                <strong>Foto Saat Ini:</strong>
                                                <a href="{{ Storage::url($detail->foto_3) }}" target="_blank">
                                                    Lihat Foto 3
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Submit Button --}}
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Perbarui Detail</button>
                                </div>
                            </form>
                            {{-- End Form --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
