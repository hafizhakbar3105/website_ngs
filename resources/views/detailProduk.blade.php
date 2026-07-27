<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>{{ $produk->name }} Detail | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
        * { transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1); }
        .tech-card-dark { 
            background: linear-gradient(135deg, #170902 0%, #2a160b 100%);
            box-shadow: 0 25px 50px -12px rgba(201, 73, 15, 0.25);
        }
        .spec-row { border-bottom: 1px solid rgba(226, 232, 240, 0.5); }
        .spec-row:last-child { border-bottom: none; }
        .img-main-container {
            background: radial-gradient(circle at center, #ffffff 0%, #fff7ed 100%);
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden">

    @include('nav')

    <header class="pt-40 pb-12 px-6 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-orange-100 pb-10">
            <div class="space-y-2">
                <span class="text-orange-600 font-bold text-xs uppercase tracking-widest">{{ $produk->brand }}</span>
                <h1 class="text-4xl md:text-6xl font-black text-slate-950 tracking-tighter leading-none">{{ $produk->name }}</h1>
            </div>
            <div class="flex gap-3">
                <div class="px-4 py-2 bg-slate-50 rounded-full border border-slate-100 text-[10px] font-bold text-slate-500 uppercase tracking-widest">In Stock</div>
                
                @if($produk->badge)
                <div class="px-4 py-2 bg-gradient-to-r from-orange-600 to-orange-500 rounded-full text-[10px] font-bold text-white uppercase tracking-widest shadow-md shadow-orange-500/30">{{ $produk->badge }}</div>
                @endif
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <div class="lg:col-span-7 space-y-8">
                <div class="img-main-container aspect-[1.2/1] rounded-[3.5rem] flex items-center justify-center p-16 border border-orange-50 relative overflow-hidden group">
                    <img id="mainProductImage" src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-4/5 h-4/5 object-contain drop-shadow-2xl group-hover:scale-105 transition-all duration-300">
                    
                    <div class="absolute bottom-8 right-8 flex gap-3">
                         <button id="btnFullscreen" onclick="openFullscreen('{{ asset('storage/' . $produk->image) }}')" class="w-12 h-12 rounded-2xl bg-white/80 backdrop-blur shadow-sm border border-orange-100 flex items-center justify-center text-slate-400 hover:text-orange-600"><i class="fa-solid fa-expand"></i></button>
                    </div>
                </div>
                
                @if(isset($produk->gallery) && count($produk->gallery) > 0)
                <div class="flex flex-wrap gap-6 mt-6">
                    <div onclick="changeMainImage('{{ asset('storage/' . $produk->image) }}', this)" class="thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border-2 border-[#C9490F] p-2 bg-white shadow-sm cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300">
                        <img src="{{ asset('storage/' . $produk->image) }}" class="w-full h-full object-contain">
                    </div>
                    
                    @foreach($produk->gallery as $img)
                    <div onclick="changeMainImage('{{ asset('storage/' . $img) }}', this)" class="thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border border-slate-100 p-2 bg-slate-50 hover:bg-white transition cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300">
                        <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-contain">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="lg:col-span-5 space-y-12">
                <div class="tech-card-dark p-10 rounded-[3rem] text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500/25 rounded-full blur-3xl -mr-16 -mt-16"></div>
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                    <h3 class="text-xs font-black uppercase tracking-[0.3em] text-orange-400 mb-6">Deskripsi Detail</h3>
                    
                    <p class="text-sm leading-relaxed text-slate-300 font-medium italic">
                        "{{ $produk->full_description ?? 'Deskripsi detail belum ditambahkan.' }}"
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 px-2">Key Advantages</h4>
                    <div class="grid grid-cols-1 gap-4">
                        
                        @if($produk->advantages && count($produk->advantages) > 0)
                            @foreach($produk->advantages as $adv)
                            <div class="flex items-center gap-5 p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:border-orange-200 hover:shadow-xl hover:shadow-orange-500/10 transition-all">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white text-xl shadow-md shadow-orange-500/30"><i class="fa-solid {{ $adv['icon'] }}"></i></div>
                                <div>
                                    <h5 class="text-sm font-black text-slate-900 uppercase">{{ $adv['title'] }}</h5>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">{{ $adv['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-xs italic text-slate-400 pl-2">Fitur keunggulan belum ditambahkan.</p>
                        @endif

                    </div>
                </div>
                
                <div class="flex flex-col gap-4 pt-6">
                    <a href="https://wa.me/6282123852658?text=Halo%20Tim%20K Survey,%20saya%20tertarik%20dan%20ingin%20meminta%20penawaran%20harga%20(quotation)%20untuk%20alat%20*{{ urlencode($produk->name) }}*.%20Boleh%20dibantu%20informasi%20lebih%20lanjutnya%3F" target="_blank" class="group flex items-center justify-center gap-4 bg-gradient-to-r from-orange-600 to-orange-500 text-white py-5 rounded-[2rem] font-black uppercase tracking-widest hover:brightness-110 transition-all shadow-2xl shadow-orange-500/30">
                        <i class="fa-brands fa-whatsapp text-xl group-hover:rotate-12 transition-transform"></i> 
                        Minta Penawaran
                    </a>
                    
                    @if($produk->brochure)
                        @php
                            $ekstensi = pathinfo($produk->brochure, PATHINFO_EXTENSION);
                            // Format: Brosur Teknis Nama Produk.pdf
                            $namaFileRapi = 'Brosur Teknis ' . $produk->name . '.' . $ekstensi;
                        @endphp
                        
                        <a href="{{ asset('storage/' . $produk->brochure) }}" download="{{ $namaFileRapi }}" target="_blank" class="flex items-center justify-center gap-3 bg-white border-2 border-orange-200 text-orange-700 py-5 rounded-[2rem] font-black uppercase tracking-widest hover:bg-orange-50 hover:border-orange-500 shadow-xl shadow-orange-200/40 transition-all">
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

        <div class="mt-32 space-y-12">
            <div class="flex flex-col gap-4">
                <p class="text-[11px] font-black text-orange-600 uppercase tracking-[0.4em]">Inside Technology</p>
                <h2 class="text-3xl md:text-4xl font-black text-slate-950 tracking-tight">Spesifikasi Teknis</h2>
            </div>
            
            <div class="bg-white rounded-[3.5rem] border-2 border-orange-100 p-8 md:p-12 shadow-sm shadow-orange-500/5 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-2">
                    
                    @if($produk->specifications && count($produk->specifications) > 0)
                        @foreach($produk->specifications as $spec)
                        <div class="border-b border-slate-200/50 last:border-0 flex justify-between py-6">
                            <span class="text-[11px] font-black uppercase tracking-widest text-slate-400">{{ $spec['label'] }}</span>
                            <span class="text-sm font-bold text-slate-900">{{ $spec['value'] }}</span>
                        </div>
                        @endforeach
                    @else
                        <p class="col-span-2 text-center text-slate-400 italic py-10">Spesifikasi teknis belum tersedia.</p>
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

    <script>
        function openFullscreen(src) {
            const overlay = document.getElementById('fullscreenOverlay');
            const img = document.getElementById('fullscreenImg');
            img.src = src;
            overlay.classList.remove('hidden');
            // Sedikit delay agar transisi opacity & scale terlihat smooth
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
            // Tunggu transisi selesai sebelum menambahkan class hidden
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
        }

        // Fungsi untuk mengganti gambar utama saat thumbnail diklik
        function changeMainImage(imageSrc, element) {
            const mainImage = document.getElementById('mainProductImage');
            
            // Efek transisi halus (fade out)
            mainImage.style.opacity = 0;
            
            setTimeout(() => {
                // Ganti sumber gambar setelah memudar
                mainImage.src = imageSrc;
                // Munculkan kembali (fade in)
                mainImage.style.opacity = 1;
            }, 150);

            // Perbarui tombol fullscreen agar menampilkan foto yang sedang aktif
            const btnFullscreen = document.getElementById('btnFullscreen');
            btnFullscreen.setAttribute('onclick', `openFullscreen('${imageSrc}')`);

            // Atur gaya aktif/tidak aktif pada thumbnail
            const allThumbnails = document.querySelectorAll('.thumbnail-btn');
            allThumbnails.forEach(thumb => {
                // Reset semua thumbnail ke gaya pudar
                thumb.className = 'thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border border-slate-100 p-2 bg-slate-50 hover:bg-white cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300';
            });

            // Beri bingkai oranye tebal dan opacity 100% pada thumbnail yang diklik
            element.className = 'thumbnail-btn aspect-square w-24 md:w-32 rounded-3xl border-2 border-[#C9490F] p-2 bg-white shadow-sm cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300';
        }
    </script>

</body>
</html>