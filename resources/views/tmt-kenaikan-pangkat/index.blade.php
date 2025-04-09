@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen TMT Kenaikan Pangkat</h1>

    <!-- Form Input -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kenaikan Pangkat</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('tmt-pangkat.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama PNS</label>
                            <input type="text" class="form-control" name="nama" 
                                placeholder="Cari Nama PNS" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" 
                                placeholder="Nomor Induk Pegawai" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pangkat Baru</label>
                            <select class="form-control" name="pangkat_baru" required>
                                @foreach($pangkatOptions as $pangkat)
                                    <option value="{{ $pangkat }}">{{ $pangkat }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TMT</label>
                            <input type="date" class="form-control" name="tmt" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nomor SK</label>
                            <input type="text" class="form-control" name="sk" 
                                placeholder="Nomor Surat Keputusan" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Kenaikan Pangkat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Pangkat Lama</th>
                            <th>Pangkat Baru</th>
                            <th>Golongan</th>
                            <th>TMT</th>
                            <th>SK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['nip'] }}</td>
                                <td>{{ $item['pangkat_lama'] }}</td>
                                <td>{{ $item['pangkat_baru'] }}</td>
                                <td>{{ $item['golongan'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($item['tmt'])) }}</td>
                                <td>{{ $item['sk'] }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
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