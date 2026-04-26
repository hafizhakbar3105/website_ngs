<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Insight | Nusa Geospatial Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .admin-input { background-color: #F8FAFC; border: 1px solid #E2E8F0; transition: all 0.2s ease; }
        .admin-input:focus { background-color: #FFFFFF; border-color: #043978; outline: none; box-shadow: 0 0 0 4px rgba(4, 57, 120, 0.08); }
        .photo-item { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900 pt-10">

    @include('nav')

    <main class="max-w-7xl mx-auto px-6 py-12 pt-32">
        
        {{-- Notifikasi Sukses --}}
        @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2500,
                customClass: { popup: 'rounded-[2rem]' }
            });
        </script>
        @endif

        @if(isset($article))
            {{-- ==========================================
                 MODE 1: FORM EDIT
                 ========================================== --}}
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
                <div class="space-y-1">
                    <a href="{{ route('admin.article.index') }}" class="text-[10px] font-black uppercase text-slate-400 hover:text-red-500 transition-colors">
                        <i class="fa-solid fa-arrow-left"></i> Batal & Kembali
                    </a>
                    <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Edit <span class="text-[#043978]">Insight Detail</span></h2>
                </div>
                <button type="submit" form="editForm" class="bg-[#043978] text-white px-8 py-4 rounded-2xl font-black text-[11px] uppercase tracking-widest shadow-xl hover:bg-slate-900 transition-all flex items-center gap-3">
                    <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
                </button>
            </div>

            <form id="editForm" action="{{ route('admin.article.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="grid lg:grid-cols-12 gap-10">
                @csrf
                @method('PUT')

                {{-- KOLOM KIRI: KONTEN --}}
                <div class="lg:col-span-7 space-y-8">
                    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-200 shadow-sm space-y-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Judul Artikel</label>
                            <input type="text" name="title" value="{{ $article->title }}" required class="w-full p-4 admin-input rounded-2xl text-sm font-bold">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Konten / Narasi</label>
                            <textarea name="content" rows="15" required class="w-full p-6 admin-input rounded-[2rem] text-sm font-medium resize-none leading-relaxed">{{ $article->content }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- KOLOM KANAN: MEDIA --}}
                <div class="lg:col-span-5 space-y-8">
                    {{-- Thumbnail Manager --}}
                    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-200 shadow-sm">
                        <h3 class="text-[10px] font-black uppercase text-slate-400 mb-6 flex items-center gap-2">
                            <i class="fa-solid fa-image"></i> Main Thumbnail
                        </h3>
                        <div class="aspect-video rounded-3xl overflow-hidden mb-4 border border-slate-100 bg-slate-50 relative group">
                            <img id="thumbPreview" src="{{ asset('storage/'.$article->thumbnail) }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <label for="thumbInput" class="cursor-pointer bg-white text-slate-900 px-6 py-2 rounded-xl font-bold text-[10px] uppercase shadow-lg">Ganti Foto</label>
                            </div>
                        </div>
                        <input type="file" name="thumbnail" id="thumbInput" class="hidden" onchange="previewImage(event, 'thumbPreview')">
                    </div>

                    {{-- Gallery Manager --}}
                    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-200 shadow-sm">
                        <h3 class="text-[10px] font-black uppercase text-slate-400 mb-6 flex items-center gap-2">
                            <i class="fa-solid fa-images"></i> Field Gallery
                        </h3>
                        
                        <div id="galleryPreviewContainer" class="grid grid-cols-3 gap-3 mb-6">
                            {{-- Foto Lama --}}
                            @if($article->gallery)
                                @foreach($article->gallery as $img)
                                <div class="photo-item aspect-square rounded-xl overflow-hidden border border-slate-100 relative group shadow-sm">
                                    <img src="{{ asset('storage/'.$img) }}" class="w-full h-full object-cover">
                                    <button type="button" onclick="markForDelete(this, '{{ $img }}')" 
                                        class="absolute inset-0 bg-red-600/80 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center text-white gap-1">
                                        <i class="fa-solid fa-trash-can text-sm"></i>
                                        <span class="text-[8px] font-black uppercase">Hapus</span>
                                    </button>
                                </div>
                                @endforeach
                            @endif
                            
                            {{-- Tombol Tambah --}}
                            <label for="galleryInput" class="aspect-square rounded-xl border-2 border-dashed border-slate-200 flex flex-col items-center justify-center text-slate-300 hover:text-[#043978] hover:border-[#043978] cursor-pointer transition-all bg-slate-50">
                                <i class="fa-solid fa-plus text-xl mb-1"></i>
                                <span class="text-[8px] font-black uppercase">Add Photo</span>
                            </label>
                        </div>

                        <div id="deletePhotosContainer"></div>
                        <input type="file" name="gallery[]" id="galleryInput" class="hidden" multiple onchange="previewGallery(event)">
                        
                        <div class="p-4 bg-blue-50 rounded-2xl flex items-center gap-3 border border-blue-100 mt-4">
                            <input type="checkbox" name="is_highlight" id="highCheck" {{ $article->is_highlight ? 'checked' : '' }} class="w-5 h-5 rounded text-[#043978]">
                            <label for="highCheck" class="text-[10px] font-black uppercase text-[#043978] cursor-pointer">Highlight Beranda</label>
                        </div>
                    </div>
                </div>
            </form>

        @else
            {{-- ==========================================
                 MODE 2: DAFTAR ARTIKEL (INDEX)
                 ========================================== --}}
            <div class="bg-[#043978] p-10 rounded-[3rem] text-white flex flex-col md:flex-row justify-between items-center mb-10 shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
                <div class="relative z-10">
                    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Insight Manager</h1>
                    <p class="text-blue-200 font-medium">Kelola publikasi artikel dan dokumentasi lapangan.</p>
                </div>
                <button onclick="openArticleModal()" class="relative z-10 mt-6 md:mt-0 bg-[#E7D532] text-[#043978] px-8 py-4 rounded-2xl font-black uppercase text-xs tracking-widest hover:bg-white transition-all">
                    Tulis Artikel Baru
                </button>
            </div>

            <div class="grid grid-cols-1 gap-4">
                @foreach($articles as $art)
                <div class="group bg-white p-5 rounded-[2.5rem] border border-slate-200 flex flex-col md:flex-row items-center gap-6 hover:border-[#043978] transition-all shadow-sm">
                    <img src="{{ asset('storage/'.$art->thumbnail) }}" class="w-full md:w-32 h-24 object-cover rounded-3xl shadow-md">
                    <div class="flex-grow text-center md:text-left">
                        <div class="flex flex-wrap justify-center md:justify-start gap-2 mb-2">
                            @if($art->is_highlight)
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-600 text-[8px] font-black uppercase tracking-widest rounded-md border border-blue-200">Highlight</span>
                            @endif
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ $art->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="font-black text-slate-800 uppercase tracking-tight group-hover:text-[#043978] transition-colors leading-tight">{{ $art->title }}</h3>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('admin.article.edit', $art->id) }}" class="w-12 h-12 bg-[#043978] text-white rounded-2xl flex items-center justify-center hover:bg-slate-900 transition-all shadow-sm">
                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                        </a>
                        <form action="{{ route('admin.article.destroy', $art->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus artikel ini?')" class="w-12 h-12 bg-white text-red-600 border border-slate-200 rounded-2xl flex items-center justify-center hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

    </main>

    @include('footer')

    <script>
        // 1. Preview Thumbnail Utama
        function previewImage(event, targetId) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById(targetId);
                output.src = reader.result;
            }
            if(event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        }

        // 2. Preview Banyak Gambar Galeri Baru
        function previewGallery(event) {
            const container = document.getElementById('galleryPreviewContainer');
            const oldPreviews = container.querySelectorAll('.new-preview');
            oldPreviews.forEach(el => el.remove());

            if (event.target.files) {
                Array.from(event.target.files).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = "new-preview aspect-square rounded-xl overflow-hidden border-2 border-blue-400 relative group shadow-md";
                        div.innerHTML = `
                            <img src="${e.target.result}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-blue-600/20 flex items-center justify-center">
                                <span class="text-[7px] font-black text-white uppercase bg-blue-600 px-1.5 py-0.5 rounded">New</span>
                            </div>
                        `;
                        container.insertBefore(div, container.lastElementChild);
                    }
                    reader.readAsDataURL(file);
                });
            }
        }

        // 3. Logika Tandai Hapus Foto Lama
        function markForDelete(btn, path) {
            Swal.fire({
                title: 'Hapus foto ini?',
                text: "Foto akan dihapus permanen setelah Anda menyimpan perubahan.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                customClass: { popup: 'rounded-[2rem]' }
            }).then((result) => {
                if (result.isConfirmed) {
                    const container = document.getElementById('deletePhotosContainer');
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'remove_photos[]';
                    input.value = path;
                    container.appendChild(input);

                    const photoItem = btn.closest('.photo-item');
                    photoItem.style.transform = 'scale(0)';
                    photoItem.style.opacity = '0';
                    setTimeout(() => photoItem.remove(), 300);
                }
            });
        }
    </script>

</body>
</html>