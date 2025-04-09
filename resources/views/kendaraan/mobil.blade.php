@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
            <i class="fas fa-car-side" aria-hidden="true"> Data Mobil </i>

        </h1>


        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('kendaraan.mobil') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Mobil
            </a>
        </div>

        <!-- Tabel Mobil -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil Dinas</h6>
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
                                <th>TMT Services</th>
                                <th>Pengguna</th>
                                <th>Kondisi</th>
                                <th>Riwayat Pemakaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mobils as $mobil)
                                <tr>
                                    <td>{{ $mobil->kode_aset }}</td>
                                    <td>{{ $mobil->no_polisi }}</td>
                                    <td>{{ $mobil->merk }}</td>
                                    <td>{{ $mobil->tahun }}</td>
                                    <td>{{ date('d/m/Y', strtotime($mobil->tmt_pembelian)) }}</td>
                                    <td>{{ $mobil->pengguna }}</td>
                                    <td>
                                        <span
                                            class="badge 
                                        {{ $mobil->kondisi == 'Baik' ? 'badge-success' : 'badge-danger' }}">
                                            {{ $mobil->kondisi }}
                                        </span>
                                    </td>
                                    <td>{{ $mobil->pengguna }}</td>
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
