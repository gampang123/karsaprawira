@extends('dashboard')

@section('superadmin.master')
<section class="section">
    <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('superadmin.projek.projek-list') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"> Kembali</i>
                </a>
            </div>
        <h1>Data Detail Proyek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Data Detail Proyek</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Proyek: {{ $project->nama_projek }}</h4>
                        <p>Deskripsi: {{ $project->deskripsi }}</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Detail</th>
                                        <th>Foto 1</th>
                                        <th>Foto 2</th>
                                        <th>Foto 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($details as $index => $detail)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $detail->nama_detail }}</td>
                                            <td>
                                                @if ($detail->foto_1)
                                                    <img src="{{ asset('storage/' . $detail->foto_1) }}" alt="Foto 1" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                @if ($detail->foto_2)
                                                    <img src="{{ asset('storage/' . $detail->foto_2) }}" alt="Foto 2" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                @if ($detail->foto_3)
                                                    <img src="{{ asset('storage/' . $detail->foto_3) }}" alt="Foto 3" width="100">
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Detail tidak tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
