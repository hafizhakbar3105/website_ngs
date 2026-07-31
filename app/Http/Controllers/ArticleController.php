<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {

    public function showPublic($slug) {
        $article = Article::where('slug', $slug)->firstOrFail();
        $otherArticles = Article::where('id', '!=', $article->id)->latest()->take(3)->get();
        return view('detailartikel', compact('article', 'otherArticles'));
    }

    public function indexAdmin() {
        $articles = Article::latest()->get();
        return view('Admin.insightadmin', compact('articles'));
    }

    // --- FITUR TAMBAH ARTIKEL BARU ---
    public function store(Request $request) {
        $request->validate([
            'title'     => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:102400', // Maksimal 100 MB
            'content'   => 'required',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:102400'  // Maksimal 100 MB
        ]);

        $thumbPath = $request->file('thumbnail')->store('articles/thumbs', 'public');
        
        $galleryPaths = [];
        if($request->hasFile('gallery')) {
            foreach($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('articles/gallery', 'public');
            }
        }

        Article::create([
            'title'        => $request->title,
            'slug'         => Str::slug($request->title),
            'thumbnail'    => $thumbPath,
            'content'      => $request->content,
            'gallery'      => $galleryPaths,
            'is_highlight' => $request->has('is_highlight')
        ]);

        return back()->with('success', 'Konten berhasil diterbitkan!');
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);
        if($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        if($article->gallery && is_array($article->gallery)) {
            foreach($article->gallery as $img) { 
                Storage::disk('public')->delete($img); 
            }
        }
        $article->delete();
        return back()->with('success', 'Konten berhasil dihapus!');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('Admin.insightadmin', compact('article'));
    }

    // --- FITUR UPDATE ARTIKEL ---
    public function update(Request $request, $id) {
        $article = Article::findOrFail($id);
        
        // PERBAIKAN: 'thumbnail' dibuat NULLABLE agar tidak wajib diunggah ulang saat edit
        $request->validate([
            'title'     => 'required|string|max:255',
            'content'   => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:102400', // Nullable
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:102400'
        ]);

        $currentGallery = $article->gallery ?? [];

        if ($request->has('remove_photos')) {
            foreach ($request->remove_photos as $photoPath) {
                Storage::disk('public')->delete($photoPath);
                $currentGallery = array_diff($currentGallery, [$photoPath]);
            }
            $currentGallery = array_values($currentGallery);
        }

        $data = [
            'title'        => $request->title,
            'slug'         => Str::slug($request->title),
            'content'      => $request->content,
            'is_highlight' => $request->has('is_highlight')
        ];

        if ($request->hasFile('thumbnail')) {
            if($article->thumbnail) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('articles/thumbs', 'public');
        }

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