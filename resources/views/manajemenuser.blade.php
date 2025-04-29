@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
            <i class="fas fa-users"> Manajemen User</i>

        </h1>


        <!-- Navigation -->
        <div class="mb-4">
            <a href="{{ route('manajemenuser.index') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data User
            </a>
        </div>
        <!-- Tabel Mobil -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Manajemen User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Role</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->nip }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $user->password }}</td>
                                    <td>
                                        <a href="{{ route('manajemen-user.show', $user->id) }}"
                                            class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                         </a>
                                         
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
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





{{-- <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>123456789</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $user->is_active ? 'Aktif' : 'Non‑aktif' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Nonaktifkan</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}








{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manajemen User</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{ $role->name }}@if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $user->is_active ? 'Aktif' : 'Non‑aktif' }}</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-warning">Edit</a>
                          <a href="#" class="btn btn-sm btn-danger">Nonaktifkan</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}
