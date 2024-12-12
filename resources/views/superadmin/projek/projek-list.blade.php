@extends('dashboard')

@section('superadmin.master')
<section class="section">
    <div class="section-header">
        <h1>Data Projek</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Data Projek</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <a class="btn btn-success btn-sm" href="{{ route('superadmin.projek.projek-create') }}"><i class="fa fa-plus"></i> Tambah Projek</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width=10>No</th>
                                        <th width=100>Foto Projek</th>
                                        <th width=150>Nama Projek</th>
                                        <th width=150>Deskripsi</th>
                                        <th width=90>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($projects as $index => $project)
                                    <tr>
                                        <td class="number">{{ $index + 1 }}</td>
                                        <td><img src="{{ asset('storage/' . $project->foto_path) }}" alt="Foto Projek" width="100"></td>
                                        <td>{{ $project->nama_projek }}</td>
                                        <td>{{ $project->deskripsi }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a class="btn btn-xs btn-success btn-flat" href="{{ route('superadmin.projek.projek-edit', $project->id) }}"><i class="fa fa-pen"></i></a>
                                                </div>
                                                <div class="col-6">
                                                    <form action="{{ route('superadmin.projek.projek-delete', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-xs btn-danger btn-flat" data-toggle="tooltip" name="delete"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data tidak tersedia</td>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableRows = document.querySelectorAll('#dataTable tbody tr');
        if (tableRows.length > 0) {
            tableRows.forEach((row, index) => {
                const numberCell = row.querySelector('.number');
                if (numberCell) {
                    numberCell.textContent = index + 1; // Mulai dari 1
                }
            });
        }
    });
</script>
@endsection
