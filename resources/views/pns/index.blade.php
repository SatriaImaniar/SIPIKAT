@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">Detail PNS</h1> --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset($pnsList['foto']) }}" class="img-fluid rounded-circle mb-3" style="width: 200px;">
                    <h1 class="m-0 font-weight-bold text-primary">{{ $pnsList['nama'] }}</h1>
                    <br>
                    <h3>{{ $pnsList['nip'] }}</h3>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Tempat Lahir:</strong> {{ $pnsList['tempat_lahir'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Tanggal Lahir:</strong> {{ $pnsList['tanggal_lahir'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Jenis Kelamin:</strong> {{ $pnsList['jenis_kelamin'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Pendidikan Terakhir:</strong> {{ $pnsList['pendidikan_Terakhir'] }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Pangkat:</strong> {{ $pnsList['pangkat'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Golongan:</strong> {{ $pnsList['golongan'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>TMT CPNS:</strong> {{ $pnsList['tmt_cpns'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>TMT Pangkat:</strong> {{ $pnsList['tmt_pangkat'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Jabatan:</strong> {{ $pnsList['jabatan'] }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5>Riwayat TMT</h5>
                        <div class="list-group">
                            @foreach ($pnsList['riwayat_tmt'] as $tmt)
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ $tmt['jenis'] }}</h6>
                                        <small>{{ $tmt['tanggal'] }}</small>
                                    </div>
                                    <p class="mb-1">{{ $tmt['keterangan'] }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>Riwayat Diklat</h5>
                        <div class="list-group">
                            @foreach ($pnsList['riwayat_tmt'] as $tmt)
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ $tmt['jenis'] }}</h6>
                                        <small>{{ $tmt['tanggal'] }}</small>
                                    </div>
                                    <p class="mb-1">{{ $tmt['keterangan'] }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Page level plugins -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection

@section('styles')
<!-- Custom styles -->
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection









{{-- <div class="container-fluid"> --}}
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Data PNS</h1> --}}
    
    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Pangkat/Gol</th>
                            <th>Jabatan</th>
                            <th>Unit Kerja</th>
                            <th>TMT Pangkat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pnsList as $pns)
                        <tr>
                            <td>{{ $pns['nip'] }}</td>
                            <td>{{ $pns['nama'] }}</td>
                            <td>{{ $pns['pangkat'] }} ({{ $pns['golongan'] }})</td>
                            <td>{{ $pns['jabatan'] }}</td>
                            <td>{{ $pns['unit_kerja'] }}</td>
                            <td>{{ $pns['tmt_pangkat'] }}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}