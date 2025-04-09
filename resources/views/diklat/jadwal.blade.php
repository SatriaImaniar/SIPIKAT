@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jadwal Diklat</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Jadwal Pelatihan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Diklat</th>
                            <th>Jenis</th>
                            <th>Periode</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Kuota</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwalDiklat as $diklat)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $diklat['nama_diklat'] }}</td>
                            <td>{{ $diklat['jenis'] }}</td>
                            <td>{{ $diklat['periode'] }}</td>
                            <td>{{ $diklat['lokasi'] }}</td>
                            <td>
                                @if($diklat['status'] == 'Tersedia')
                                    <span class="badge badge-success">{{ $diklat['status'] }}</span>
                                @elseif($diklat['status'] == 'Berlangsung')
                                    <span class="badge badge-primary">{{ $diklat['status'] }}</span>
                                @else
                                    <span class="badge badge-danger">{{ $diklat['status'] }}</span>
                                @endif
                            </td>
                            <td>{{ $diklat['kuota'] }} Kursi</td>
                            <td>{{ $diklat['biaya'] }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
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

@section('scripts')
<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Inisialisasi DataTable -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
            }
        });
    });
</script>
@endsection