@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
            <i class="fas fa-motorcycle" aria-hidden="true">Data Motor</i>
        </h1>


        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('kendaraan.motor') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Motor
            </a>
        </div>

        <!-- Tabel Mobil -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Motor Dinas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Kode Aset</th>
                                <th>No Polisi</th>
                                <th>Merk/Type</th>
                                <th>Tahun</th>
                                <th>Terakhir Services</th>
                                <th>Pengguna</th>
                                <th>Kondisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($motors as $motor)
                                <tr>
                                    <td>{{ $motor->kode_aset }}</td>
                                    <td>{{ $motor->no_polisi }}</td>
                                    <td>{{ $motor->merk }}</td>
                                    <td>{{ $motor->tahun }}</td>
                                    <td>{{ date('d/m/Y', strtotime($motor->tmt_pembelian)) }}</td>
                                    <td>{{ $motor->pengguna }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ match($motor->kondisi) {
                                                'Baik' => 'badge-success',
                                                'Perbaikan' => 'badge-warning',
                                                'Rusak' => 'badge-danger',
                                                default => 'badge-danger',
                                            } }}">
                                            {{ $motor->kondisi }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                    @empty
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data printer</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .table thead th {
            vertical-align: middle;
            text-align: center;
        }

        .badge-success {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
        }
    </style>
@endsection
