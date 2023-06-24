@extends('pengelola.layouts.template')
@section('konfirmasi-user')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Konfirmasi Status Pesanan</h2>
            </div>
        </div>
    </section>
    <div class="container-user">
        <div class="item">
            {!! Form::open(['route' => ['konfirmasi-update', $konfirmasi->id], 'method' => 'PUT']) !!}
            <table class="table-bordered table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $konfirmasi->id }}</td>
                        <td>{{ $konfirmasi->user->name }}</td>
                        <td>{{ $konfirmasi->user->email }}</td>
                        <td>
                            {!! Form::radio('status', 'Menunggu Pembayaran', $konfirmasi->status == 'Menunggu Pembayaran') !!}
                            {!! Form::label('status', 'Menunggu Pembayaran') !!}
                            <br>
                            {!! Form::radio('status', 'Pembayaran Diterima', $konfirmasi->status == 'Pembayaran Diterima') !!}
                            {!! Form::label('status', 'Pembayaran Diterima') !!}
                            <br>
                            {!! Form::radio('status', 'Dibatalkan', $konfirmasi->status == 'Dibatalkan') !!}
                            {!! Form::label('status', 'Dibatalkan') !!}
                        </td>
                        <td>
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
