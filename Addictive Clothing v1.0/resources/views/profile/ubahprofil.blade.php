@extends('profile.layouts.base')
@section('ubah')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Ubah Profil</h2>
            </div>

        </div>
    </section>
    <div class="container py-5">
        {!! Form::open(['route' => 'profile.ubah']) !!}
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-5 text-center">
                    <div class="card-body">
                        <img src="{{ asset('frontend/assets/img/cat.jpg') }}" alt="Profil Picture"
                            class="img img-thumbnail rounded-circle w-50">
                        <h2>{{ $user->name }}</h2>
                        {{-- Button Submit --}}
                        {!! Form::submit('Ubah Profile', ['class' => 'btn btn-primary btn-sm']) !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="mb-5 rounded border p-5 shadow">
                    <h2>Informasi Kontak</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            {{-- Form Input --}}
                            <p class="card-text">
                                <span class="text-muted d-block mb-1">Alamat :</span>
                                <i class="fa-solid fa-map me-2 text-success"></i>
                                {!! Form::text('address', $user->address, ['class' => 'form-control']) !!}
                            </p>
                            <p class="card-text">
                                <span class="text-muted d-block mb-1">Alamat Email</span>
                                <i class="fa-solid fa-envelope me-2 text-success"></i>
                                {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                            </p>
                            <p class="card-text">
                                <span class="text-muted d-block mb-1">Nomor Telepon</span>
                                <i class="fa-solid fa-phone me-2 text-success"></i>
                                {!! Form::text('phone_number', $user->phone_number, ['class' => 'form-control']) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    </div>
    </div>
@endsection
