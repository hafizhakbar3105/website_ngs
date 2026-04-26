<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // ==========================================
    // BAGIAN 1: FUNGSI UNTUK HALAMAN UTAMA (HOME/DASHBOARD)
    // ==========================================

    public function homePublic() {
    // Ambil Produk Unggulan & Ulasan
    $produkUnggulan = \App\Models\Product::where('is_featured', true)->take(3)->get();
    $ulasan = \App\Models\Feedback::where('is_featured', true)->latest()->take(5)->get();
    
    // --- TAMBAHKAN LOGIKA ARTIKEL DI SINI ---
    
    // 1. Ambil 1 artikel yang di-set sebagai highlight (paling baru)
    // Jika tidak ada yang di-highlight, ambil artikel paling baru saja
    $articleHighlight = \App\Models\Article::where('is_highlight', true)->latest()->first() 
                        ?? \App\Models\Article::latest()->first();

    // 2. Ambil 3 artikel lainnya untuk daftar di samping (kecuali yang sudah jadi highlight)
    $articleList = \App\Models\Article::where('id', '!=', $articleHighlight ? $articleHighlight->id : 0)
                    ->latest()
                    ->take(3)
                    ->get();
    
    return view('home', compact('produkUnggulan', 'ulasan', 'articleHighlight', 'articleList')); 
}

   public function index() {
    $products = \App\Models\Product::where('is_featured', 1)->latest()->get();
    $feedbacks = \App\Models\Feedback::latest()->get(); 
    $articles = \App\Models\Article::latest()->get(); // TAMBAHKAN INI
    $totalSemuaProduk = \App\Models\Product::count();
    
    return view('Admin.homeadmin', compact('products', 'feedbacks', 'totalSemuaProduk', 'articles'));
}

    // FUNGSI KHUSUS UNTUK MENYIMPAN PRODUK DARI DASHBOARD ADMIN
    public function storeUnggulan(Request $request) {
        $data = $request->validate([
            'image'       => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'brand'       => 'required|string',
            'name'        => 'required|string',
            'description' => 'required|string',
            'badge'       => 'nullable|string',
        ]);

        $data['is_featured'] = 1; // Otomatis disetting sebagai produk unggulan
        $data['status'] = 1;      // Otomatis ditayangkan

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        
        Product::create($data);
        
        return back()->with('success', 'Produk Utama berhasil ditambahkan ke Dashboard!');
    }


    // ==========================================
    // BAGIAN 2: FUNGSI UNTUK HALAMAN KATALOG
    // ==========================================

    public function produkPublic(Request $request) {
    // 1. AMBIL SEMUA KATEGORI DARI DATABASE (Penting!)
    $categories = \App\Models\Category::all();

    // 2. Query produk yang statusnya PUBLIK
    $query = Product::where('status', 1);
    
    // 3. Filter berdasarkan kategori jika ada klik di sidebar
    if ($request->has('category') && $request->category != '') {
        $query->where('category', $request->category);
    }
    
    $products = $query->orderBy('created_at', 'desc')->get();

    // 4. Kirim variabel 'categories' ke view
    return view('produk', compact('products', 'categories'));
}

    public function produkAdmin(Request $request) {
    // 1. Ambil SEMUA kategori dari database
    $categories = \App\Models\Category::all();

    // 2. Query untuk produk
    $query = \App\Models\Product::query();
    
    // Filter berdasarkan kategori jika ada klik di sidebar
    if ($request->has('category') && $request->category != '') {
        $query->where('category', $request->category);
    }
    
    $products = $query->latest()->get();

    // 3. Kirim keduanya ke view
    return view('Admin.produkadmin', compact('products', 'categories'));
}

    // FUNGSI KHUSUS UNTUK MENYIMPAN ALAT DARI KATALOG ADMIN
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

        $data['status'] = (int) $request->status;
        $data['is_featured'] = 0; // Pastikan alat katalog BUKAN produk unggulan

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
    // BAGIAN 4: OPERASI CRUD LAINNYA (HAPUS, EDIT, STATUS)
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

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

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

            if ($request->hasFile('image')) {
                if ($product->image && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image);
                }
                $data['image'] = $request->file('image')->store('products', 'public');
            }

            if ($request->hasFile('brochure')) {
                if ($product->brochure && Storage::disk('public')->exists($product->brochure)) {
                    Storage::disk('public')->delete($product->brochure);
                }
                $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
            }

            if ($request->hasFile('gallery')) {
                $existingGallery = $product->gallery ?? []; 
                foreach ($request->file('gallery') as $file) {
                    $path = $file->store('gallery', 'public');
                    $existingGallery[] = $path; 
                }
                $data['gallery'] = $existingGallery;
            }

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

    public function storeCategory(Request $request) {
    $request->validate(['name' => 'required|unique:categories,name']);
    
    \App\Models\Category::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name)
    ]);

    return back()->with('success', 'Kategori baru berhasil ditambahkan!');
}

// Tambahkan di ProductController.php

public function destroyCategory($id) {
    $category = \App\Models\Category::findOrFail($id);
    $category->delete();

    return back()->with('success', 'Kategori "' . $category->name . '" berhasil dihapus!');
}
}