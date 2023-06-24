@extends('favorite.layouts.template')

@section('favorite')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>FAVORITE</h2>
            </div>
            <div class="row portfolio-container">
                @foreach ($favorites as $favorite)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <!-- Gambar -->
                                <img src="{{ asset('frontend/assets/img/produk/' . $favorite->item->gambar) }}" class="img-fluid" alt="" />
                                <div class="portfolio-info">
                                    <!-- Merek -->
                                    <h4>{{ $favorite->item->merek }}</h4>
                                    <!-- Harga -->
                                    <p>{{ $favorite->item->harga }}</p>
                                    <div class="portfolio-links">
                                        <!-- Tombol untuk menghapus dari favorit -->
                                        <a href="{{ route('remove.favorite', $favorite->id) }}"
                                            title="Hapus Dari Favorite"><i class="bx bx-minus"></i></a>
                                        <!-- Tombol untuk redirect ke detail -->
                                        <a href="{{ route('detail.show', $favorite->item->id_barang) }}"
                                            title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
        </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
