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
                                <i class="fas fa-tasks me-2"></i>Login
                            </h1>
                        </div>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <input id="nip" type="nip" 
                                    class="form-control form-control-user @error('nip') is-invalid @enderror" 
                                    name="nip" 
                                    value="{{ old('nip') }}" 
                                    placeholder="Masukan Nip"
                                    required autocomplete="nip" autofocus>

                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <input id="password" type="password" 
                                    class="form-control form-control-user @error('password') is-invalid @enderror" 
                                    name="password" 
                                    placeholder="Masukan Password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block mb-3">
                                {{ __('Login') }}
                            </button>

                            <div class="text-center small mb-3">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <hr class="my-4">

                            <div class="text-center small">
                                Belum Punya Akun? 
                                <a href="{{ route('register')}}" class="text-decoration-none">Daftar</a>
                            </div>
                            
                            <div class="text-center small mt-2">
                                Kembali Ke Beranda
                                <a href="{{ route('welcome') }}" class="text-decoration-none">Klik disini</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection

