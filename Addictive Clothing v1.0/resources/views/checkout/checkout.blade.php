@extends('checkout.layouts.base')
@section('checkout')
    <?php
    use Collective\Html\FormFacade;
    use Collective\Html\HtmlFacade;
    ?>
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>CHECKOUT</h2>
                </div>
            </div>
        </section>
        <div class="container">
            <!-- ======= Breadcrumbs ======= -->
            <div class="box-checkout">
                <div class="column-checkout">
                    @if ($barang)
                        <div class="img-produk">
                            <img src="{{ asset('frontend/assets/img/produk/' . $barang->gambar) }}" alt=""
                                srcset="">
                        </div>
                        <div class="row-checkout">
                            <h4>{{ $barang->merek }}</h4>
                            <h6>{!! nl2br(e($barang->deskripsi)) !!}</h6>
                            <h6>Rp. {{ $barang->harga }}</h6>
                            {!! FormFacade::open(['route' => 'checkout.add']) !!}
                            {!! Form::hidden('barang_id', $barang->id_barang) !!}
                            <label class="w-100 mb-3">
                                Nomor HP <br>
                                {!! FormFacade::number('nomor_hp', null, ['class' => 'form-control']) !!}
                            </label>
                            <label class="w-100 mb-3">
                                Alamat <br>
                                {!! FormFacade::text('alamat', null, ['class' => 'form-control']) !!}
                            </label>
                            <label class="w-100 mb-3">
                                Provinsi <br>
                                {!! FormFacade::text('provinsi', null, ['class' => 'form-control']) !!}
                            </label>
                            <label class="w-100 mb-3">
                                Kabupaten / Kota <br>
                                {!! FormFacade::text('kabupaten', null, ['class' => 'form-control']) !!}
                            </label>
                            <label class="w-100 mb-3">
                                Kode POS <br>
                                {!! FormFacade::number('kode_pos', null, ['class' => 'form-control']) !!}
                            </label>
                            <h3 class="text-judul mt-5">Metode Pembayaran</h3>
                            <label class="w-100 mb-3 rounded border p-2">
                                {!! FormFacade::radio('pembayaran', 'Cash on Delivery (COD)') !!}
                                Cash on Delivery (COD)
                            </label>
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3 class="text-judul">Detail Pembayaran</h3>
                                </div>
                                <div class="card-body">\
                                    <div class="row mt-2 mb-2">
                                        <div class="col-md"><small>Harga</small></div>
                                        <div class="col-md">Rp. {{ $barang->harga }}</div>
                                    </div></div>
                                <div class="card-footer">
                                    {!! FormFacade::submit('CHECKOUT', ['class' => 'btn btn-success w-100']) !!}
                                </div>
                            </div>
                        </div>
                        {!! FormFacade::close() !!}
                </div>
            @else
                <p>Barang tidak ditemukan.</p>
                @endif
            </div>
        </div>
        </div>
    </main>
@endsection

