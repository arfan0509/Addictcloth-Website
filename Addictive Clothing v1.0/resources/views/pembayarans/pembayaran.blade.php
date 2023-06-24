@extends('pembayarans.layouts.base')
@section('content')
    <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pembayaran</h2>
                </div>

            </div>
        </section>
    <div class="container">
        
        <!-- ======= Breadcrumbs ======= -->

		<div class="row">
			<!-- KOLOM 1 -->
			<div class="col-md-7">
				<form>
					<h3 class="text-judul">Alamat Pengiriman</h3>

					<label class="w-100 mb-3">
						Alamat lengkap <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Provinsi <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Kabupaten / Kota <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Kode POS <br>
						<input type="number" class="form-control">
					</label>

					<h3 class="text-judul mt-5">Kurir Pengiriman</h3>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="kurir">
						<img src="{{ asset('frontend/assets/img/icon/kurir-1.png') }}">
						<span class="float-end">+ IDR 10.000</span>
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="kurir">
						<img src="{{ asset('frontend/assets/img/icon/kurir-2.png') }}">
						<span class="float-end">+ IDR 12.000</span>
					</label>


					<h3 class="text-judul mt-5">Metode Pembayaran</h3>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						Transfer Bank
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						Cash on Delivery (COD)
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="{{ asset('frontend/assets/img/icon/dana.png') }}">
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="{{ asset('frontend/assets/img/icon/gopay.png') }}">
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="{{ asset('frontend/assets/img/icon/ovo.png') }}">
					</label>

					<button type="submit" class="btn btn-lg btn-success mt-5 mb-5">Bayar</button>

				</form>
			</div>

			<!-- KOLOM 2 -->
			<div class="col-md-4 offset-md-1">
				<div class="card">
				  <div class="card-header bg-white">
				    <h3 class="text-judul">Detail Pembayaran</h3>
				  </div>
				  <div class="card-body">
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Sub Total</small></div>
				    	<div class="col-md">IDR 145.400</div>
				    </div>
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Biaya pengiriman</small></div>
				    	<div class="col-md">IDR 10.000</div>
				    </div>
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Total</small></div>
				    	<div class="col-md">IDR 155.400</div>
				    </div>
				  </div>
				  <div class="card-footer">
				    <button type="submit" class="btn btn-lg btn-success w-100">Bayar</button>
				  </div>
				</div>
			</div>
		</div> 
        <!-- End Portfolio Details Section
    </main> End #main -->
@endsection
