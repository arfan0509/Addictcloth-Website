@extends('pengelola.layouts.template')
@section('barang')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Barang</h2>
            </div>

        </div>
    </section>
        <div class="container-barang">
            <table class="table-bordered table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merek</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->id_barang }}</td>
                            <td>{{ $barang->merek }}</td>
                            <td>{{ $barang->gambar }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->deskripsi }}</td>
                            <td>{{ $barang->created_at }}</td>
                            <td>{{ $barang->updated_at }}</td>
                            <td>
                                <div class="btn-edit">
                                    <a href="{{ route('barang.edit', $barang->id_barang) }}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="btn-hapus">
                                    <form action="{{ route('barang.delete', $barang->id_barang) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
