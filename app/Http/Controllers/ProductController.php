<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // ==========================================
    // BAGIAN 1: FUNGSI UNTUK HALAMAN UTAMA (HOME/DASHBOARD)
    // ==========================================

    public function homePublic() {
        // Ambil Produk Unggulan & Ulasan
        $produkUnggulan = Product::where('is_featured', true)->take(3)->get();
        $ulasan = Feedback::where('is_featured', true)->latest()->take(5)->get();
        
        // 1. Ambil 1 artikel yang di-set sebagai highlight (paling baru)
        $articleHighlight = Article::where('is_highlight', true)->latest()->first() 
                            ?? Article::latest()->first();

        // 2. Ambil 3 artikel lainnya untuk daftar di samping
        $articleList = Article::where('id', '!=', $articleHighlight ? $articleHighlight->id : 0)
                        ->latest()
                        ->take(3)
                        ->get();
        
        return view('home', compact('produkUnggulan', 'ulasan', 'articleHighlight', 'articleList')); 
    }

    public function index(Request $request) {
    $categories = Category::all();

    // Query untuk daftar produk yang tampil di dashboard (Tetap is_featured = 1)
    $productQuery = Product::where('is_featured', 1);

    if ($request->has('category') && $request->category != '') {
        $slug = $request->category;
        $productQuery->whereHas('category', function($q) use ($slug) {
            $q->where('slug', $slug);
        });
    }

    $products = $productQuery->latest()->get();
    $feedbacks = Feedback::latest()->get(); 
    $articles = Article::latest()->get();
    
    // --- PERBAIKAN DI SINI ---
    // Jangan pakai where('is_featured', 1), ambil total dari SEMUA baris produk
    $totalSemuaProduk = Product::count(); 
    
    return view('Admin.homeadmin', compact(
        'products', 
        'feedbacks', 
        'totalSemuaProduk', 
        'articles', 
        'categories'
    ));
}

    // FUNGSI UNTUK MENYIMPAN PRODUK DARI DASHBOARD ADMIN
    public function storeUnggulan(Request $request) {
        $data = $request->validate([
            'image'       => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'brand'       => 'required|string',
            'name'        => 'required|string',
            'description' => 'required|string',
            'badge'       => 'nullable|string',
            'category_id' => 'required|exists:categories,id', 
        ]);

        $data['is_featured'] = 1; 
        $data['status']      = 1; 

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        
        Product::create($data); 
        return back()->with('success', 'Produk berhasil ditambahkan dan masuk kategori!');
    }


    // ==========================================
    // BAGIAN 2: FUNGSI UNTUK HALAMAN KATALOG
    // ==========================================

   public function produkPublic(Request $request) {
    $categories = Category::all();
    
    // HAPUS ->where('is_featured', 0) agar produk unggulan juga muncul di sini
    $query = Product::where('status', 1); 
    
    if ($request->has('category') && $request->category != '') {
        $slug = $request->category;
        $query->whereHas('category', function($q) use ($slug) {
            $q->where('slug', $slug);
        });
    }
    
    $products = $query->orderBy('created_at', 'desc')->get();
    return view('produk', compact('products', 'categories'));
}

public function produkAdmin(Request $request) {
    $categories = Category::all();

    // HAPUS ->where('is_featured', 0) agar semua alat (termasuk unggulan) muncul di manajemen katalog
    $query = Product::query(); 
    
    if ($request->has('category') && $request->category != '') {
        $categorySlug = $request->category;
        $query->whereHas('category', function($q) use ($categorySlug) {
            $q->where('slug', $categorySlug);
        });
    }
    
    $products = $query->latest()->get();
    return view('Admin.produkadmin', compact('products', 'categories'));
}

    // FUNGSI UNTUK MENYIMPAN ALAT DARI KATALOG ADMIN
   public function store(Request $request) {
    $data = $request->validate([
        'image'       => 'required|image|mimes:png,jpg,jpeg|max:2048',
        'status'      => 'required', 
        'category_id' => 'required|exists:categories,id',
        'brand'       => 'required|string',
        'badge'       => 'nullable|string',
        'name'        => 'required|string',
        'description' => 'required|string',
    ]);

    $data['status'] = (int) $request->status;
    
    // INI KUNCINYA: Harus 0 agar muncul di Katalog (Public & Admin)
    $data['is_featured'] = 0; 

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('products', 'public');
    }
    
    Product::create($data);
    return back()->with('success', 'Alat baru berhasil ditambahkan ke katalog!');
}


    // ==========================================
    // BAGIAN 3: FUNGSI UNTUK DETAIL PRODUK
    // ==========================================

    public function showPublic($id) {
        $produk = Product::findOrFail($id);
        return view('detailProduk', compact('produk')); 
    }

    public function showAdmin($id) {
        $produk = Product::findOrFail($id);
        return view('Admin.detailprodukadmin', compact('produk')); 
    }


    // ==========================================
    // BAGIAN 4: OPERASI CRUD LAINNYA
    // ==========================================

    public function destroy($id) {
        $product = Product::findOrFail($id);
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return back()->with('success', 'Produk berhasil dihapus!');
    }

    public function toggleStatus($id) {
        $product = Product::findOrFail($id);
        $product->status = $product->status == 1 ? 0 : 1; 
        $product->save();

        $statusText = $product->status == 1 ? 'ditayangkan (Publik)' : 'disembunyikan (Draft)';
        return back()->with('success', "Status produk berhasil $statusText!");
    }

    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // LOGIKA 1: Update Konten Utama (Dari Halaman Detail)
    if ($request->update_type == 'main') {
        $request->validate([
            'image'            => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10248', 
            'brand'            => 'required|string',
            'name'             => 'required|string',
            'full_description' => 'nullable|string', // Sesuai input di blade detail
            'description'      => 'nullable|string', // Sesuai input di dashboard
            'brochure'         => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
            'gallery.*'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ambil data teks
        $data = $request->only(['brand', 'badge', 'name', 'full_description', 'description']);

        // A. Update Foto Utama
        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // B. Update Brosur
        if ($request->hasFile('brochure')) {
            if ($product->brochure && Storage::disk('public')->exists($product->brochure)) {
                Storage::disk('public')->delete($product->brochure);
            }
            $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
        }

        // C. Update Galeri (Menambah foto baru ke yang sudah ada)
        if ($request->hasFile('gallery')) {
            $existingGallery = $product->gallery ?? []; 
            foreach ($request->file('gallery') as $file) {
                $existingGallery[] = $file->store('gallery', 'public'); 
            }
            $data['gallery'] = $existingGallery;
        }

        // D. Update Advantages (Keunggulan)
        if ($request->has('adv_titles')) {
            $advs = [];
            foreach ($request->adv_titles as $index => $title) {
                if (!empty($title)) {
                    $advs[] = [
                        'icon'  => $request->adv_icons[$index] ?? 'fa-check',
                        'title' => $title,
                        'desc'  => $request->adv_descs[$index] ?? ''
                    ];
                }
            }
            $data['advantages'] = $advs;
        }

        $product->update($data);
    }

    // LOGIKA 2: Update Spesifikasi
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

    return back()->with('success', 'Konten berhasil diperbarui!');
}

    public function storeCategory(Request $request) {
        $request->validate(['name' => 'required|unique:categories,name']);
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return back()->with('success', 'Kategori baru berhasil ditambahkan!');
    }

    public function destroyCategory($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Kategori "' . $category->name . '" berhasil dihapus!');
    }
}