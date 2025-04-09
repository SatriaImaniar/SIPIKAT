@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail PNS</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $pns['nama'] }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('foto/' . $pns['foto']) }}" class="img-fluid rounded-circle mb-3" style="width: 200px;">
                    <h4>{{ $pns['nip'] }}</h4>
                </div>
                
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Tempat Lahir:</strong> {{ $pns['tempat_lahir'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Tanggal Lahir:</strong> {{ $pns['tanggal_lahir'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Jenis Kelamin:</strong> {{ $pns['jenis_kelamin'] }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Pangkat:</strong> {{ $pns['pangkat'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Golongan:</strong> {{ $pns['golongan'] }}
                                </li>
                                <li class="list-group-item">
                                    <strong>TMT CPNS:</strong> {{ $pns['tmt_cpns'] }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5>Riwayat TMT</h5>
                        <div class="list-group">
                            @foreach($pns['riwayat_tmt'] as $tmt)
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