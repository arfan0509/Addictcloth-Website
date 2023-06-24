@extends('home.layouts.template')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-0 order-lg-1 d-flex flex-column justify-content-center order-2 pt-4">
                    <h1>Customizable and Addictive </h1>
                    <h2>Addictive Clothing Selain menawarkan pillihan baju distro yang keren, juga menawarkan
                        layanan untuk sablon kaos dan pembuatan jersey</h2>
                    <div><a href="#Produk" class="btn-get-started scrollto">Lihat Produk</a></div>
                </div>
                <div class="col-lg-6 order-lg-2 hero-img order-1">
                    <img src={{ asset('frontend/assets/img/baju_awal.png') }} class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Layanan</h2>
                <p>Disini Kami Dapat Melayani</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-bag" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Pembelian Kaos Distro</a></h4>
                        <p class="description">Pilih kaos distro yang kamu inginkan dan pesan sekarang juga</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-shirt" style="color: #800080;"></i></div>
                        <h4 class="title"><a href="">Sablon</a></h4>
                        <p class="description">Disini kalian juga bisa request sablon, tinggal hubungi kontak kami</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-volleyball" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Pembuatan Jersey</a></h4>
                        <p class="description">Mau buat jersey untuk futsal? bulu tangkis? atau untuk e-sport tim kalian?
                            boleeh</p>
                    </div>

                </div>

            </div>
    </section><!-- End Services Section -->

    <div style="height: 200px;"></div>

    <!-- Quotes -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ecd4fa" fill-opacity="1"
            d="M0,160L30,154.7C60,149,120,139,180,117.3C240,96,300,64,360,48C420,32,480,32,540,74.7C600,117,660,203,720,202.7C780,203,840,117,900,85.3C960,53,1020,75,1080,112C1140,149,1200,203,1260,213.3C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
        </path>
    </svg>
    <section class="section-quote">
        <div class="quote-page container">
            <div class="img-quote"><img src="{{ asset('frontend/assets/img/girl.png') }}" alt=""></div>
            <div class="container-quote">
                <h2 class="quote">"Tampil beda dan mengekspresikan diri dengan Addictive Clothing. Desain keren dan
                    trendy untuk kamu yang percaya diri. Jelajahi situs web kami dan temukan pakaian yang memungkinkanmu
                    mengeksplorasi gaya pribadi! "</h2>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ecd4fa" fill-opacity="1"
            d="M0,192L30,181.3C60,171,120,149,180,144C240,139,300,149,360,144C420,139,480,117,540,133.3C600,149,660,203,720,192C780,181,840,107,900,90.7C960,75,1020,117,1080,154.7C1140,192,1200,224,1260,224C1320,224,1380,192,1410,176L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>
    <!-- End Quotes -->

    <!-- Produk -->
    <section id="Produk">
        <div class="container">
            <div class="section-title">
                <h2>Produk</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($barangs as $barang)
                        <div class="item">
                            <div class="card"><img src="{{ asset('frontend/assets/img/produk/' . $barang->gambar) }}"
                                    alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>{{ $barang->merek }}</h3>
                                    <h6>Rp {{ $barang->harga }}</h6>
                                    <div class="button-grp">
                                        <a href="{{ route('detail.show', $barang->id_barang) }}">
                                            <button type="button" class="btn btn-outline-primary">Detail Produk</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Produk -->

    <section id="ukuran">
        <div class="container">
            <div class="section-title">
                <h2>Ukuran</h2>
                <img src="{{ asset('frontend/assets/img/size.png') }}" alt="" srcset="" class="size_img">
            </div>
        </div>
    </section>
    <!-- About Us -->
    <section id="kami">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>
            <div class="section-title about" style="display: flex">
                <div class="about_us_img">
                    <img src="{{ asset('frontend/assets/img/orang.png') }}" alt="">
                </div>
                <div class="about_us_text">
                    <p class="text_about">Addictive Clothing Store, sebuah toko baju distro dari Kota Kediri yang buka sejak
                        2021.
                        Usaha ini diciptakan oleh 3 orang remaja asal kediri
                        Tidak hanya menjual baju distro tapi juga melayani sablon dan pembuatan jersey.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->
@endsection
