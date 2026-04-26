<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>{{ $produk->name }} Detail | Admin Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]"> 

    @include('nav')
    <br>
    
    <header class="pt-32 pb-12 px-6 max-w-7xl mx-auto relative group">
        <div class="absolute top-20 right-6 z-50">
            <button onclick="openModal('detailModal')" class="bg-[#043978] text-white hover:bg-[#022047] transition-all duration-300 px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest flex items-center gap-2 shadow-lg border border-white/10">
                <i class="fa-solid fa-pen-to-square"></i> Edit Konten Utama
            </button>
        </div>

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-slate-100 pb-10">
            <div class="space-y-2">
                <span class="text-[#043978] font-bold text-xs uppercase tracking-widest">{{ $produk->brand }}</span>
                <h1 class="text-4xl md:text-6xl font-black text-slate-950 tracking-tighter leading-none">{{ $produk->name }}</h1>
            </div>
            <div class="flex gap-3">
                <div class="px-4 py-2 bg-slate-50 rounded-full border border-slate-100 text-[10px] font-bold text-slate-500 uppercase tracking-widest">In Stock</div>
                @if($produk->badge)
                <div class="px-4 py-2 bg-blue-50 rounded-full border border-blue-100 text-[10px] font-bold text-[#043978] uppercase tracking-widest">{{ $produk->badge }}</div>
                @endif
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <div class="lg:col-span-7 space-y-8 relative">
                <div class="bg-[radial-gradient(circle_at_center,#ffffff_0%,#f1f5f9_100%)] aspect-[1.2/1] rounded-[3.5rem] flex items-center justify-center p-16 border border-slate-50 relative overflow-hidden group">
                    <img id="mainProductImage" src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-4/5 h-4/5 object-contain drop-shadow-2xl transition-opacity duration-300 group-hover:scale-105">
                    
                    <div class="absolute bottom-8 right-8 flex gap-3">
                         <button id="btnFullscreen" onclick="openFullscreen('{{ asset('storage/' . $produk->image) }}')" class="w-12 h-12 rounded-2xl bg-white/80 backdrop-blur shadow-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-[#043978] transition-colors"><i class="fa-solid fa-expand"></i></button>
                    </div>
                </div>
                
                @if(isset($produk->gallery) && count($produk->gallery) > 0)
                <div class="flex flex-wrap gap-6 mt-6">
                    <div onclick="changeMainImage('{{ asset('storage/' . $produk->image) }}', this)" class="thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border-2 border-[#043978] p-2 bg-white shadow-sm cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300">
                        <img src="{{ asset('storage/' . $produk->image) }}" class="w-full h-full object-contain">
                    </div>
                    
                    @foreach($produk->gallery as $img)
                    <div onclick="changeMainImage('{{ asset('storage/' . $img) }}', this)" class="thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border border-slate-100 p-2 bg-slate-50 hover:bg-white cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300">
                        <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-contain">
                    </div>
                    @endforeach
                </div>
                @endif
                </div>

            <div class="lg:col-span-5 space-y-12">
                <div class="bg-gradient-to-br from-[#0f172a] to-[#1e293b] shadow-[0_25px_50px_-12px_rgba(15,23,42,0.25)] p-10 rounded-[3rem] text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/20 rounded-full blur-3xl -mr-16 -mt-16"></div>
                    <h3 class="text-xs font-black uppercase tracking-[0.3em] text-blue-400 mb-6">Deskripsi Produk</h3>
                    <p class="text-sm leading-relaxed text-slate-300 font-medium italic">
                        "{{ $produk->full_description ?? 'Deskripsi detail belum diisi.' }}"
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 px-2">Key Advantages</h4>
                    <div class="grid grid-cols-1 gap-4">
                        
                        @if($produk->advantages && count($produk->advantages) > 0)
                            @foreach($produk->advantages as $adv)
                            <div class="flex items-center gap-5 p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                                <div class="w-12 h-12 rounded-2xl bg-[#043978] flex items-center justify-center text-white text-xl"><i class="fa-solid {{ $adv['icon'] }}"></i></div>
                                <div>
                                    <h5 class="text-sm font-black text-slate-900 uppercase">{{ $adv['title'] }}</h5>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">{{ $adv['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-xs italic text-slate-400 pl-2">Belum ada fitur keunggulan ditambahkan.</p>
                        @endif

                        @if($produk->brochure)
                            @php
                                $ekstensi = pathinfo($produk->brochure, PATHINFO_EXTENSION);
                                $namaFileRapi = 'Brosur Teknis ' . $produk->name . '.' . $ekstensi;
                            @endphp
                            <a href="{{ asset('storage/' . $produk->brochure) }}" download="{{ $namaFileRapi }}" target="_blank" class="flex items-center justify-center gap-3 bg-white border border-slate-200 text-slate-900 py-5 rounded-[2rem] font-black uppercase tracking-widest hover:bg-slate-50 shadow-xl shadow-slate-200/50 transition-all">
                                <i class="fa-solid fa-download text-xs"></i> Brosur Teknis
                            </a>
                        @else
                            <button disabled class="w-full flex items-center justify-center gap-3 bg-slate-50 border border-slate-200 text-slate-400 py-5 rounded-[2rem] font-black uppercase tracking-widest cursor-not-allowed opacity-60">
                                <i class="fa-solid fa-file-circle-xmark text-xs"></i> Brosur Belum Tersedia
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-32 space-y-12 relative border-t border-slate-100 pt-16">
            <div class="absolute top-16 right-0 z-50">
                <button onclick="openModal('specModal')" class="bg-[#043978] text-white hover:bg-[#022047] transition-all duration-300 px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest flex items-center gap-2 shadow-lg border border-white/10">
                    <i class="fa-solid fa-list-check"></i> Kelola Spesifikasi Data
                </button>
            </div>

            <div class="flex flex-col gap-4">
                <p class="text-[11px] font-black text-[#043978] uppercase tracking-[0.4em]">Inside Technology</p>
                <h2 class="text-3xl md:text-4xl font-black text-slate-950 tracking-tight">Spesifikasi Teknis</h2>
            </div>
            
            <div class="bg-white rounded-[3.5rem] border border-slate-100 p-8 md:p-12 shadow-sm relative">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-2" id="specContainer">
                    @if($produk->specifications && count($produk->specifications) > 0)
                        @foreach($produk->specifications as $spec)
                        <div class="border-b border-slate-200/50 last:border-0 flex justify-between py-6">
                            <span class="text-[11px] font-black uppercase tracking-widest text-slate-400">{{ $spec['label'] }}</span>
                            <span class="text-sm font-bold text-slate-900">{{ $spec['value'] }}</span>
                        </div>
                        @endforeach
                    @else
                        <div class="col-span-2 text-center py-10">
                            <p class="text-slate-400 font-medium italic">Belum ada data spesifikasi.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    @include('footer')

    <div id="fullscreenOverlay" class="hidden fixed inset-0 z-[10000] bg-slate-950/95 backdrop-blur-md flex items-center justify-center p-6 opacity-0 transition-opacity duration-300">
        <button onclick="closeFullscreen()" class="absolute top-6 right-8 text-white/50 hover:text-white text-4xl transition-colors"><i class="fa-solid fa-xmark"></i></button>
        <img id="fullscreenImg" src="" class="max-w-full max-h-[90vh] object-contain drop-shadow-2xl scale-95 transition-transform duration-300">
    </div>

    <div id="detailModal" class="hidden fixed inset-0 z-[9999] bg-slate-900/85 backdrop-blur-sm items-center justify-center p-4 transition-all duration-300">
        <div class="absolute inset-0" onclick="closeModal('detailModal')"></div>
        <div class="relative bg-white w-full max-w-4xl rounded-[2.5rem] shadow-2xl flex flex-col max-h-[90vh] overflow-hidden border border-slate-200 mx-auto animate-in zoom-in-95 duration-300">
            
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-200 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md"><i class="fa-solid fa-pen-to-square"></i></div>
                    <div>
                        <h3 class="text-xl font-black text-slate-900 uppercase tracking-tight">Edit Konten Utama</h3>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Visual, Info, Brosur & Advantages</p>
                    </div>
                </div>
                <button onclick="closeModal('detailModal')" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div class="p-8 overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] bg-white">
                <form action="{{ route('product.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="update_type" value="main">
                    
                    <div class="space-y-4 bg-slate-50/50 p-6 rounded-3xl border border-slate-100">
                        <div class="flex justify-between items-center border-b border-slate-200 pb-3">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1"><i class="fa-solid fa-images mr-2"></i> Manajemen Galeri Visual</label>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            
                            <div class="relative group aspect-square bg-white border border-slate-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm">
                                <span class="absolute top-2 left-2 bg-[#043978] text-white text-[8px] font-black px-2 py-1 rounded-md uppercase tracking-widest z-10 shadow-sm">Main Photo</span>
                                <img src="{{ asset('storage/' . $produk->image) }}" id="previewMainImg" class="w-full h-full object-contain p-4">
                                <div class="absolute inset-0 bg-slate-900/70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm z-20">
                                    <label class="w-10 h-10 rounded-xl bg-white text-[#043978] hover:bg-slate-200 flex items-center justify-center shadow-lg cursor-pointer transition-transform hover:scale-110" title="Ganti Foto Utama">
                                        <i class="fa-solid fa-camera-rotate text-sm"></i>
                                        <input type="file" name="image" class="hidden" accept="image/*" onchange="document.getElementById('previewMainImg').src = window.URL.createObjectURL(this.files[0])">
                                    </label>
                                </div>
                            </div>

                            @if(isset($produk->gallery) && count($produk->gallery) > 0)
                                @foreach($produk->gallery as $img)
                                <div class="relative group aspect-square bg-white border border-slate-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm">
                                    <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-contain p-4">
                                </div>
                                @endforeach
                            @endif
                            
                            <label id="btnTambahGaleri" class="aspect-square bg-white border-2 border-dashed border-slate-300 rounded-2xl flex flex-col items-center justify-center cursor-pointer hover:border-[#043978] hover:bg-blue-50/30 transition-all group p-2 text-center">
                                <i id="iconGaleri" class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-[#043978] mb-3 transition-colors"></i>
                                <span id="textGaleri" class="text-[9px] font-black uppercase tracking-widest text-slate-400 group-hover:text-[#043978]">Tambah Foto</span>
                                <input type="file" name="gallery[]" multiple accept="image/*" class="hidden" onchange="
                                    document.getElementById('textGaleri').innerText = this.files.length + ' Foto Siap Disimpan!';
                                    document.getElementById('iconGaleri').className = 'fa-solid fa-circle-check text-3xl text-green-500 mb-2';
                                    document.getElementById('btnTambahGaleri').classList.add('border-green-500', 'bg-green-50');
                                    document.getElementById('btnTambahGaleri').classList.remove('border-slate-300');
                                ">
                            </label>
                            
                        </div>
                    </div>

                    <div class="space-y-6 pt-4">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Sub-Judul (Kategori)</label>
                                <input type="text" name="brand" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-4 text-sm font-bold" value="{{ $produk->brand }}">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Badge (Label Atas)</label>
                                <input type="text" name="badge" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-4 text-sm font-bold" value="{{ $produk->badge }}">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Nama Produk Utama</label>
                                <input type="text" name="name" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-4 text-sm font-bold" value="{{ $produk->name }}">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Deskripsi Utama Detail (Halaman Detail)</label>
                            <textarea name="full_description" rows="4" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-4 text-sm font-medium resize-none leading-relaxed">{{ $produk->full_description }}</textarea>
                        </div>
                    </div>

                    <div class="space-y-2 pt-4 border-t border-slate-100">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Upload Brosur Teknis</label>
                        <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="w-12 h-12 bg-[#043978]/10 text-[#043978] border border-[#043978]/20 rounded-xl flex items-center justify-center text-xl shrink-0 shadow-sm"><i class="fa-solid fa-file-arrow-down"></i></div>
                            <div class="flex-grow">
                                @if($produk->brochure)
                                    <p class="text-sm font-bold text-slate-900">Brosur Tersedia</p>
                                    <p class="text-[10px] font-bold text-[#043978] uppercase tracking-widest mt-0.5">Siap di-download</p>
                                @else
                                    <p class="text-sm font-bold text-slate-400 italic">Belum ada brosur</p>
                                @endif
                            </div>
                            <div class="flex gap-2">
                                <label class="w-10 h-10 bg-white border border-slate-200 text-slate-500 rounded-xl hover:text-[#043978] hover:border-[#043978] transition-colors flex items-center justify-center cursor-pointer shadow-sm">
                                    <i class="fa-solid fa-upload text-sm"></i>
                                    <input type="file" name="brochure" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" class="hidden" onchange="document.getElementById('brochureName').innerText = this.files[0].name">
                                </label>
                            </div>
                        </div>
                        <p class="text-[9px] font-bold text-slate-400 italic pt-1" id="brochureName">* Format didukung: PDF, Word, JPG, PNG (Max 5MB).</p>
                    </div>

                    <div class="pt-6 border-t border-slate-100">
                        <div class="flex justify-between items-center mb-5 border-b border-slate-100 pb-3">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1"><i class="fa-solid fa-star mr-2"></i> Key Advantages (Keunggulan)</label>
                        </div>
                        
                        <div class="space-y-4" id="advListAdmin">
                            @if($produk->advantages && count($produk->advantages) > 0)
                                @foreach($produk->advantages as $adv)
                                <div class="flex gap-4 items-center bg-slate-50 p-4 rounded-2xl border border-slate-100">
                                    <div class="space-y-1 w-1/4">
                                        <label class="text-[8px] font-black uppercase text-slate-400">Icon (FontAwesome)</label>
                                        <input type="text" name="adv_icons[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3 text-xs" value="{{ $adv['icon'] }}">
                                    </div>
                                    <div class="space-y-1 w-full">
                                        <label class="text-[8px] font-black uppercase text-slate-400">Judul Fitur</label>
                                        <input type="text" name="adv_titles[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3 text-xs font-bold" value="{{ $adv['title'] }}">
                                    </div>
                                    <div class="space-y-1 w-full">
                                        <label class="text-[8px] font-black uppercase text-slate-400">Deskripsi Pendek</label>
                                        <input type="text" name="adv_descs[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3 text-xs" value="{{ $adv['desc'] }}">
                                    </div>
                                    <div class="pt-4">
                                        <button type="button" onclick="this.parentElement.parentElement.remove()" class="w-11 h-11 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0 shadow-sm"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <button type="button" onclick="addAdvRow()" class="mt-4 w-full py-4 border-2 border-dashed border-slate-300 rounded-xl text-[10px] font-black uppercase tracking-widest text-slate-400 hover:border-[#043978] hover:text-[#043978] transition-colors flex items-center justify-center gap-2 bg-slate-50"><i class="fa-solid fa-plus"></i> Tambah Fitur Keunggulan</button>
                    </div>
                    
                    <div class="bg-slate-50 px-10 py-6 border-t border-slate-200 flex justify-end gap-3 rounded-b-[2.5rem] -mx-8 -mb-8 mt-8">
                        <button type="button" onclick="closeModal('detailModal')" class="px-8 py-3.5 rounded-xl font-black text-[10px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
                        <button type="submit" class="bg-[#043978] text-white transition-all duration-300 hover:bg-[#022047] px-10 py-3.5 rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-blue-900/20 flex items-center gap-2"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan Utama</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="specModal" class="hidden fixed inset-0 z-[9999] bg-slate-900/85 backdrop-blur-sm items-center justify-center p-4 transition-all duration-300">
        <div class="absolute inset-0" onclick="closeModal('specModal')"></div>
        <div class="relative bg-white w-full max-w-3xl rounded-[2.5rem] shadow-2xl flex flex-col max-h-[90vh] overflow-hidden border border-slate-200 mx-auto animate-in zoom-in-95 duration-300">
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-200 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md"><i class="fa-solid fa-list-check"></i></div>
                    <div>
                        <h3 class="text-xl font-black text-slate-900 uppercase tracking-tight">Tabel Spesifikasi</h3>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Tambah/Hapus parameter teknis</p>
                    </div>
                </div>
                <button onclick="closeModal('specModal')" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div class="p-8 overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <form action="{{ route('product.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="update_type" value="specs">
                    
                    <div class="space-y-3" id="specListAdmin">
                        @if($produk->specifications && count($produk->specifications) > 0)
                            @foreach($produk->specifications as $spec)
                            <div class="flex gap-4 items-center">
                                <input type="text" name="spec_labels[]" class="bg-[#F8FAFC] border border-[#E2E8F0] transition-all duration-200 focus:bg-[#FFFFFF] focus:border-[#043978] focus:outline-none w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" value="{{ $spec['label'] }}">
                                <input type="text" name="spec_values[]" class="bg-[#F8FAFC] border border-[#E2E8F0] transition-all duration-200 focus:bg-[#FFFFFF] focus:border-[#043978] focus:outline-none w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" value="{{ $spec['value'] }}">
                                <button type="button" onclick="this.parentElement.remove()" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
                            </div>
                            @endforeach
                        @else
                            <div class="flex gap-4 items-center">
                                <input type="text" name="spec_labels[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" placeholder="Label Spesifikasi">
                                <input type="text" name="spec_values[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" placeholder="Nilai Spesifikasi">
                                <button type="button" onclick="this.parentElement.remove()" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        @endif
                    </div>

                    <button type="button" onclick="addSpecRow()" class="mt-6 w-full py-4 border-2 border-dashed border-slate-300 rounded-xl text-[10px] font-black uppercase tracking-widest text-slate-400 hover:border-[#043978] hover:text-[#043978] transition-colors flex items-center justify-center gap-2 bg-slate-50">
                        <i class="fa-solid fa-plus"></i> Tambah Baris Spesifikasi
                    </button>

                    <div class="bg-slate-50 px-8 py-5 border-t border-slate-200 flex justify-end gap-3 rounded-b-[2.5rem] -mx-8 -mb-8 mt-8">
                        <button type="button" onclick="closeModal('specModal')" class="px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
                        <button type="submit" class="bg-[#043978] text-white transition-all duration-300 hover:bg-[#022047] px-8 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg flex items-center gap-2"><i class="fa-solid fa-check"></i> Simpan Spesifikasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Script Fullscreen Image
        function openFullscreen(src) {
            const overlay = document.getElementById('fullscreenOverlay');
            const img = document.getElementById('fullscreenImg');
            img.src = src;
            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                img.classList.remove('scale-95');
            }, 10);
        }

        function closeFullscreen() {
            const overlay = document.getElementById('fullscreenOverlay');
            const img = document.getElementById('fullscreenImg');
            overlay.classList.add('opacity-0');
            img.classList.add('scale-95');
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
        }

        function changeMainImage(imageSrc, element) {
            // 1. Ganti gambar utama
            const mainImage = document.getElementById('mainProductImage');
            
            // Efek transisi halus saat ganti foto
            mainImage.style.opacity = 0;
            setTimeout(() => {
                mainImage.src = imageSrc;
                mainImage.style.opacity = 1;
            }, 150);

            // 2. Perbarui link pada tombol fullscreen agar sesuai dengan foto yang aktif
            const btnFullscreen = document.getElementById('btnFullscreen');
            btnFullscreen.setAttribute('onclick', `openFullscreen('${imageSrc}')`);

            // 3. Atur gaya bingkai thumbnail (biru untuk aktif, abu-abu untuk tidak aktif)
            const allThumbnails = document.querySelectorAll('.thumbnail-btn');
            allThumbnails.forEach(thumb => {
                // Reset semua thumbnail ke gaya default (tidak aktif)
                thumb.className = 'thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border border-slate-100 p-2 bg-slate-50 hover:bg-white cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300';
            });

            // Beri gaya aktif (bingkai tebal biru & opacity penuh) pada thumbnail yang baru saja diklik
            element.className = 'thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border-2 border-[#043978] p-2 bg-white shadow-sm cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300';
        }

        function addSpecRow() {
            const container = document.getElementById('specListAdmin');
            const row = document.createElement('div');
            row.className = 'flex gap-4 items-center animate-in fade-in duration-300';
            row.innerHTML = `
                <input type="text" name="spec_labels[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" placeholder="Label (ex: Berat)">
                <input type="text" name="spec_values[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" placeholder="Nilai (ex: 1.5 Kg)">
                <button type="button" onclick="this.parentElement.remove()" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
            `;
            container.appendChild(row);
        }

        function addAdvRow() {
            const container = document.getElementById('advListAdmin');
            const row = document.createElement('div');
            row.className = 'flex gap-4 items-center bg-slate-50 p-4 rounded-2xl border border-slate-100 animate-in fade-in duration-300';
            row.innerHTML = `
                <div class="space-y-1 w-1/4">
                    <label class="text-[8px] font-black uppercase text-slate-400">Icon (Class)</label>
                    <input type="text" name="adv_icons[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3 text-xs" placeholder="fa-star">
                </div>
                <div class="space-y-1 w-full">
                    <label class="text-[8px] font-black uppercase text-slate-400">Judul Fitur</label>
                    <input type="text" name="adv_titles[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3 text-xs font-bold" placeholder="Judul Keunggulan">
                </div>
                <div class="space-y-1 w-full">
                    <label class="text-[8px] font-black uppercase text-slate-400">Deskripsi Pendek</label>
                    <input type="text" name="adv_descs[]" class="bg-[#F8FAFC] border border-[#E2E8F0] focus:bg-[#FFFFFF] focus:border-[#043978] outline-none w-full rounded-xl p-3 text-xs" placeholder="Penjelasan singkat...">
                </div>
                <div class="pt-4">
                    <button type="button" onclick="this.parentElement.parentElement.remove()" class="w-11 h-11 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0 shadow-sm"><i class="fa-solid fa-trash"></i></button>
                </div>
            `;
            container.appendChild(row);
        }
    </script>

    @if(session('success'))
    <script>
        Swal.fire({ icon: 'success', title: 'Berhasil!', text: '{{ session('success') }}', confirmButtonColor: '#043978', customClass: { popup: 'rounded-[2rem]' } });
    </script>
    @endif
</body>
</html>