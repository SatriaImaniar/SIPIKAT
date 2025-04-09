@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Judul -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-calendar-alt"></i> Manajemen Kenaikan Berkala
    </h1>

    <!-- Form Input -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-plus-circle"></i> Input Kenaikan Berkala Baru
            </h6>
        </div>
        <div class="card-body">
            {{-- <form action="{{ route('tmt-berkala.store') }}" method="POST"> --}}
                @csrf
                <div class="row">
                    <!-- Pilih PNS -->
                    <div class="col-md-6 form-group">
                        <label>Pilih PNS</label>
                        <select class="form-control" name="pns_id" required>
                            <option value="">-- Pilih Pegawai --</option>
                            @foreach($pegawai as $p)
                                <option value="{{ $p['id'] }}">
                                    {{ $p['nip'] }} - {{ $p['nama'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('pns_id')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- TMT Berlaku -->
                    <div class="col-md-6 form-group">
                        <label>Tanggal Berlaku (TMT)</label>
                        <input type="date" class="form-control" name="tmt_berlaku" required>
                        @error('tmt_berlaku')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- Gaji Lama -->
                    <div class="col-md-4 form-group">
                        <label>Gaji Pokok Lama</label>
                        <input type="text" class="form-control" value="Rp 4.200.000" readonly>
                    </div>

                    <!-- Gaji Baru -->
                    <div class="col-md-4 form-group">
                        <label>Gaji Pokok Baru</label>
                        <input type="text" class="form-control" name="gaji_baru" required>
                        @error('gaji_baru')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Upload SK -->
                    <div class="col-md-4 form-group">
                        <label>Upload SK (PDF)</label>
                        <input type="file" class="form-control-file" name="sk">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Data
                </button>
            </form>
        </div>
    </div>

    <!-- Tabel Riwayat -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-history"></i> Riwayat Kenaikan Berkala
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama PNS</th>
                            <th>NIP</th>
                            <th>Periode</th>
                            <th>TMT Berlaku</th>
                            <th>Gaji Lama</th>
                            <th>Gaji Baru</th>
                            <th>SK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kenaikanBerkala as $kb)
                        <tr>
                            <td>{{ $kb['nama_pns'] }}</td>
                            <td>{{ $kb['nip'] }}</td>
                            <td>{{ $kb['periode'] }}</td>
                            <td>{{ date('d/m/Y', strtotime($kb['tmt_berlaku'])) }}</td>
                            <td>{{ $kb['gaji_lama'] }}</td>
                            <td>{{ $kb['gaji_baru'] }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fas fa-file-pdf"></i> Lihat
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
<script>
    // Inisialisasi Select2 untuk pencarian PNS
    $(document).ready(function() {
        $('select[name="pns_id"]').select2({
            placeholder: "Cari berdasarkan NIP/Nama",
            allowClear: true
        });
    });
</script>
@endsection