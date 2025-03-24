@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-motorcycle mr-2"></i>
                Daftar Motor
            </h5>
            <a class="btn btn-primary btn-sm">
                {{-- href="{{ route('kendaraan.create-mobil') }}"  --}}
                <i class="fas fa-plus-circle mr-1"></i> Tambah Motor
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Nopol</th>
                            <th>Nama Motor</th>
                            <th>Terakhir Service</th>
                            <th>Perpanjang STNK</th>
                            <th>Ganti Plat</th>
                            <th>Ganti Plat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mobils as $mobil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mobil->nopol }}</td>
                                <td>{{ $mobil->nama }}</td>

                                <!-- Kolom Service -->
                                {{-- <td class="{{ $mobil->terakhir_service->diffInDays(now()) > 180 ? 'text-danger fw-bold' : '' }}">
                                {{ $mobil->terakhir_service->format('d M Y') }}
                                @if ($mobil->terakhir_service->diffInDays(now()) > 180)
                                <i class="fas fa-exclamation-circle text-danger ms-1"></i>
                                @endif
                            </td> --}}

                                <td
                                    class="{{ \Carbon\Carbon::parse($mobil->terakhir_service)->diffInDays(now()) > 180 ? 'text-danger' : '' }}">
                                    {{ \Carbon\Carbon::parse($mobil->terakhir_service)->format('d M Y') }}
                                </td>

                                <!-- Kolom STNK -->
                                {{-- <td>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>{{ $mobil->berlaku_stnk->format('d M Y') }}</span>
                                    @if ($mobil->berlaku_stnk->isBefore(now()->addMonth(1)))
                                    <span class="badge bg-warning ms-2">
                                        <i class="fas fa-clock me-1"></i> Perpanjang!
                                    </span>
                                    @endif
                                </div>
                            </td> --}}

                                <td>
                                    {{ \Carbon\Carbon::parse($mobil->berlaku_stnk)->format('d M Y') }}
                                    @if (\Carbon\Carbon::parse($mobil->berlaku_stnk)->lessThan(now()->addMonth(1)))
                                        <span class="badge bg-warning">Perlu Perpanjang!</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($mobil->berlaku_plat)->format('d M Y') }}</td>

                                <!-- Kolom Plat -->
                                {{-- <td class="{{ $mobil->berlaku_plat->isPast() ? 'text-danger' : '' }}">
                                {{ $mobil->berlaku_plat->format('d M Y') }}
                                @if ($mobil->berlaku_plat->isPast())
                                <span class="badge bg-danger">Expired</span>
                                @endif
                            </td>
                             --}}
                                <td class={{ Carbon\Carbon::parse($mobil->berlaku_plat)->isPast() ? 'text-danger' : '' }}>
                                    {{ Carbon\Carbon::parse($mobil->berlaku_plat)->format('d M Y') }}
                                    @if (Carbon\Carbon::parse($mobil->berlaku_plat)->isPast())
                                        <span class="badge bg-danger">Expired</span>
                                    @endif
                                </td>
                                <!-- Kolom Aksi -->
                                <td>
                                    <a {{-- href="{{ route('kendaraan.edit-mobil', $mobil->id) }}"  --}} class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    {{-- {{ route('kendaraan.destroy', $mobil->id) }} --}}
                                    <form action="#" method="POST" class="d-inline"
                                        onsubmit="return confirm('Hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data mobil</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



{{-- @extends('layouts.app')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-car mr-2"></i>
                Daftar Mobil
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Nopol</th>
                        <th>Nama Mobil</th>
                        <th>Terakhir Service</th>
                        <th>Perpanjang STNK</th>
                        <th>Ganti Plat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mobils as $mobil)
                        <tr>
                            <td>{{ $mobil->nopol }}</td>
                            <td>{{ $mobil->nama }}</td>
                            {{-- <td class="{{ $mobil->terakhir_service->diffInDays(now()) > 180 ? 'text-danger' : '' }}">
                        {{ $mobil->terakhir_service->format('d M Y') }}
                    </td> --}}
{{-- <td
                                class="{{ \Carbon\Carbon::parse($mobil->terakhir_service)->diffInDays(now()) > 180 ? 'text-danger' : '' }}">
                                {{ \Carbon\Carbon::parse($mobil->terakhir_service)->format('d M Y') }}
                            </td> --}}

{{-- <td>
                                {{ \Carbon\Carbon::parse($mobil->berlaku_stnk)->format('d M Y') }}
                                @if (\Carbon\Carbon::parse($mobil->berlaku_stnk)->lessThan(now()->addMonth(1)))
                                    <span class="badge bg-warning">Perlu Perpanjang!</span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($mobil->berlaku_plat)->format('d M Y') }}</td> --}}

{{-- <td>
                                {{ $mobil->berlaku_stnk->format('d M Y') }}
                                @if ($mobil->berlaku_stnk < now()->addMonth(1))
                                    <span class="badge bg-warning">Perlu Perpanjang!</span>
                                @endif
                            </td>
                            <td>{{ $mobil->berlaku_plat->format('d M Y') }}</td> --}}
{{-- </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
{{-- @endsection --}}
