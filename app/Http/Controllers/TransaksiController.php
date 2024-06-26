<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Product;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::paginate(10);
        return view('Transaksi', compact('transaksis'));
    }

    public function create()
    {
        $products = Product::all();
        return view('tambah', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'jaminan' => 'required|max:100',
            'nama_item' => 'required|exists:products,nama_item',
            'jamAmbil' => 'required|max:100',
            'tglAmbil' => 'required|date',
            'tglKembali' => 'required|date',
        ]);

        $product = Product::where('nama_item', $request->nama_item)->first();

        // Periksa apakah produk ditemukan dan stok mencukupi
        if ($product && $product->stock <= 0) {
            return redirect()->back()->with('error', 'Stok produk sudah habis, tidak dapat menambahkan transaksi baru.');
        }

        // Lanjutkan proses penyimpanan transaksi jika stok mencukupi

        Transaksi::create([
            'nama' => $request->nama,
            'jaminan' => $request->jaminan,
            'nama_item' => $request->nama_item,
            'jamAmbil' => $request->jamAmbil,
            'tglAmbil' => $request->tglAmbil,
            'tglKembali' => $request->tglKembali,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
