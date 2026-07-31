<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>{{ $produk->name }} Detail | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FFFFFF; scroll-behavior: smooth; }
        
        .smooth-transition { transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); }

        .tech-card-dark { 
            background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25);
        }
        
        .img-main-container {
            background: radial-gradient(circle at center, #FFFFFF 0%, #FFF7ED 100%);
        }

        /* CORAK BARU: POLA MATRIX TITIK SAMPLE LASER & COORDINATE CROSSHAIR */
        .bg-laser-matrix {
            background-size: 36px 36px;
            background-image: 
                radial-gradient(circle, rgba(201, 73, 15, 0.12) 1.5px, transparent 1.5px),
                linear-gradient(to right, rgba(201, 73, 15, 0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(201, 73, 15, 0.02) 1px, transparent 1px);
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden relative selection:bg-[#C9490F] selection:text-white">

    @include('nav')

    <!-- HEADER / BREADCRUMB SECTION -->
    <header class="pt-40 pb-8 px-6 max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-orange-100 pb-10">
            <div class="space-y-3">
                <div class="flex items-center gap-2 text-[10px] font-mono font-bold text-orange-600 uppercase tracking-widest">
                    <span>{{ $produk->brand }}</span>
                    <span class="text-slate-300">//</span>
                    <span class="text-slate-400">PRECISION HARDWARE INSTRUMENT</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-slate-950 tracking-tight leading-none uppercase italic">{{ $produk->name }}</h1>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <div class="px-4 py-2 bg-slate-50 rounded-full border border-slate-200 text-[10px] font-mono font-bold text-slate-600 uppercase tracking-widest flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> In Stock
                </div>
                
                @if($produk->badge)
                <div class="px-5 py-2 bg-gradient-to-r from-orange-600 to-amber-500 rounded-full text-[10px] font-black text-white uppercase tracking-widest shadow-lg shadow-orange-500/25">
                    {{ $produk->badge }}
                </div>
                @endif
            </div>
        </div>
    </header>

    <!-- MAIN PRODUCT SECTION WITH NEW LASER TRIANGULATION BACKDROP -->
    <main class="max-w-7xl mx-auto px-6 py-8 relative">
        
        <!-- CORAK BARU: LASER TRIANGULATION & PRISM ANGLE RAYS -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10 bg-laser-matrix">
            
            <!-- 1. Vektor Sudut Sinar Laser Pembiasan Prisma (Sisi Kiri Atas) -->
            <svg class="absolute top-0 -left-10 w-[700px] h-[700px] opacity-20" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Sinar Poligon Triangulasi Laser -->
                <polygon points="50,50 350,150 180,400" stroke="#C9490F" stroke-width="1.5" stroke-dasharray="6 4" class="animate-[pulse_4s_ease-in-out_infinite]" />
                <line x1="50" y1="50" x2="550" y2="280" stroke="#FFB347" stroke-width="1" />
                <line x1="350" y1="150" x2="500" y2="480" stroke="#C9490F" stroke-width="1" />
                
                <!-- Crosshair Target Laser Point -->
                <circle cx="350" cy="150" r="12" stroke="#C9490F" stroke-width="1.5" />
                <circle cx="350" cy="150" r="3" fill="#C9490F" />
                <text x="370" y="145" fill="#94A3B8" font-family="monospace" font-size="10" font-weight="bold">EDM_LASER_REFLECTOR // ACTIVE</text>
            </svg>

            <!-- 2. Vektor Grid Koordinat & Crosshair Target (Sisi Kanan Bawah) -->
            <svg class="absolute bottom-10 right-0 w-[500px] h-[500px] opacity-15" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="250" cy="250" r="180" stroke="#C9490F" stroke-width="1.5" stroke-dasharray="8 8" />
                <circle cx="250" cy="250" r="90" stroke="#FFB347" stroke-width="1" />
                <line x1="250" y1="20" x2="250" y2="480" stroke="#C9490F" stroke-width="1" />
                <line x1="20" y1="250" x2="480" y2="250" stroke="#C9490F" stroke-width="1" />
            </svg>

            <!-- 3. Dual Focused Laser Glow -->
            <div class="absolute top-1/3 left-10 w-[450px] h-[450px] bg-gradient-to-br from-orange-600/10 via-amber-400/5 to-transparent rounded-full blur-[100px]"></div>
            <div class="absolute bottom-1/4 right-10 w-[550px] h-[550px] bg-gradient-to-tr from-orange-500/10 via-amber-300/5 to-transparent rounded-full blur-[130px]"></div>

            <!-- 4. Real-time Distance Status Node -->
            <div class="absolute top-2 right-12 flex items-center gap-2 opacity-40">
                <span class="w-2 h-2 rounded-full bg-orange-600 animate-ping"></span>
                <span class="text-[9px] font-mono font-bold text-slate-600 uppercase tracking-widest">EDM_DIST // 1000M_RANGE</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 relative z-10">
            
            <!-- KOLOM KIRI: FOTO UTAMA & GALERI THUMBNAIL -->
            <div class="lg:col-span-7 space-y-8">
                <div class="img-main-container aspect-[1.2/1] rounded-[3.5rem] bg-white/95 backdrop-blur-md flex items-center justify-center p-12 md:p-16 border-2 border-orange-100 shadow-[0_20px_60px_-15px_rgba(201,73,15,0.1)] relative overflow-hidden group">
                    <img id="mainProductImage" src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-4/5 h-4/5 object-contain drop-shadow-2xl group-hover:scale-105 transition-transform duration-500">
                    
                    <div class="absolute bottom-8 right-8 flex gap-3">
                        <button id="btnFullscreen" onclick="openFullscreen('{{ asset('storage/' . $produk->image) }}')" class="w-12 h-12 rounded-2xl bg-white/90 backdrop-blur shadow-md border border-orange-100 flex items-center justify-center text-slate-500 hover:text-orange-600 hover:scale-105 transition-all">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                </div>
                
                @if(isset($produk->gallery) && count($produk->gallery) > 0)
                <div class="flex flex-wrap gap-5 mt-6">
                    <div onclick="changeMainImage('{{ asset('storage/' . $produk->image) }}', this)" class="thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl border-2 border-[#C9490F] p-2 bg-white shadow-md cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300">
                        <img src="{{ asset('storage/' . $produk->image) }}" class="w-full h-full object-contain">
                    </div>
                    
                    @foreach($produk->gallery as $img)
                    <div onclick="changeMainImage('{{ asset('storage/' . $img) }}', this)" class="thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl border border-slate-200 p-2 bg-slate-50 hover:bg-white transition cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300">
                        <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-contain">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- KOLOM KANAN: KARTU DESKRIPSI & KEY ADVANTAGES -->
            <div class="lg:col-span-5 space-y-10">
                <div class="tech-card-dark p-10 rounded-[3rem] text-white relative overflow-hidden border border-slate-800">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500/20 rounded-full blur-3xl -mr-16 -mt-16"></div>
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                    
                    <h3 class="text-[10px] font-mono font-bold uppercase tracking-[0.3em] text-orange-400 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-microchip"></i> Deskripsi Detail
                    </h3>
                    
                    <p class="text-sm leading-relaxed text-slate-300 font-medium italic">
                        "{{ $produk->full_description ?? 'Deskripsi detail belum ditambahkan.' }}"
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 px-2">Key Advantages</h4>
                    <div class="grid grid-cols-1 gap-4">
                        
                        @if($produk->advantages && count($produk->advantages) > 0)
                            @foreach($produk->advantages as $adv)
                            <div class="flex items-center gap-5 p-5 rounded-3xl bg-white/90 backdrop-blur-md border border-orange-100 hover:border-orange-300 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white text-xl shadow-md shadow-orange-500/25 shrink-0">
                                    <i class="fa-solid {{ $adv['icon'] }}"></i>
                                </div>
                                <div>
                                    <h5 class="text-sm font-black text-slate-900 uppercase tracking-tight">{{ $adv['title'] }}</h5>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider mt-0.5">{{ $adv['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-xs italic text-slate-400 pl-2">Fitur keunggulan belum ditambahkan.</p>
                        @endif

                    </div>
                </div>
                
                <div class="flex flex-col gap-4 pt-4">
                    <a href="https://wa.me/6282123852658?text=Halo%20Tim%20K%20Survey,%20saya%20tertarik%20dan%20ingin%20meminta%20penawaran%20harga%20(quotation)%20untuk%20alat%20*{{ urlencode($produk->name) }}*.%20Boleh%20dibantu%20informasi%20lebih%20lanjutnya%3F" target="_blank" class="group flex items-center justify-center gap-4 bg-gradient-to-r from-orange-600 to-orange-500 text-white py-5 rounded-[2rem] font-black text-xs uppercase tracking-widest hover:brightness-110 transition-all shadow-2xl shadow-orange-500/30">
                        <i class="fa-brands fa-whatsapp text-xl group-hover:rotate-12 transition-transform"></i> 
                        Minta Penawaran Harga
                    </a>
                    
                    @if($produk->brochure)
                        @php
                            $ekstensi = pathinfo($produk->brochure, PATHINFO_EXTENSION);
                            $namaFileRapi = 'Brosur Teknis ' . $produk->name . '.' . $ekstensi;
                        @endphp
                        
                        <a href="{{ asset('storage/' . $produk->brochure) }}" download="{{ $namaFileRapi }}" target="_blank" class="flex items-center justify-center gap-3 bg-white border-2 border-orange-200 text-orange-700 py-5 rounded-[2rem] font-black text-xs uppercase tracking-widest hover:bg-orange-50 hover:border-orange-500 shadow-lg shadow-orange-200/30 transition-all">
                            <i class="fa-solid fa-download text-xs"></i> Unduh Brosur Teknis
                        </a>
                    @else
                        <button disabled class="w-full flex items-center justify-center gap-3 bg-slate-50 border border-slate-200 text-slate-400 py-5 rounded-[2rem] font-black text-xs uppercase tracking-widest cursor-not-allowed opacity-60">
                            <i class="fa-solid fa-file-circle-xmark text-xs"></i> Brosur Belum Tersedia
                        </button>
                    @endif

                </div>
            </div>
        </div>

        <!-- SPESIFIKASI TEKNIS SECTION -->
        <div class="mt-32 space-y-10 relative z-10">
            <div class="flex flex-col gap-2">
                <p class="text-[10px] font-mono font-bold text-orange-600 uppercase tracking-[0.4em]">Inside Technology</p>
                <h2 class="text-3xl md:text-4xl font-black text-slate-950 tracking-tight uppercase italic">Spesifikasi Teknis</h2>
            </div>
            
            <div class="bg-white/95 backdrop-blur-md rounded-[3.5rem] border-2 border-orange-100 p-8 md:p-14 shadow-sm shadow-orange-500/5 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-1">
                    @if($produk->specifications && count($produk->specifications) > 0)
                        @foreach($produk->specifications as $spec)
                        <div class="spec-row flex justify-between items-center py-6">
                            <span class="text-[11px] font-mono font-bold uppercase tracking-widest text-slate-400">{{ $spec['label'] }}</span>
                            <span class="text-sm font-extrabold text-slate-900">{{ $spec['value'] }}</span>
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

    <!-- FULLSCREEN MODAL OVERLAY -->
    <div id="fullscreenOverlay" class="hidden fixed inset-0 z-[10000] bg-slate-950/95 backdrop-blur-md flex items-center justify-center p-6 opacity-0 transition-opacity duration-300">
        <button onclick="closeFullscreen()" class="absolute top-6 right-8 text-white/50 hover:text-white text-4xl transition-colors">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img id="fullscreenImg" src="" class="max-w-full max-h-[90vh] object-contain drop-shadow-2xl scale-95 transition-transform duration-300">
    </div>

    <!-- JAVASCRIPT SYSTEM LOGIC -->
    <script>
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
            const mainImage = document.getElementById('mainProductImage');
            
            mainImage.style.opacity = 0;
            
            setTimeout(() => {
                mainImage.src = imageSrc;
                mainImage.style.opacity = 1;
            }, 150);

            const btnFullscreen = document.getElementById('btnFullscreen');
            btnFullscreen.setAttribute('onclick', `openFullscreen('${imageSrc}')`);

            const allThumbnails = document.querySelectorAll('.thumbnail-btn');
            allThumbnails.forEach(thumb => {
                thumb.className = 'thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl border border-slate-200 p-2 bg-slate-50 hover:bg-white cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300';
            });

            element.className = 'thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl border-2 border-[#C9490F] p-2 bg-white shadow-md cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300';
        }
    </script>

</body>
</html>