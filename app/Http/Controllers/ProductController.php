<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Kategori;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Menampilkan halaman rental produk.
     *
     * @return View
     */
    public function rentalProduk()
    {
        $products = Product::all();
        return view('rental', compact('products'));
    }

    /**
     * Menampilkan formulir untuk membuat produk baru.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Kategori::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Menyimpan produk baru ke database.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_item' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'categories' => 'required|array',
            'categories.*' => 'exists:kategoris,id'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/products/', $image->hashName());

        $product = Product::create([
            'image' => $image->hashName(),
            'nama_item' => $request->nama_item,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        if ($request->has('categories')) {
            $product->categories()->attach($request->categories);
        }

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Menampilkan detail produk.
     *
     * @param  string  $id
     * @return View
     */
    public function show(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Menampilkan formulir untuk mengedit produk.
     *
     * @param  string  $id
     * @return View
     */
    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        $categories = Kategori::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Memperbarui produk yang ada di database.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_item' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'categories' => 'required|array',
            'categories.*' => 'exists:kategoris.id'
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/products/', $image->hashName());
            Storage::delete('public/products/' . $product->image);
            $product->image = $image->hashName();
        }

        $product->nama_item = $request->nama_item;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        $product->categories()->sync($request->categories);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Menghapus produk dari database.
     *
     * @param  string  $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/products/' . $product->image);
        $product->delete();
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
