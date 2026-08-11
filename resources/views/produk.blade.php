<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Katalog | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        @keyframes glowPulse {
            0%, 100% { transform: scale(1) translate(0, 0); opacity: 0.6; }
            50% { transform: scale(1.25) translate(15px, -15px); opacity: 0.9; }
        }
        @keyframes floatBounce {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-30px) scale(1.15); }
        }
        .anim-glow-main-1 { animation: glowPulse 6s ease-in-out infinite; }
        .anim-glow-main-2 { animation: glowPulse 8s ease-in-out infinite 2s; }
        .anim-float-orb { animation: floatBounce 7s ease-in-out infinite; }
    </style>
</head>
<body class="text-slate-900 bg-[#f8fafc] font-['Plus_Jakarta_Sans'] scroll-smooth min-h-screen">

    @include('nav')

    <!-- HEADER PAGE -->
    <header class="relative pt-52 pb-24 px-6 bg-slate-950 overflow-hidden border-b border-orange-500/10">
        <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-gradient-to-br from-orange-600/30 to-amber-500/10 rounded-full blur-[130px] pointer-events-none anim-glow-main-1"></div>
        <div class="absolute bottom-0 left-1/4 w-[500px] h-[300px] bg-orange-600/15 rounded-full blur-[110px] pointer-events-none anim-glow-main-2"></div>
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600 z-20"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-3 px-4 py-1.5 rounded-full bg-slate-900/90 border border-orange-500/40 shadow-[0_0_25px_-5px_rgba(255,106,26,0.4)] backdrop-blur-md">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-500"></span>
                    </span>
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-orange-400">Engineering Grade Equipment</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-black text-white leading-none tracking-tighter uppercase italic">
                    KATALOG <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-amber-400 to-orange-400 drop-shadow-[0_10px_20px_rgba(255,106,26,0.2)]">PRODUK</span>
                </h1>

                <p class="text-slate-300 text-sm md:text-lg max-w-xl font-medium leading-relaxed">
                    Peralatan geospasial presisi tinggi dari brand terpercaya dunia untuk hasil pengukuran yang akurat di setiap medan.
                </p>
            </div>
        </div>
    </header>

    <!-- MAIN CONTAINER -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="absolute top-10 right-10 w-[550px] h-[550px] bg-orange-500/25 rounded-full blur-[90px] anim-glow-main-1"></div>
            <div class="absolute bottom-10 left-10 w-[600px] h-[600px] bg-amber-500/20 rounded-full blur-[100px] anim-glow-main-2"></div>
        </div>

        <main class="max-w-7xl mx-auto px-6 py-20 flex flex-col lg:flex-row gap-16 relative z-10">
            
            <!-- SIDEBAR KATEGORI -->
            <aside class="lg:w-72 space-y-12 flex-shrink-0">
                <div>
                    <h3 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 mb-8 px-4">Kategori Utama</h3>
                    <nav class="space-y-3">
                        <a href="{{ route('produk.index') }}" 
                           class="group flex items-center justify-between p-4 rounded-2xl border transition-all {{ !request('category') ? 'bg-gradient-to-r from-orange-600 to-orange-500 border-orange-600 text-white shadow-lg shadow-orange-500/30' : 'bg-white/80 hover:bg-white hover:border-orange-300 text-slate-500 border-transparent backdrop-blur-sm' }}">
                            <span class="text-xs font-black uppercase tracking-widest">Semua Alat</span>
                            @if(!request('category'))
                            <i class="fa-solid fa-satellite-dish text-white/80 text-sm"></i>
                            @endif
                        </a>

                        @foreach($categories as $cat)
                        <a href="{{ route('produk.index', ['category' => $cat->slug]) }}" 
                           class="group flex items-center justify-between p-4 rounded-2xl border transition-all {{ request('category') == $cat->slug ? 'bg-gradient-to-r from-orange-600 to-orange-500 border-orange-600 text-white shadow-lg shadow-orange-500/30' : 'bg-white/80 hover:bg-white hover:border-orange-300 text-slate-500 border-transparent backdrop-blur-sm' }}">
                            <span class="text-xs font-bold uppercase tracking-widest">{{ $cat->name }}</span>
                            @if(request('category') == $cat->slug)
                            <i class="fa-solid fa-satellite-dish text-white/80 text-sm"></i>
                            @endif
                        </a>
                        @endforeach
                    </nav>
                </div>
            </aside>

            <!-- DAFTAR KATALOG PRODUK -->
            <section class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    @forelse($products as $produk)
                    <!-- CARD UTAMA -->
                    <div class="relative flex flex-col h-full bg-white/90 backdrop-blur-md rounded-[2.5rem] p-4 border-2 border-white shadow-lg hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20 hover:border-orange-500 transition-all duration-500 group overflow-hidden">

                        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-30"></div>
                        
                        <!-- WADAH GAMBAR: PERBAIKAN PADDING DAN RASI0 AGAR ALAT DILIHAT UTUH DENGAN BACKGROUND MENYATU -->
                        <div class="w-full aspect-[4/3] relative rounded-[2rem] overflow-hidden flex items-center justify-center p-6 bg-[#FFFFFF] border border-slate-100/60 shadow-inner">
                            <div class="absolute top-4 left-4 z-20">
                                <span class="px-3 py-1 bg-gradient-to-r from-orange-600 to-orange-500 text-white text-[8px] font-black uppercase tracking-widest rounded-lg shadow-md shadow-orange-500/30">Premium</span>
                            </div>

                            <!-- OBJECT-CONTAIN MEMBUAT FISIK INSTRUMEN TAMPIL PROPORSI UTUH TANPA TERPOTONG -->
                            <img src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-full h-full object-contain drop-shadow-md group-hover:scale-105 transition-transform duration-500 ease-out">
                        </div>
                        
                        <!-- KONTEN DESKRIPSI -->
                        <div class="p-5 flex flex-col flex-grow justify-between space-y-4">
                            <div class="space-y-2">
                                <div class="flex items-center justify-between gap-2">
                                    <span class="text-[9px] font-mono font-bold text-orange-600 uppercase tracking-widest">
                                        {{ $produk->category->name ?? 'GEOSPATIAL' }} // {{ $produk->brand }}
                                    </span>
                                    @if($produk->badge)
                                    <span class="px-2.5 py-0.5 bg-orange-100 text-orange-700 font-bold text-[8px] rounded-full uppercase tracking-wider">
                                        {{ $produk->badge }}
                                    </span>
                                    @endif
                                </div>

                                <h3 class="text-xl font-black text-slate-900 leading-tight tracking-tight uppercase italic">{{ $produk->name }}</h3>
                                
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-2 font-medium">
                                    {{ $produk->description }}
                                </p>
                            </div>
                            
                            <!-- TOMBOL ACTION -->
                            <div class="pt-4 border-t border-slate-100/80">
                                <div class="flex gap-3">
                                    <a href="https://wa.me/6282123852658?text={{ urlencode('Halo K Survey, saya tertarik untuk mengajukan demo alat untuk produk ' . $produk->name . ' (' . $produk->brand . '). Mohon informasi prosedur dan biayanya.') }}" 
                                       target="_blank" 
                                       class="flex-[2] bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-3.5 rounded-2xl text-[9px] font-black uppercase tracking-widest hover:shadow-lg hover:shadow-orange-500/30 hover:brightness-110 transition-all duration-300 flex items-center justify-center">
                                        Ajukan Demo
                                    </a>
                                    <a href="{{ route('produk.detail', $produk->id) }}" class="flex-1 bg-slate-50 border border-slate-200 text-slate-700 text-center py-3.5 rounded-2xl text-[9px] font-black uppercase tracking-widest hover:bg-orange-50 hover:border-orange-500 hover:text-orange-700 transition-all duration-300 flex items-center justify-center">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-24 bg-white/60 backdrop-blur-md rounded-[3.5rem] border-2 border-orange-200/60 shadow-xl relative z-10">
                        <div class="w-20 h-20 bg-orange-100/80 rounded-full flex items-center justify-center mx-auto mb-4 border border-orange-200 shadow-inner">
                            <i class="fa-solid fa-boxes-open text-orange-500 text-3xl"></i>
                        </div>
                        <p class="text-slate-600 font-bold text-base">Katalog untuk kategori ini belum tersedia.</p>
                        <p class="text-slate-400 text-xs mt-1">Silakan pilih kategori lain pada menu di sebelah kiri.</p>
                    </div>
                    @endforelse

                </div>
            </section>
        </main>
    </div>

    @include('footer')

</body>
</html>