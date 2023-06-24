@extends('pengelola.layouts.template')
@section('edit')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Barang</h2>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="item">
            <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="text" class="form-control" name="merek" value="{{ $barang->merek }}" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name="gambar" value="{{ $barang->gambar }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $barang->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $barang->deskripsi }}" required>
                </div>
                <input type="submit" class="btn btn-warning" value="Update">
            </form>
        </div>
    </div>
@endsection
