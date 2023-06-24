@extends('pesanan.layouts.base')
@section('bayar')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pesanan Anda</h2>
            </div>

        </div>
    </section>
    <div class="container-bayar">
        <div class="bg-body-tertiary mb-5 rounded p-3 shadow-sm">
            <p>Anda dapat menyelesaikan pembayaran dengan mentransfer dana ke rekening yang telah ditentukan, kemudian
                unggah bukti pembayaran sebagai konfirmasi. Proses ini memastikan bahwa pembayaran Anda tercatat dengan
                benar dan dapat diverifikasi oleh penerima. Setelah mentransfer dana, pastikan Anda menyimpan salinan bukti
                pembayaran sebagai referensi. Jika Anda mengalami kesulitan dalam mengunggah bukti pembayaran atau memiliki
                pertanyaan lebih lanjut, jangan ragu untuk menghubungi tim layanan pelanggan kami. Kami siap membantu Anda
                dalam menyelesaikan pembayaran dengan cepat dan efisien. Terima kasih atas kerjasama dan kepercayaan Anda.
            </p>
            <h5>Upload Bukti Pembayaran</h5>
            {!! Form::open(['route' =>  ['pesanan.upload', $pesanan->id]]) !!}
            @csrf
            {!! Form::file('bukti') !!}
            {!! Form::submit('Upload',['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
