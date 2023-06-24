@extends('pengelola.layouts.template')
@section('konfirmasi')
<section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Konfirmasi Status Pesanan</h2>
            </div>

        </div>
    </section>
    <div class="container-user">
        <div class="item">
            <table class="table-bordered table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Metode</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->user->name }}</td>
                            <td>{{ $user->user->email }}</td>
                            <td>{{ $user->metode_pembayaran }}</td>
                            <td>{{ $user->status }}</td>
                            <td><a href="{{ route('konfirmasi-user', ['id' => $user->id]) }}" class="btn btn-warning">Konfirmasi</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
