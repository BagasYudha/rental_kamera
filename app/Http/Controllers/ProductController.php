<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('Transaksi', compact('products'));
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Nama_Peminjam' => 'required',
            'Jaminan' => 'required',
            'Nama_Barang' => 'required',
            'Jam_Ambil' => 'required',
            'Tanggal_Ambil' => 'required',
            'Tanggal_Kembali' => 'required',
        ]);

        Product::create([
            'Nama_Peminjam' => $request->Nama_Peminjam,
            'Jaminan' => $request->Jaminan,
            'Nama_Barang' => $request->Nama_Barang,
            'Jam_Ambil' => $request->Jam_Ambil,
            'Tanggal_Ambil' => $request->Tanggal_Ambil,
            'Tanggal_Kembali' => $request->Tanggal_Kembali,
        ]);

        return redirect()->route('Transaksi')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}