@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
            <i class="fas fa-sitemap"> Data Unit Kerja</i>

        </h1>


        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('kendaraan.motor') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Unit Kerja
            </a>
        </div>

        <!-- Tabel Mobil -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Unit Kerja & Kepala Dinas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Unit Kerja</th>
                                <th>Kepala Dinas</th>
                                <th>NIP Kepala</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Dummy -->
                            @php
                                $unitKerjaDummy = [
                                    [
                                        'nama_unit' => 'Bidang 2',
                                        'kepala' => 'Drs. Budi Santoso, M.Si.',
                                        'nip' => '197005011995031002',
                                    ],
                                    [
                                        'nama_unit' => 'Bidang Khusus',
                                        'kepala' => 'Dr. Ani Wijaya, Sp.KJ',
                                        'nip' => '197512312000032001',
                                    ],
                                    [
                                        'nama_unit' => 'Sekeretariat',
                                        'kepala' => 'Ir. Joko Prasetyo, MT',
                                        'nip' => '198003011998031003',
                                    ],
                                ];
                            @endphp

                            @foreach ($unitKerjaDummy as $index => $unit)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $unit['nama_unit'] }}</td>
                                    <td>{{ $unit['kepala'] }}</td>
                                    <td>{{ $unit['nip'] }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info btn-circle">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger btn-circle ml-1">
                                            <i class="fas fa-trash"></i>
                                        </a>
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












{{-- <!-- resources/views/unit-kerja/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Unit Kerja & Kepala Dinas</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Unit Baru</span>
            </a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Unit Kerja</th>
                            <th>Kepala Dinas</th>
                            <th>NIP Kepala</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data Dummy -->
                        @php
                            $unitKerjaDummy = [
                                [
                                    'nama_unit' => 'Dinas Pendidikan',
                                    'kepala' => 'Drs. Budi Santoso, M.Si.',
                                    'nip' => '197005011995031002'
                                ],
                                [
                                    'nama_unit' => 'Dinas Kesehatan',
                                    'kepala' => 'Dr. Ani Wijaya, Sp.KJ',
                                    'nip' => '197512312000032001'
                                ],
                                [
                                    'nama_unit' => 'Dinas Pekerjaan Umum',
                                    'kepala' => 'Ir. Joko Prasetyo, MT',
                                    'nip' => '198003011998031003'
                                ]
                            ];
                        @endphp

                        @foreach ($unitKerjaDummy as $index => $unit)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $unit['nama_unit'] }}</td>
                            <td>{{ $unit['kepala'] }}</td>
                            <td>{{ $unit['nip'] }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger btn-circle ml-1">
                                    <i class="fas fa-trash"></i>
                                </a>
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

<!-- Tambahkan di sidebar -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('unit-kerja.index') }}">
        <i class="fas fa-sitemap"></i>
        <span>Unit Kerja & Kepala Dinas</span>
    </a>
</li> --}}
