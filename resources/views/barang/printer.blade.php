@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"> <i class="fas fa-print">         Printer</i></h1>

        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('barang.printer') }}" class="btn btn-primary">
                <i class="fas fa-plus">         Tambah Printer</i> 
            </a>
        </div>

        <!-- Tabel  -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Printer</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Kode Aset</th>
                                <th>Merk</th>
                                <th>tipe</th>
                                <th>TMT Pembelian</th>
                                <th>lokasi </th>
                                <th>Riwayat Kerusakan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($printers as $printer)
                                <tr>
                                    <td>{{ $printer->kode_aset }}</td>
                                    <td>{{ $printer->merk }}</td>
                                    <td>{{ $printer->tipe }}</td>
                                    <td>{{ date('d/m/Y', strtotime($printer->tmt_pembelian)) }}</td>
                                    <td>{{ $printer->lokasi }}</td>
                                    <td>{{ $printer->riwayat_kerusakan }}</td>
                                    <td>
                                        <span class="badge 
                                        {{ match($printer->status) {
                                            'Baik' => 'badge-success',
                                            'Perlu Maintenance' => 'badge-warning',
                                            'Rusak' => 'badge-danger',
                                            default => 'badge-danger',
                                        } }}">
                                        {{ $printer->status }}
                                    </span>
                                    </td>
                                </tr>
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
