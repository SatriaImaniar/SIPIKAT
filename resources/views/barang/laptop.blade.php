@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"> <i class="fas fa-laptop">            Data Unit Tonjong</i></h1>
    
    <!-- Navigation -->
    <div class="mb-4">
        <a href="{{ route('barang.laptop') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Data Unit Tonjong
        </a>
    </div>

    <!-- Tabel Laptop -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Laptop Dinas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Kode Aset</th>
                            <th></th>
                            <th>Processor</th>
                            <th>RAM</th>
                            <th>Storage</th>
                            <th>TMT Pembelian</th>
                            <th>Pengguna</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($laptops as $laptop)
                            <tr>
                                <td>{{ $laptop->kode_aset }}</td>
                                <td>{{ $laptop->merk }}</td>
                                <td>{{ $laptop->processor }}</td>
                                <td>{{ $laptop->ram }}</td>
                                <td>{{ $laptop->storage }}</td>
                                <td>{{ date('d/m/Y', strtotime($laptop->tmt_pembelian)) }}</td>
                                <td>{{ $laptop->pengguna }}</td>
                                <td>
                                    <span class="badge 
                                        {{ match($laptop->status) {
                                            'Aktif' => 'badge-success',
                                            'Perbaikan' => 'badge-warning',
                                            'Rusak' => 'badge-danger',
                                            default => 'badge-danger',
                                        } }}">
                                        {{ $laptop->status }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data laptop</td>
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