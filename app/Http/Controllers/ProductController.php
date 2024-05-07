<?php

namespace App\Http\Controllers;

// Import model product
use App\Models\Product;

// Import tipe kembalian View
use Illuminate\View\View;

// Import tipe kembalian RedirectResponse
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

// Import Http Request
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        // Dapatkan semua produk
        $products = Product::latest()->paginate(10);

        // Render tampilan dengan produk
        return view('products.index', compact('products'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * store
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

        // Buat produk
        Product::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);

        // Redirect ke indeks
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        // Dapatkan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Render tampilan dengan produk
        return view('products.show', compact('product'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // Dapatkan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Render tampilan dengan produk
        return view('products.edit', compact('product'));
    }

    /**
     * update
     *
     * @param  mixed $request
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

        // Dapatkan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Periksa jika gambar diunggah
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

        // Redirect ke indeks
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Dapatkan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus gambar
        Storage::delete('public/products/'. $product->image);

        // Hapus produk
        $product->delete();

        // Redirect ke indeks
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
