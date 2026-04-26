<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {

    public function showPublic($slug) {
        $article = Article::where('slug', $slug)->firstOrFail();
        // Ambil artikel lain untuk rekomendasi di bawah/samping
        $otherArticles = Article::where('id', '!=', $article->id)->latest()->take(3)->get();
        return view('detailartikel', compact('article', 'otherArticles'));
    }

    public function indexAdmin() {
        $articles = Article::latest()->get();
        return view('Admin.insightadmin', compact('articles'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|image|max:2048',
            'content' => 'required',
            'gallery.*' => 'image|max:2048'
        ]);

        $thumbPath = $request->file('thumbnail')->store('articles/thumbs', 'public');
        
        $galleryPaths = [];
        if($request->hasFile('gallery')) {
            foreach($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('articles/gallery', 'public');
            }
        }

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => $thumbPath,
            'content' => $request->content,
            'gallery' => $galleryPaths,
            'is_highlight' => $request->has('is_highlight')
        ]);

        return back()->with('success', 'Konten berhasil diterbitkan!');
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);
        Storage::disk('public')->delete($article->thumbnail);
        if($article->gallery) {
            foreach($article->gallery as $img) { Storage::disk('public')->delete($img); }
        }
        $article->delete();
        return back()->with('success', 'Konten berhasil dihapus!');
    }

   public function edit($id) {
    $article = Article::findOrFail($id);
    
    // Ubah 'Admin.edit_insight' menjadi 'Admin.insightadmin'
    return view('Admin.insightadmin', compact('article'));
}

public function update(Request $request, $id) {
    $article = Article::findOrFail($id);
    
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'thumbnail' => 'nullable|image|max:2048',
        'gallery.*' => 'nullable|image|max:2048'
    ]);

    // Ambil galeri yang lama
    $currentGallery = $article->gallery ?? [];

    // LOGIKA HAPUS FOTO SPESIFIK (Jika ada request hapus)
    if ($request->has('remove_photos')) {
        foreach ($request->remove_photos as $photoPath) {
            // Hapus dari file fisik storage
            \Illuminate\Support\Facades\Storage::disk('public')->delete($photoPath);
            // Hapus dari array
            $currentGallery = array_diff($currentGallery, [$photoPath]);
        }
        // Reset index array agar tetap berurutan
        $currentGallery = array_values($currentGallery);
    }

    $data = [
        'title' => $request->title,
        'slug' => \Illuminate\Support\Str::slug($request->title),
        'content' => $request->content,
        'is_highlight' => $request->has('is_highlight')
    ];

    // Ganti Thumbnail
    if ($request->hasFile('thumbnail')) {
        if($article->thumbnail) \Illuminate\Support\Facades\Storage::disk('public')->delete($article->thumbnail);
        $data['thumbnail'] = $request->file('thumbnail')->store('articles/thumbs', 'public');
    }

    // Tambah Foto Baru ke Galeri
    if ($request->hasFile('gallery')) {
        foreach ($request->file('gallery') as $file) {
            $currentGallery[] = $file->store('articles/gallery', 'public');
        }
    }
    
    $data['gallery'] = $currentGallery;

    $article->update($data);

    return redirect()->route('admin.article.index')->with('success', 'Perubahan berhasil disimpan!');
}
}
