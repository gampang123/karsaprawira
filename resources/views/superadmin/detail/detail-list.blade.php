@extends('dashboard')

@section('superadmin.master')
<section class="section">
    <div class="section-header">
        <h1>Data Detail</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Data Detail</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <a class="btn btn-success btn-sm" href="{{ route('superadmin.detail.detail-create') }}">
                                <i class="fa fa-plus"></i> Tambah Detail
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width="10">No</th>
                                        <th width="150">Nama Projek</th>
                                        <th width="150">Nama Detail</th>
                                        <th width="150">File</th>
                                        <th width="110">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($details->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Detail tidak tersedia</td>
                                        </tr>
                                    @else
                                        @foreach ($details as $index => $detail)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $detail->project->nama_projek ?? 'Projek Tidak Ditemukan' }}</td>
                                                <td>{{ $detail->nama_detail }}</td>
                                                <td>
                                                    @if ($detail->foto_1)
                                                        <div><img src="{{ asset('storage/' . $detail->foto_1) }}" alt="Foto 1" width="50"></div>
                                                    @endif
                                                    @if ($detail->foto_2)
                                                        <div><img src="{{ asset('storage/' . $detail->foto_2) }}" alt="Foto 2" width="50"></div>
                                                    @endif
                                                    @if ($detail->foto_3)
                                                        <div><img src="{{ asset('storage/' . $detail->foto_3) }}" alt="Foto 3" width="50"></div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a class="btn btn-xs btn-success btn-flat" href="{{ route('superadmin.detail.detail-edit', $detail->id_detail) }}">
                                                                <i class="fa fa-pen"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-4">
                                                            <form action="{{ route('superadmin.detail.detail-destroy', $detail->id_detail) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-xs btn-danger btn-flat" data-toggle="tooltip" name="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
