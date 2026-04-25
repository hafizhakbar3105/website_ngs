<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // ==========================================
    // BAGIAN 1: FUNGSI UNTUK HALAMAN UTAMA (HOME)
    // ==========================================

    // Menampilkan halaman Home Publik
    public function homePublic() {
        $produkUnggulan = \App\Models\Product::where('is_featured', true)->take(3)->get();
        $ulasan = \App\Models\Feedback::where('is_featured', true)->latest()->take(5)->get();
        
        return view('home', compact('produkUnggulan', 'ulasan')); 
    }

    // Menampilkan halaman Home Admin
    public function index() {
        $products = \App\Models\Product::all();
        $feedbacks = \App\Models\Feedback::latest()->get(); 
        
        return view('Admin.homeadmin', compact('products', 'feedbacks'));
    }

    // ==========================================
    // BAGIAN 2: FUNGSI UNTUK HALAMAN KATALOG
    // ==========================================

    // Tampilan Katalog Publik (Dengan Filter Kategori & Visibilitas)
    public function produkPublic(Request $request) {
        // Hanya ambil produk yang statusnya 1 (Publik)
        $query = Product::where('status', 1);
        
        // Cek jika user menekan filter kategori
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        $products = $query->orderBy('created_at', 'desc')->get();
        return view('produk', compact('products'));
    }

    // Tampilan Katalog Admin (Semua Produk & Filter Kategori)
    public function produkAdmin(Request $request) {
        $query = Product::query();
        
        // Cek jika admin menekan filter kategori
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        $products = $query->orderBy('created_at', 'desc')->get();
        return view('Admin.produkadmin', compact('products'));
    }

    // ==========================================
    // BAGIAN 3: FUNGSI UNTUK DETAIL PRODUK
    // ==========================================

    // Menampilkan halaman detail publik
    public function showPublic($id) {
        $produk = Product::findOrFail($id);
        return view('detailProduk', compact('produk')); 
    }

    // Menampilkan halaman detail admin
    public function showAdmin($id) {
        $produk = Product::findOrFail($id);
        return view('Admin.detailprodukadmin', compact('produk')); 
    }

    // ==========================================
    // BAGIAN 4: OPERASI CRUD (SIMPAN, EDIT, HAPUS)
    // ==========================================

    // Menyimpan Produk/Alat Baru dari Modal Admin
   // ==========================================
    // MENYIMPAN ALAT BARU DARI MODAL ADMIN
    // ==========================================
    public function store(Request $request) {
        $data = $request->validate([
            'image'       => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'status'      => 'required', 
            'category'    => 'required|string',
            'brand'       => 'required|string',
            'badge'       => 'nullable|string',
            'name'        => 'required|string',
            'description' => 'required|string',
        ]);

        // 1. Paksa tipe data status menjadi murni Angka (Integer) agar MySQL tidak error
        $data['status'] = (int) $request->status;

        // 2. Simpan foto utama alat baru ke folder 'products'
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        
        // 3. Masukkan data ke database
        Product::create($data);
        
        // 4. Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Alat baru berhasil ditambahkan ke katalog!');
    }

    // Menghapus Produk
    public function destroy($id) {
        $product = Product::findOrFail($id);
        
        // Hapus foto dari storage jika ada
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        
        $product->delete();
        return back()->with('success', 'Produk berhasil dihapus!');
    }

    // Update Produk (Konten Utama, Galeri, Spesifikasi)
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        // 1. JIKA ADMIN MENYIMPAN KONTEN UTAMA & GALERI
        if ($request->update_type == 'main') {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
                'brochure' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120', 
                'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
                'brand' => 'required',
                'name' => 'required',
                'full_description' => 'required',
            ]);

            $data = $request->only(['brand', 'badge', 'name', 'full_description']);

            // Proses Foto Utama
            if ($request->hasFile('image')) {
                if ($product->image && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image);
                }
                $data['image'] = $request->file('image')->store('products', 'public');
            }

            // Proses Brosur
            if ($request->hasFile('brochure')) {
                if ($product->brochure && Storage::disk('public')->exists($product->brochure)) {
                    Storage::disk('public')->delete($product->brochure);
                }
                $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
            }

            // Proses Foto Tambahan / Galeri (Multi-Upload)
            if ($request->hasFile('gallery')) {
                $existingGallery = $product->gallery ?? []; 
                foreach ($request->file('gallery') as $file) {
                    $path = $file->store('gallery', 'public');
                    $existingGallery[] = $path; 
                }
                $data['gallery'] = $existingGallery;
            }

            // Proses Key Advantages
            if ($request->has('adv_titles')) {
                $advs = [];
                foreach ($request->adv_titles as $index => $title) {
                    if (!empty($title)) {
                        $advs[] = [
                            'icon' => $request->adv_icons[$index] ?? 'fa-check',
                            'title' => $title,
                            'desc' => $request->adv_descs[$index] ?? ''
                        ];
                    }
                }
                $data['advantages'] = $advs;
            } else {
                $data['advantages'] = null; 
            }

            $product->update($data);
        }

        // 2. JIKA ADMIN MENYIMPAN TABEL SPESIFIKASI
        if ($request->update_type == 'specs') {
            $specs = [];
            if ($request->has('spec_labels') && $request->has('spec_values')) {
                foreach ($request->spec_labels as $index => $label) {
                    if (!empty($label) && !empty($request->spec_values[$index])) {
                        $specs[] = [
                            'label' => $label,
                            'value' => $request->spec_values[$index]
                        ];
                    }
                }
            }
            $product->update(['specifications' => $specs]);
        }

        return back()->with('success', 'Data produk berhasil diperbarui!');
    }

    // ==========================================
    // MENGUBAH STATUS PUBLIK <-> DRAFT
    // ==========================================
    public function toggleStatus($id) {
        $product = Product::findOrFail($id);
        
        // Membalikkan status menggunakan angka pasti: 
        // Jika saat ini 1, ubah jadi 0. Jika selain 1, ubah jadi 1.
        $product->status = $product->status == 1 ? 0 : 1; 
        
        $product->save();

        $statusText = $product->status == 1 ? 'ditayangkan (Publik)' : 'disembunyikan (Draft)';
        return back()->with('success', "Status produk berhasil $statusText!");
    }
}