@extends('layouts.app')

@section('title', 'Manajemen TMT Pensiun')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar TMT Pensiun</h1>
    
    <!-- Tombol Tambah -->
    <a href="{{ route('tmt.pensiun.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Tambah Data
    </a>

    <!-- Tabel Data -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>TMT Pensiun</th>
                            <th>Jenis Pensiun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pensiun as $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['nip'] }}</td>
                            <td>{{ date('d M Y', strtotime($item['tmt_pensiun'])) }}</td>
                            <td>
                                <span class="badge badge-{{ $item['jenis_pensiun'] == 'BUP' ? 'success' : 'warning' }}">
                                    {{ $item['jenis_pensiun'] }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('tmt.pensiun.show', $item['id']) }}" 
                                   class="btn btn-info btn-sm" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('tmt.pensiun.edit', $item['id']) }}" 
                                   class="btn btn-warning btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('tmt.pensiun.destroy', $item['id']) }}" 
                                      method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('Hapus data?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
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