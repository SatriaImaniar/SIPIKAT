@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="card border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center mb-4">
                            <h1 class="h4 text-gray-900 mb-3">
                                <i class="fas fa-tasks me-2"></i>Registrasi
                            </h1>
                        </div>
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Nama -->
                            <div class="form-group mb-3">
                                <input id="name" type="text" 
                                    class="form-control form-control-user @error('name') is-invalid @enderror" 
                                    name="name" 
                                    placeholder="Nama Lengkap"
                                    value="{{ old('name') }}" 
                                    required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- NIP -->
                            <div class="form-group mb-3">
                                <input id="nip" type="text" 
                                    class="form-control form-control-user @error('nip') is-invalid @enderror" 
                                    name="nip" 
                                    placeholder="Nomor Induk Pegawai (NIP)"
                                    value="{{ old('nip') }}" 
                                    required>

                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="form-group mb-3">
                                <textarea id="alamat" 
                                    class="form-control form-control-user @error('alamat') is-invalid @enderror" 
                                    name="alamat" 
                                    placeholder="Alamat Lengkap"
                                    required>{{ old('alamat') }}</textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Tempat dan Tanggal Lahir -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="tempat_lahir" type="text" 
                                        class="form-control form-control-user @error('tempat_lahir') is-invalid @enderror" 
                                        name="tempat_lahir" 
                                        placeholder="Tempat Lahir"
                                        value="{{ old('tempat_lahir') }}" 
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input id="tanggal_lahir" type="date" 
                                        class="form-control form-control-user @error('tanggal_lahir') is-invalid @enderror" 
                                        name="tanggal_lahir" 
                                        value="{{ old('tanggal_lahir') }}" 
                                        required>
                                </div>
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="form-group mb-3">
                                <select id="jenis_kelamin" 
                                    class="form-control form-control-user @error('jenis_kelamin') is-invalid @enderror" 
                                    name="jenis_kelamin" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Agama -->
                            <div class="form-group mb-3">
                                <input id="agama" type="text" 
                                    class="form-control form-control-user @error('agama') is-invalid @enderror" 
                                    name="agama" 
                                    placeholder="Agama"
                                    value="{{ old('agama') }}" 
                                    required>

                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- KTP -->
                            <div class="form-group mb-3">
                                <input id="ktp" type="text" 
                                    class="form-control form-control-user @error('ktp') is-invalid @enderror" 
                                    name="ktp" 
                                    placeholder="Nomor KTP"
                                    value="{{ old('ktp') }}" 
                                    required>

                                @error('ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- NPWP -->
                            <div class="form-group mb-4">
                                <input id="npwp" type="text" 
                                    class="form-control form-control-user @error('npwp') is-invalid @enderror" 
                                    name="npwp" 
                                    placeholder="Nomor NPWP"
                                    value="{{ old('npwp') }}" 
                                    required>

                                @error('npwp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-3">
                                <input id="password" type="password" 
                                    class="form-control form-control-user @error('password') is-invalid @enderror" 
                                    name="password" 
                                    placeholder="Password"
                                    required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="password-confirm" type="password" 
                                    class="form-control form-control-user" 
                                    name="password_confirmation" 
                                    placeholder="Konfirmasi Password"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Register') }}
                            </button>

                            <hr class="my-4">
                            
                            <div class="text-center small">
                                Sudah Punya Akun? 
                                <a href="{{ route('login')}}" class="text-decoration-none">Login disini</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
