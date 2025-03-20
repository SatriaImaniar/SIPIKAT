@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tachometer-alt mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Aset</h6>
            <div>
                <input type="text" class="form-control mb-2" placeholder="Cari aset...">
                <button class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah Aset
                </button>
            </div>
        </div>
        <div class="card-body">
            <!-- Tabel Aset -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama Aset</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Baris Data Aset -->
                    <tr>
                        <td>Zeroo Printer PC</td>
                        <td><span class="badge bg-info">Elektronik</span></td>
                        <td><span class="badge bg-warning">Rusak</span></td>
                        <td>Kantor A</td>
                        <td>
                            <button class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Data Lainnya -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
