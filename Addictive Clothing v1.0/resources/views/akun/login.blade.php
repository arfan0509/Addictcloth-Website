@extends('akun.layouts.base')
@section('login')
    <div class="col-md-6 right-box">
        <div class="row align-items-center">
            <div class="header-text mb-4">
                <h2>Hallo, Silakan Login Untuk Menjelajahi</h2>
                <p>Kami Gembira Dengan Kedatangan Anda.</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"
                        name="password" required autocomplete="current-password">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Masuk</button>
                </div>
                <div class="row">
                    <small>Tidak Punya Akun? <a href="{{ route('register.index') }}">Daftar</a></small>
                </div>
            </form>
        </div>
    </div>
@endsection
