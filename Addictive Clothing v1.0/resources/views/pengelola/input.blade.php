@extends('pengelola.layouts.template')
@section('input')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Input Barang</h2>
            </div>

        </div>
    </section>
    <section class="form">
        <div class="form-container">
            <form action="{{ route('input.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="text" class="form-control" id="merek" name="merek">
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar">
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
@endsection
