@extends('layouts.app')

@section('title', 'Tambah Data Pensiun')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah TMT Pensiun</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('tmt.pensiun.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>Nama PNS</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>NIP</label>
                    <input type="number" name="nip" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>TMT Pensiun</label>
                    <input type="date" name="tmt_pensiun" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jenis Pensiun</label>
                    <select name="jenis_pensiun" class="form-control" required>
                        <option value="BUP">Batas Usia Pensiun</option>
                        <option value="APS">Atas Permintaan Sendiri</option>
                        <option value="Janda/Duda">Janda/Duda</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Masa Kerja</label>
                    <input type="text" name="masa_kerja" class="form-control" 
                           placeholder="Contoh: 40 tahun 3 bulan" required>
                </div>

                <div class="form-group">
                    <label>Unit Kerja</label>
                    <input type="text" name="unit_kerja" class="form-control" 
                           value="Dinas Pendidikan" required>
                </div>

                <div class="form-group">
                    <label>Upload Dokumen</label>
                    <input type="file" name="dokumen" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection