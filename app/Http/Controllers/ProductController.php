<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function rentalProduk(): View
    {
        $products = Product::all();
        return view('rental', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_item' => 'required|min:5|max:25',
            'description' => 'required|min:10',
            'categories' => 'required|string|max:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/products/', $image->hashName());

        Product::create([
            'image' => $image->hashName(),
            'nama_item' => $request->nama_item,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            'nama_item' => 'required|min:5|max:25',
            'description' => 'required|min:10',
            'categories' => 'required|string|max:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/products/', $image->hashName());
            Storage::delete('public/products/' . $product->image);
            $product->image = $image->hashName();
        }

        $product->update([
            'nama_item' => $request->nama_item,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/products/' . $product->image);
        $product->delete();
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
