@extends('profile.layouts.base')
@section('profile')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Profil</h2>
            </div>

        </div>
    </section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-5 text-center">
                    <div class="card-body">
                        <img src="{{ asset('frontend/assets/img/cat.jpg') }}" alt="Profil Picture"
                            class="img img-thumbnail rounded-circle w-50">
                        <h2>{{ $user->name }}</h2>
                        <a class="btn btn-primary btn-sm" href="{{ route('ubah') }}"><i class="fa-solid fa-pencil"></i> Ubah
                            Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="mb-5 rounded border p-5 shadow">
                    <h2>Informasi Kontak</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="card-text">
                                <span class="text-muted d-block mb-1">Alamat :</span>
                                <i class="fa-solid fa-map me-2 text-success"></i>
                                @if ($user->address)
                                    {{ $user->address }}
                                @else
                                    Masih Belum Ada
                                @endif
                            </p>
                            <p class="card-text">
                                <span class="text-muted d-block mb-1">Alamat Email</span>
                                <i class="fa-solid fa-envelope me-2 text-success"></i>@if ($user->email)
                                    {{ $user->email }}
                                @else
                                    Masih Belum Ada
                                @endif
                            </p>
                            <p class="card-text">
                                <span class="text-muted d-block mb-1">Nomor Telepon</span>
                                <i class="fa-solid fa-phone me-2 text-success"></i> @if ($user->phone_number)
                                    {{ $user->phone_number }}
                                @else
                                    Masih Belum Ada
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
