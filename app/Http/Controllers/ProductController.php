<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan halaman publik
    public function homePublic() {
        $produkUnggulan = \App\Models\Product::where('is_featured', true)->take(3)->get();
        // Ambil ulasan yang di-feature (di-approve admin)
        $ulasan = \App\Models\Feedback::where('is_featured', true)->latest()->take(5)->get();
        
        return view('home', compact('produkUnggulan', 'ulasan')); 
    }

    // Menampilkan halaman admin
    public function index() {
        $products = \App\Models\Product::all();
        // Ambil semua ulasan untuk admin
        $feedbacks = \App\Models\Feedback::latest()->get(); 
        
        return view('Admin.homeadmin', compact('products', 'feedbacks'));
    }

    // Tambah Produk Baru
    public function store(Request $request) {
        $request->validate([
            'brand' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'brand' => $request->brand,
            'badge' => $request->badge,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Produk berhasil ditambahkan!');
    }

    // Hapus Produk
    public function destroy($id) {
        $product = Product::findOrFail($id);
        if (Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return back()->with('success', 'Produk dihapus!');
    }

    // Update Produk
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $request->validate([
            'brand' => 'required',
            'name' => 'required',
            'description' => 'required',
            // Gambar boleh kosong (nullable) jika admin tidak ingin ganti gambar
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        $data = $request->except('image');

        // Jika admin mengupload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari server
            if (Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // Update data ke database
        $product->update($data);

        return back()->with('success', 'Data produk berhasil diperbarui!');
    }
}
