@extends('details.layouts.base')
@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Produk Detail</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Produk Detail</li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8" id="gmbr">
                        <img src="{{ asset('frontend/assets/img/produk/' . $barang->gambar) }}" alt="">
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h6>{{ $barang->merek }}</h6>
                            <h3>Rp {{ $barang->harga }}</h3>
                            <ul>
                                <li><strong>Kondisi</strong>: Baru</li>
                                <li><strong>Berat Satuan</strong>: 142g</li>
                                <li><strong>Waktu Preorder</strong>: 4 Hari</li>
                                <li><strong>Kategori</strong>: Kaos Pria</li>
                                <li><strong>
                                        <!-- Tombol favorit hanya ditampilkan saat pengguna sudah login -->
                                        @auth
                                            <a href="{{ route('add.favorite', $barang->id_barang) }}"
                                                class="btn btn-outline-primary">Tambah Favorite</a>

                                        @endauth
                                        <!-- Jika pengguna belum login, tombol favorit akan mengarahkan ke halaman login -->
                                        @guest
                                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login untuk
                                                Menambahkan ke Favorit</a>
                                        @endguest
                                    </strong></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Detail</h2>
                            <p>{!! nl2br(e($barang->deskripsi)) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="pesan">
                    <h6 id="pesan">Pesan Sekarang</h6>
                    <div class="tombol">
                        <div class="logo-tokped">
                            <a href="https://www.tokopedia.com/addictclothting?utm_source=sellerchannel&utm_campaign=Shop-0-14067566-0&utm_medium=share&fbclid=PAAab0N5qm5ms27FD8xXXWeHolCl69n8onv5jJeOMYMHZGhwTRGbRw13KTaXk&_branch_match_id=1173616213403730326&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXL8nPzi9ITclM1MvJzMvWT0xJyUwuSc7JL8koycxLt09LSs7JTLENcHRMTDLwMy3MNc0tNjJ3c7GoiIgIT%2FXIz3HOMbPMs8jPKzPN8kr194309YhyzygPCXJPCio3NPYOSYzIBgB7mMr2awAAAA%3D%3D"
                                target="blank"><span class="btn-logo">tokopedia</span></a>
                        </div>
                        <div class="btn-psn">
                            <a href="{{ route('checkout', $barang->id_barang) }}">
                                <span class="btn-pesan">Pesan</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
