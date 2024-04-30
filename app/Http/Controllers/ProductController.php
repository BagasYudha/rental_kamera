<?php

namespace App\Http\Controllers;

// Import model Product
use App\Models\Product;

// Import tipe kembalian View
use Illuminate\View\View;

// Import tipe kembalian RedirectResponse
use Illuminate\Http\RedirectResponse;

// Import HTTP Request
use Illuminate\Http\Request;

// Import Fasad Storage
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk.
     *
     * @return View
     */
    public function index(): View
    {
        // Mengambil semua produk
        $products = Product::latest()->paginate(10);

        // Menampilkan view dengan produk
        return view('products.index', compact('products'));
    }

    /**
     * Menampilkan halaman tambah produk.
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Menyimpan produk baru.
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        // Unggah gambar
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        // Buat produk baru
        Product::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);

        // Redirect ke index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Menampilkan detail produk.
     *
     * @param  string $id
     * @return View
     */
    public function show(string $id): View
    {
        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Menampilkan view dengan produk
        return view('products.show', compact('product'));
    }

    /**
     * Menampilkan halaman edit produk.
     *
     * @param  string $id
     * @return View
     */
    public function edit(string $id): View
    {
        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Menampilkan view dengan produk
        return view('products.edit', compact('product'));
    }

    /**
     * Memperbarui produk yang ada.
     *
     * @param  Request $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validasi form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Periksa apakah gambar diunggah
        if ($request->hasFile('image')) {

            // Unggah gambar baru
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            // Hapus gambar lama
            Storage::delete('public/products/'.$product->image);

            // Perbarui produk dengan gambar baru
            $product->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);

        } else {

            // Perbarui produk tanpa gambar
            $product->update([
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);
        }

        // Redirect ke index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Menghapus produk.
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus gambar
        Storage::delete('public/products/'. $product->image);

        // Hapus produk
        $product->delete();

        // Redirect ke index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
