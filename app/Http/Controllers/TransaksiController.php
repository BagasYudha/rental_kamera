<?php

namespace App\Http\Controllers;


use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = transaksi::latest()->paginate(10);
    return view('Transaksi')->with('Transaksi', $transaksi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'jaminan' => 'required|max:100',
            'namabarang' => 'required|max:100',
            'jamAmbil' => 'required|max:100',
            'tglAmbil' => 'required|max:100',
            'tglKembali' => 'required|max:100',
        ]);

        $transaksi = new Transaksi();
        $transaksi->nama = $request->nama;
        $transaksi->jaminan = $request->jaminan;
        $transaksi->namabarang = $request->namabarang;
        $transaksi->jamAmbil = $request->jamAmbil;
        $transaksi->tglAmbil = $request->tglAmbil;
        $transaksi->tglKembali = $request->tglKembali;
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');

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
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
    
    $transaksi->delete();
    
    return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
