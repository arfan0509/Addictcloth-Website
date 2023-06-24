@extends('akun.layouts.base')
@section('register')
    <div class="col-md-6 right-box">
        <div class="row align-items-center">
            <div class="header-text mb-4">
                <h2>Hallo, Mohon Untuk Daftar Terlebih Dahulu</h2>
                <p>Kami Sangat Menyambut Anda.</p>
            </div>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Nama"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control form-control-lg bg-light fs-6"
                        placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                        placeholder="Password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-1">
                    <input type="password" name="password_confirmation" class="form-control form-control-lg bg-light fs-6"
                        placeholder="Konfirmasi Password" required autocomplete="new-password">
                </div>
                <div class="boxsized"></div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Daftar</button>
                </div>
                <div class="row">
                    <small>Sudah Punya Akun? <a href="{{ route('login')}}">Masuk</a></small>
                </div>
            </form>
        </div>
    </div>
@endsection
