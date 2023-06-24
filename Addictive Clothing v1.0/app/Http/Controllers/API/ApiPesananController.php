<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pesanan;
use App\Barang;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Support\Facades\Redirect;

class ApiPesananController extends Controller
{
    public function index()
    {
        $user_id = 11;
        $pesanan = Pesanan::with('barang')->where('user_id', $user_id)->get();

        return response()->json($pesanan);
    }

    public function process(CheckoutRequest $request)
    {
        $user = Auth::user();
        $barangId = $request->input('barang_id');
        $alamat = $request->input('alamat');
        $provinsi = $request->input('provinsi');
        $kabupaten = $request->input('kabupaten');
        $kodePos = $request->input('kode_pos');
        $nomorHp = $request->input('nomor_hp');
        $metodePembayaran = $request->input('pembayaran');

        $checkout = new Pesanan();
        $checkout->user_id = $user->id;
        $checkout->barang_id = $barangId;
        $checkout->alamat = $alamat;
        $checkout->provinsi = $provinsi;
        $checkout->kabupaten = $kabupaten;
        $checkout->kode_pos = $kodePos;
        $checkout->nomor_hp = $nomorHp;
        $checkout->metode_pembayaran = $metodePembayaran;
        $checkout->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Pesanan berhasil diproses'
        ]);
    }
}

