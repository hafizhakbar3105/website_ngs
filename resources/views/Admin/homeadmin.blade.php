<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Nusa Geospatial Solution</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* CSS Modal Admin */
        .admin-modal-overlay { background-color: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); transition: opacity 0.3s ease; }
        .admin-modal-box { transition: transform 0.3s ease, opacity 0.3s ease; }
        .admin-modal-hidden .admin-modal-overlay { opacity: 0; pointer-events: none; }
        .admin-modal-hidden .admin-modal-box { transform: scale(0.95); opacity: 0; pointer-events: none; }
        
        /* CSS Input Admin */
        .admin-input { background-color: #F8FAFC; border: 1px solid #E2E8F0; transition: all 0.2s ease; }
        .admin-input:focus { background-color: #FFFFFF; border-color: #043978; outline: none; box-shadow: 0 0 0 4px rgba(4, 57, 120, 0.08); }
        .custom-scrollbar::-webkit-scrollbar { display: none; }
        .custom-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900 overflow-x-hidden pt-10">

    @include('nav')

    <section class="pt-32 pb-12 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-[#043978] rounded-[2.5rem] p-10 md:p-16 text-white relative overflow-hidden shadow-2xl shadow-blue-900/20">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -mr-20 -mt-20"></div>
                <div class="absolute bottom-0 left-10 w-40 h-40 bg-[#E7D532]/10 rounded-full blur-2xl"></div>
                <i class="fa-solid fa-server absolute -bottom-10 -right-10 text-[15rem] text-white/5 -rotate-12"></i>

                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="space-y-4 text-center md:text-left">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 text-[#E7D532] text-[10px] font-black uppercase tracking-widest">
                            <span class="w-1.5 h-1.5 bg-[#E7D532] rounded-full animate-pulse"></span> Administrator Portal
                        </div>
                        <h1 class="text-3xl md:text-5xl font-black uppercase tracking-tight">Selamat Datang, Admin</h1>
                        <p class="text-blue-200 font-medium max-w-xl">Anda memiliki akses penuh untuk mengelola konten halaman beranda. Pastikan data yang dimasukkan akurat dan sesuai dengan standar perusahaan.</p>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="bg-white/10 backdrop-blur-sm border border-white/10 p-6 rounded-3xl text-center min-w-[120px]">
                            <p class="text-3xl font-black text-[#E7D532]">{{ $products->count() }}</p>
                            <p class="text-[9px] font-bold uppercase tracking-widest text-blue-200 mt-1">Total Produk</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm border border-white/10 p-6 rounded-3xl text-center min-w-[120px]">
                            <p class="text-3xl font-black text-[#E7D532]">{{ $feedbacks->where('is_featured', true)->count() }}</p>
                            <p class="text-[9px] font-bold uppercase tracking-widest text-blue-200 mt-1">Ulasan Aktif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-slate-50 px-6 relative">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6 border-b border-slate-200 pb-8">
                <div class="space-y-1 w-full text-center md:text-left">
                    <h2 class="text-3xl font-black text-slate-900 tracking-tighter uppercase">Kelola <span class="text-[#043978] italic">Produk Utama</span></h2>
                    <p class="text-slate-500 font-medium text-sm">Menampilkan 3 produk unggulan di halaman beranda publik.</p>
                </div>
                
                <button onclick="openProductModal('add')" class="w-full md:w-auto bg-[#043978] text-white px-8 py-4 rounded-xl shadow-lg hover:bg-slate-900 transition-colors flex items-center justify-center gap-3 font-black text-[11px] uppercase tracking-widest shrink-0">
                    <i class="fa-solid fa-plus"></i> Tambah Alat Baru
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach($products as $item)
    <div class="group bg-white rounded-[2.5rem] p-6 border-2 border-slate-200 hover:border-[#043978] transition duration-300 flex flex-col h-full shadow-sm relative">
        
        <div class="absolute top-4 right-4 z-30 flex gap-2">
            <button type="button" onclick="openProductModal('edit', {{ $item }})" class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md hover:bg-slate-900 transition-colors">
                <i class="fa-solid fa-pen text-xs"></i>
            </button>
            
            <form action="{{ route('product.destroy', $item->id) }}" method="POST" class="inline" id="delete-form-{{ $item->id }}">
    @csrf
    @method('DELETE')
    <button type="button" onclick="confirmDelete('{{ $item->id }}', '{{ $item->name }}')" class="w-10 h-10 bg-white text-red-600 border border-slate-200 rounded-xl flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
        <i class="fa-solid fa-trash text-xs"></i>
    </button>
</form>
        </div>

        <div class="aspect-square bg-slate-50 rounded-[2rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100">
            @if($item->badge)
            <div class="absolute top-4 left-4 bg-slate-900 text-[#E7D532] text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest z-10">{{ $item->badge }}</div>
            @endif
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-48 object-contain">
        </div>

        <div class="px-2 flex flex-col flex-grow">
            <p class="text-[#043978] text-[10px] font-black uppercase tracking-[0.3em] mb-2">{{ $item->brand }}</p>
            <h3 class="text-xl font-black text-slate-900 mb-2 uppercase tracking-tight">{{ $item->name }}</h3>
            <p class="text-xs text-slate-500 leading-relaxed mb-6 flex-grow">{{ $item->description }}</p>
            <a href="{{ route('admin.produk.detail', $item->id) }}" class="w-full bg-slate-100 text-slate-900 hover:bg-[#043978] hover:text-white py-3.5 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-2 transition-colors duration-300 mt-auto border border-slate-200 hover:border-[#043978]">
    <i class="fa-solid fa-circle-info"></i> Detail Produk
</a>
        </div>
    </div>
    @endforeach
</div>
        </div>
    </section>

    <section class="py-24 bg-white relative border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6 border-b border-slate-200 pb-8">
                <div class="space-y-1 w-full text-center md:text-left">
                    <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Kelola <span class="italic text-[#043978]">Ulasan Pelanggan</span></h2>
                    <p class="text-slate-500 font-medium text-sm">Pilih testimoni terbaik untuk ditampilkan di halaman publik.</p>
                </div>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($feedbacks as $item)
    <div class="bg-slate-50 p-8 rounded-[2.5rem] border {{ $item->is_featured ? 'border-[#043978] shadow-lg' : 'border-slate-200' }} relative group transition-all">
        
        <div class="absolute top-4 right-4 z-30 flex gap-2">
            <form action="{{ route('feedback.toggle', $item->id) }}" method="POST">
                @csrf
                <button type="submit" title="{{ $item->is_featured ? 'Sembunyikan dari Publik' : 'Tampilkan ke Publik' }}" class="w-10 h-10 {{ $item->is_featured ? 'bg-green-500 text-white' : 'bg-slate-200 text-slate-500' }} rounded-xl flex items-center justify-center shadow-md transition-colors">
                    <i class="fa-solid {{ $item->is_featured ? 'fa-eye' : 'fa-eye-slash' }} text-xs"></i>
                </button>
            </form>
            
            <form action="{{ route('feedback.destroy', $item->id) }}" id="delete-feedback-{{ $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDeleteFeedback('{{ $item->id }}', '{{ $item->name }}')" class="w-10 h-10 bg-white text-red-600 border border-slate-200 rounded-xl flex items-center justify-center shadow-md hover:bg-red-50 transition-colors">
                    <i class="fa-solid fa-trash text-xs"></i>
                </button>
            </form>
        </div>

        <div class="flex gap-1 text-xs mb-6">
            @for($i = 1; $i <= 5; $i++)
                <i class="fa-solid fa-star {{ $i <= $item->rating ? 'text-[#E7D532]' : 'text-slate-300' }}"></i>
            @endfor
        </div>
        <p class="text-slate-700 font-medium leading-relaxed italic text-sm mb-8">"{{ Str::limit($item->message, 120) }}"</p>
        
        <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
            <div class="w-12 h-12 rounded-xl bg-[#043978] text-white flex items-center justify-center font-black text-lg">
                {{ strtoupper(substr($item->name, 0, 2)) }}
            </div>
            <div>
                <h4 class="text-sm font-black text-slate-900 uppercase tracking-tight">{{ $item->name }}</h4>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">{{ $item->company ?? '-' }}</p>
            </div>
        </div>
        
        @if($item->is_featured)
            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#043978] text-white text-[8px] font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-sm">
                Tampil di Publik
            </div>
        @endif
    </div>
    @endforeach
</div>
        </div>
    </section>

    @include('footer')


    <div id="productModal" class="hidden fixed inset-0 z-[9999] bg-slate-900/80 backdrop-blur-sm p-4 md:p-6 items-center justify-center">
        <div class="relative bg-white w-full max-w-4xl rounded-[2.5rem] shadow-2xl flex flex-col max-h-[90vh] overflow-hidden border border-slate-200 animate-in zoom-in-95 duration-300">
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-200 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md"><i class="fa-solid fa-pen-to-square"></i></div>
                    <div>
                        <h3 id="modalTitle" class="text-xl font-black text-slate-900 uppercase tracking-tight">Formulir Instrumen</h3>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Lengkapi data teknis perangkat</p>
                    </div>
                </div>
                <button onclick="closeProductModal()" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shadow-sm">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <div class="p-8 overflow-y-auto custom-scrollbar bg-white">
                <form id="productForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="methodContainer"></div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                        <div class="md:col-span-5 space-y-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Foto Perangkat (PNG/JPG)</label>
                                <div class="aspect-square rounded-3xl border-2 border-dashed border-slate-300 bg-slate-50 relative group flex items-center justify-center overflow-hidden">
                                    <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" id="imageInput" onchange="previewImg(event)">
                                    <div id="uploadPlaceholder" class="text-center flex flex-col items-center z-0">
                                        <i class="fa-solid fa-cloud-arrow-up text-4xl text-slate-300 group-hover:text-[#043978] mb-3 transition-colors"></i>
                                        <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Klik / Drop Foto</p>
                                    </div>
                                    <img id="imagePreview" src="" class="absolute inset-0 w-full h-full object-contain p-4 hidden z-0 bg-white">
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-7 space-y-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Merk / Brand</label>
                                    <input type="text" name="brand" id="brandInput" class="admin-input w-full rounded-xl p-4 text-sm font-bold" required>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Badge (Opsional)</label>
                                    <input type="text" name="badge" id="badgeInput" class="admin-input w-full rounded-xl p-4 text-sm font-bold">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Nama Alat</label>
                                <input type="text" name="name" id="nameInput" class="admin-input w-full rounded-xl p-4 text-sm font-bold" required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase text-[#043978] ml-1">Deskripsi Singkat</label>
                                <textarea name="description" id="descInput" rows="4" class="admin-input w-full rounded-xl p-4 text-sm font-medium resize-none" required></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-slate-200 flex justify-end gap-4">
                        <button type="button" onclick="closeProductModal()" class="px-8 py-3 rounded-xl font-black text-[11px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
                        <button type="submit" class="px-10 py-3 bg-[#043978] text-white rounded-xl font-black text-[11px] uppercase tracking-widest shadow-lg hover:bg-slate-900 transition-colors flex items-center gap-3"><i class="fa-solid fa-floppy-disk"></i> Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openProductModal(action, productData = null) {
            const modal = document.getElementById('productModal');
            const modalTitle = document.getElementById('modalTitle');
            const form = document.getElementById('productForm');
            const methodContainer = document.getElementById('methodContainer');
            const imageInput = document.getElementById('imageInput');
            const preview = document.getElementById('imagePreview');
            const placeholder = document.getElementById('uploadPlaceholder');
            
            modal.classList.remove('hidden'); 
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden'; 
            
            if(action === 'edit') {
                modalTitle.innerHTML = `Edit <span class="text-[#043978]">Instrumen</span>`;
                form.action = `/admin/product/${productData.id}`;
                methodContainer.innerHTML = '<input type="hidden" name="_method" value="PUT">';
                
                document.getElementById('brandInput').value = productData.brand;
                document.getElementById('badgeInput').value = productData.badge || '';
                document.getElementById('nameInput').value = productData.name;
                document.getElementById('descInput').value = productData.description;
                
                preview.src = `/storage/${productData.image}`;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                imageInput.removeAttribute('required');
            } else {
                modalTitle.innerHTML = `Tambah <span class="text-[#043978]">Instrumen</span>`;
                form.action = "{{ route('product.store') }}";
                methodContainer.innerHTML = ''; 
                form.reset();
                
                imageInput.setAttribute('required', 'required');
                preview.classList.add('hidden');
                preview.src = '';
                placeholder.classList.remove('hidden');
            }
        }

        function closeProductModal() {
            const modal = document.getElementById('productModal');
            modal.classList.add('hidden'); 
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto'; 
        }

        function previewImg(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('imagePreview');
                const placeholder = document.getElementById('uploadPlaceholder');
                preview.src = reader.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            if(event.target.files[0]) reader.readAsDataURL(event.target.files[0]);
        }

        function confirmDelete(id, name) {
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        html: `Anda akan menghapus instrumen <br><strong>"${name}"</strong>.<br>Tindakan ini tidak dapat dibatalkan!`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444', // Warna merah khas Tailwind (red-500)
        cancelButtonColor: '#64748b',  // Warna abu-abu Tailwind (slate-500)
        confirmButtonText: '<i class="fa-solid fa-trash mr-2"></i> Ya, Hapus!',
        cancelButtonText: 'Batal',
        background: '#ffffff',
        backdrop: 'rgba(15, 23, 42, 0.8)', // Efek gelap di belakang modal (slate-900)
        customClass: {
            popup: 'rounded-[2rem] shadow-2xl border border-slate-100', // Menyesuaikan dengan gaya border-radius punyamu
            confirmButton: 'rounded-xl font-bold uppercase tracking-wider text-xs px-6 py-3',
            cancelButton: 'rounded-xl font-bold uppercase tracking-wider text-xs px-6 py-3'
        }
    }).then((result) => {
        // Jika user mengklik "Ya, Hapus!"
        if (result.isConfirmed) {
            // Submit form secara otomatis
            document.getElementById('delete-form-' + id).submit();
        }
    });
}

function confirmDeleteFeedback(id, name) {
    Swal.fire({
        title: 'Hapus Ulasan?',
        text: `Ulasan dari "${name}" akan dihapus permanen.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#64748b',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal',
        customClass: { popup: 'rounded-[2rem]' }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-feedback-' + id).submit();
        }
    });
}
    </script>
</body>
</html>