@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-desktop"> Data komputer</i></h1>

        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('barang.pc') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Komputer
            </a>
        </div>

        <!-- Tabel  -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Komputer Dinas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Kode Aset</th>
                                <th>Merk</th>
                                <th>Processor</th>
                                <th>RAM</th>
                                <th>Storage</th>
                                <th>TMT Pembelian</th>
                                <th>lokasi </th>
                                <th>pengguna</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pcs as $pc)
                                <tr>
                                    <td>{{ $pc->kode_aset }}</td>
                                    <td>{{ $pc->merk }}</td>
                                    <td>{{ $pc->processor }}</td>
                                    <td>{{ $pc->ram }}</td>
                                    <td>{{ $pc->storage }}</td>
                                    <td>{{ date('d/m/Y', strtotime($pc->tmt_pembelian)) }}</td>
                                    <td>{{ $pc->lokasi }}</td>
                                    <td>{{ $pc->pengguna }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ match($pc->status) {
                                                'Aktif' => 'badge-success',
                                                'Cadangan' => 'badge-warning',
                                                'Rusak' => 'badge-danger',
                                                default => 'badge-danger',
                                            } }}">
                                            {{ $pc->status }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data Pc</td>
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
