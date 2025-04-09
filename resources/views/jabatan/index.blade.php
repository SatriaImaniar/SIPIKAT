@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
            <i class="fas fa-briefcase mr-2"> Data Jabatan</i>

        </h1>


        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('kendaraan.motor') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Jabatan
            </a>
        </div>

        <!-- Tabel Mobil -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Jabatan </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Kode Jabatan</th>
                                <th>Nama Jabatan</th>
                                <th>Level</th>
                                <th>Aksi</th> <!-- Opsional -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jabatan as $j)
                                <tr>
                                    <td>{{ $j['kode'] }}</td>
                                    <td>{{ $j['nama'] }}</td>
                                    <td>{{ $j['level'] }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
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















{{-- @extends('layouts.app') <!-- Sesuaikan dengan layout Anda -->

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Jabatan</h1>
    
    <!-- Tabel Dummy Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Jabatan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>Level</th>
                            <th>Aksi</th> <!-- Opsional -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $j)
                        <tr>
                            <td>{{ $j['kode'] }}</td>
                            <td>{{ $j['nama'] }}</td>
                            <td>{{ $j['level'] }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection --}}
