@extends('layouts.app')

@section('title', 'Detail TMT Pensiun')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Detail Pensiun</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nama: {{ $data['nama'] }}</h5>
                    <h5>NIP: {{ $data['nip'] }}</h5>
                    <h5>TMT Pensiun: {{ date('d M Y', strtotime($data['tmt_pensiun'])) }}</h5>
                </div>
                <div class="col-md-6">
                    <h5>Jenis: {{ $data['jenis_pensiun'] }}</h5>
                    <h5>Masa Kerja: {{ $data['masa_kerja'] }}</h5>
                    <h5>Unit Kerja: {{ $data['unit_kerja'] }}</h5>
                </div>
            </div>

            <hr>
            
            <div class="mt-4">
                <a href="#" class="btn btn-success">
                    <i class="fas fa-download"></i> Unduh SK Pensiun
                </a>
                <a href="{{ route('tmt.pensiun.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection