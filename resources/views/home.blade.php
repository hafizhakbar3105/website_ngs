<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>K Survey | Precision Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    
    .tech-gradient { 
        background: radial-gradient(circle at top right, #2a160b, #140a05); 
    }

    /* Animasi Shine Baru */
    @keyframes shine {
        0% { left: -100%; }
        100% { left: 150%; }
    }
    .animate-shine {
        animation: shine 2s ease-in-out infinite;
    }

    /* Animasi Scanner Line */
    @keyframes scan {
        0% { top: 0%; opacity: 0; }
        50% { opacity: 0.8; }
        100% { top: 100%; opacity: 0; }
    }

    /* Kustomisasi Scrollbar agar tetap minimalis */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #140a05; }
    ::-webkit-scrollbar-thumb { background: #2a160b; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: #ff6a1a; }

    /* Blue Glow pada Button */
    .blue-glow { 
        box-shadow: 0 0 50px -10px rgba(255, 106, 26, 0.4); 
    }
</style>
</head>
<body class="bg-[#f8fafc] text-slate-900 overflow-x-hidden">

    @include('nav')

   <section class="relative min-h-screen flex items-center pt-24 pb-12 tech-gradient overflow-hidden">
    <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-orange-600/20 rounded-full blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-orange-800/15 rounded-full blur-[100px]"></div>
    
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full grid lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-10 order-2 lg:order-1">
            <!-- Ganti bagian teks di dalam Hero Section (sekitar baris 61-75) -->
<div class="space-y-12">
    <!-- Judul Utama -->
    <h1 class="text-6xl lg:text-8xl font-black text-white leading-tight lg:leading-[1.1] tracking-tighter">
        Trusted 
        <br><span class="inline-block text-transparent bg-clip-text bg-gradient-to-b from-white to-slate-500 py-1">Your </span><br>
        <span class="relative inline-block py-2">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-amber-300 to-orange-600 italic px-2">Partner</span>
            <span class="absolute bottom-1 left-2 w-[90%] h-1 bg-gradient-to-r from-orange-500 to-transparent"></span>
        </span> Survey
    </h1>

    <!-- Deskripsi Super Clean & Rapi -->
    <div class="max-w-3xl space-y-6">
        <p class="text-slate-200 text-lg md:text-xl leading-relaxed">
            <span class="font-black text-white">K Survey</span> merupakan trusted reseller produk survei dan pemetaan dari berbagai brand ternama seperti CHC, Hi-Target, Tersus, Ruide, Topcon, ComNav, dan Garmin.
        </p>

        <p class="text-slate-400 text-lg md:text-xl leading-relaxed">
            Menyediakan beragam software untuk survey dan pemetaan seperti Agisoft Metashape, RedToolbox, dll, serta perlengkapan aksesoris berkualitas untuk kegiatan survey dan pemetaan.
        </p>

        <div class="pt-8 border-t border-white/10">
            <p class="text-slate-300 text-base md:text-lg leading-relaxed">
                Dengan semangat <span class="text-orange-400 font-bold">“Precision Data, Trusted Solution,”</span> kami berkomitmen menghadirkan produk geospasial yang presisi, tepercaya, dan mampu mendukung kinerja profesional Anda secara optimal.
            </p>
        </div>
    </div>
</div>

            <div class="flex flex-col sm:flex-row gap-5">
                <a href="https://wa.me/6282123852658?text=Halo%20K Survey,%20saya%20ingin%20memulai%20konsultasi%20mengenai%20proyek%20geospasial." 
   target="_blank" 
   class="relative group overflow-hidden bg-orange-600 text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-2xl shadow-orange-500/20 flex items-center justify-center gap-4">
    <span class="relative z-10">Mulai Konsultasi</span>
    <i class="fa-solid fa-arrow-right relative z-10 group-hover:translate-x-2 transition-transform"></i>
    <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-700 opacity-0 group-hover:opacity-100 transition-opacity"></div>
</a>
                
                <a href="/produk" class="group bg-white/5 backdrop-blur-xl text-white border border-white/10 px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white/10 transition-all flex items-center justify-center gap-3">
                    Lihat Katalog <i class="fa-solid fa-boxes-stacked opacity-50 group-hover:opacity-100"></i>
                </a>
            </div>
        </div>

        <div class="relative order-1 lg:order-2 flex justify-center items-center">
            <div class="absolute w-[120%] h-[120%] border border-orange-500/10 rounded-full animate-[spin_20s_linear_infinite]"></div>
            <div class="absolute w-[100%] h-[100%] border border-white/5 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div>

            <div class="relative group">
                <div class="absolute -inset-16 bg-gradient-to-tr from-orange-600/30 via-amber-400/10 to-orange-800/20 rounded-full blur-[100px] opacity-60 group-hover:opacity-100 transition duration-1000"></div>

                <div class="relative w-80 h-80 md:w-[450px] md:h-[450px] bg-gradient-to-br from-white/[0.08] to-transparent backdrop-blur-3xl rounded-[5rem] border border-white/20 shadow-2xl flex items-center justify-center overflow-hidden transition-all duration-700 group-hover:border-white/40">
                    <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-orange-400 to-transparent opacity-50 animate-[scan_4s_ease-in-out_infinite]"></div>

                    <img src="img/logo.png" alt="Tech" class="relative z-10 w-[95%] h-[95%] object-contain filter drop-shadow-[0_0_60px_rgba(255,106,26,0.4)] transition duration-1000 group-hover:scale-105">
                    
                    <div class="absolute top-0 -inset-full h-full w-full z-20 block transform -skew-x-12 bg-gradient-to-r from-transparent via-white/10 to-transparent opacity-30 group-hover:animate-shine"></div>
                </div>

                {{-- <div class="absolute -bottom-10 -right-10 bg-white/95 backdrop-blur-2xl p-8 rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] border border-slate-100 transform hover:-translate-y-2 transition-transform duration-500">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-2xl flex items-center justify-center">
                            <i class="fa-solid fa-bullseye text-orange-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Akurasi Perangkat</p>
                            <p class="text-3xl font-black text-[#C9490F] tracking-tighter">99.9% <span class="text-sm font-bold text-slate-400">Precision</span></p>
                        </div>
                    </div>
                </div> --}}

                
            </div>
        </div>
    </div>
</section>

<!-- Ganti bagian Brand Scroll (sekitar baris 112-120) -->
<div class="bg-white py-12 border-y border-slate-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 mb-6">
        <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 text-center">Best Trusted Reseller of</p>
    </div>
    
    <div class="flex space-x-12 animate-scroll whitespace-nowrap">
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">CHCNAV</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Hi-Target</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Tersus</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Ruide</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Topcon</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">ComNav</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Garmin</span>
        <!-- Duplikasi untuk efek looping -->
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">CHCNAV</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Hi-Target</span>
        <span class="text-2xl font-black text-slate-300 hover:text-orange-600 transition tracking-tighter uppercase">Tersus</span>
    </div>
</div>

<style>
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.animate-scroll {
    display: flex;
    width: calc(250px * 16);
    animation: scroll 30s linear infinite;
}
</style>

<section class="relative py-24 bg-white px-6 overflow-hidden border-t border-slate-100">
    
    <!-- BACKGROUND ANIMASI KONTUR TANAH (TOPOGRAPHIC LINES) -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.30] overflow-hidden">
        <svg class="w-full h-full animate-[pulse_8s_ease-in-out_infinite]" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" stroke="#C9490F" stroke-width="1.5">
                <!-- Garis-garis kontur topografi bergelombang -->
                <path d="M-100,200 C150,300 350,100 600,250 C850,400 1050,150 1200,300" class="animate-[dash_20s_linear_infinite]" />
                <path d="M-100,300 C200,450 400,200 650,350 C900,500 1000,300 1200,450" />
                <path d="M-100,400 C100,550 300,300 550,500 C800,700 1100,400 1200,600" />
                <path d="M-100,550 C250,650 450,450 700,600 C950,750 1050,500 1200,700" />
                <path d="M-100,700 C150,800 350,600 600,750 C850,900 1000,700 1200,850" />
                <!-- Elemen Kontur Melingkar (Elevasi Topografi) -->
                <circle cx="300" cy="400" r="180" stroke-dasharray="8,8" class="animate-[spin_60s_linear_infinite]" />
                <circle cx="300" cy="400" r="120" />
                <circle cx="300" cy="400" r="60" />
                
                <circle cx="800" cy="650" r="220" stroke-dasharray="6,6" class="animate-[spin_45s_linear_infinite_reverse]" />
                <circle cx="800" cy="650" r="150" />
                <circle cx="800" cy="650" r="80" />
            </g>
        </svg>
    </div>

    <!-- Pendaran Gelombang / Ping -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] border border-orange-500/15 rounded-full animate-[ping_5s_linear_infinite] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-orange-400/10 rounded-full animate-[ping_8s_linear_infinite] pointer-events-none"></div>

    <!-- Micro Tech Dots -->
    <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-orange-500 rounded-full animate-pulse"></div>
    <div class="absolute bottom-1/3 right-1/4 w-1.5 h-1.5 bg-orange-800 rounded-full animate-pulse delay-700"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="space-y-1">
                <div class="w-16 h-1.5 bg-[#C9490F] rounded-full"></div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase leading-none">
                    Produk <span class="text-[#C9490F] italic">Unggulan</span>
                </h2>
                <p class="text-slate-500 font-medium text-lg mt-2">Teknologi pemetaan presisi dari brand kelas dunia</p>
            </div>
            <a href="{{ url('produk') }}" class="group text-[#C9490F] font-black flex items-center gap-2 uppercase tracking-widest text-[11px] border-b-2 border-[#C9490F] pb-1 transition-all">
                Lihat Semua Produk <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produkUnggulan as $item)
            <div class="group bg-white/90 backdrop-blur-md rounded-[3rem] p-6 border border-slate-200 hover:border-[#C9490F] hover:shadow-[0_30px_60px_-15px_rgba(201,73,15,0.15)] transition-all duration-500 flex flex-col h-full shadow-sm relative overflow-hidden">
                
                <div class="aspect-square bg-slate-50 rounded-[2.5rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100 group-hover:bg-white transition-colors duration-500">
                    @if($item->badge)
                    <div class="absolute top-4 left-4 bg-slate-900 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest z-10 shadow-lg">{{ $item->badge }}</div>
                    @endif
                    
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-52 object-contain transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="px-2 flex flex-col flex-grow">
                    <p class="text-[#C9490F] text-[11px] font-black uppercase tracking-[0.4em] mb-3">{{ $item->brand }}</p>
                    <h3 class="text-2xl font-black text-slate-900 mb-3 uppercase tracking-tighter leading-tight">{{ $item->name }}</h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-10 flex-grow opacity-80">"{{ $item->description }}"</p>
                    
                    <a href="{{ url('detailProduk', $item->id) }}" class="group/btn relative w-full bg-slate-950 overflow-hidden text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-3 transition-all duration-300 hover:bg-[#C9490F] shadow-xl">
                        <span class="relative z-10">Detail Produk</span>
                        <i class="fa-solid fa-circle-chevron-right relative z-10 group-hover/btn:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    <section class="relative py-32 px-6 overflow-hidden tech-gradient">
    
    <!-- BACKGROUND ANIMASI UNIK: GEOSPATIAL RADAR & SCANNER GRID -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- 1. Perspective Tech Grid (Garis Kotak Presisi) -->
        <div class="absolute inset-0 opacity-[0.07]" 
             style="background-image: linear-gradient(to right, #ff6a1a 1px, transparent 1px), linear-gradient(to bottom, #ff6a1a 1px, transparent 1px); background-size: 80px 80px;">
        </div>

        <!-- 2. Rotating Radar Line (Efek Pemindai Sinyal Geospasial) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1200px] h-[1200px] rounded-full animate-[spin_25s_linear_infinite] opacity-30"
             style="background: conic-gradient(from 0deg, transparent 80%, rgba(255, 106, 26, 0.4) 100%);">
        </div>

        <!-- 3. Pulse Waves Radius (Sonar Gelombang Sinyal) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-orange-500/20 rounded-full animate-[ping_7s_cubic-bezier(0,0,0.2,1)_infinite]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[1000px] border border-orange-500/10 rounded-full animate-[ping_10s_cubic-bezier(0,0,0.2,1)_infinite_1s]"></div>
        
        <!-- 4. Pendaran Ambient Glow Oranye -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-orange-600/10 rounded-full blur-[140px]"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8 border-b border-white/10 pb-10">
            <div class="max-w-2xl">
                <h2 class="text-5xl md:text-7xl font-black text-white tracking-tighter uppercase leading-tight">
                    Layanan <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-amber-300 to-orange-500 italic px-2">Terintegrasi</span>
                </h2>
                <p class="text-slate-400 mt-6 font-medium leading-relaxed text-lg italic">
                    “Memberikan ekosistem lengkap dari pengadaan hingga dukungan teknis pasca-jual.”
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-10">
            
            <!-- CARD 1: KINEMATIC GNSS -->
            <div class="group relative overflow-hidden p-10 rounded-[3.5rem] border border-white/10 flex flex-col justify-between min-h-[450px] transition-all duration-700 hover:border-orange-500/50 hover:shadow-[0_0_60px_-10px_rgba(255,106,26,0.35)]">
                <img src="img/penjualan.jpeg" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[3s] z-0" alt="Penjualan">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-950/80 to-transparent z-0"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="w-20 h-20 bg-orange-600 rounded-[2rem] flex items-center justify-center text-white text-3xl shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] mb-10 transition-all duration-500 group-hover:rotate-[10deg] group-hover:scale-110">
                            <i class="fa-solid fa-satellite-dish"></i>
                        </div>
                        <h3 class="text-4xl font-black text-white uppercase tracking-tighter mb-4 leading-tight">Solusi Instrumen<br><span class="text-orange-400">Kinematic GNSS</span></h3>
                        <p class="text-slate-300 leading-relaxed max-w-xl font-medium text-lg opacity-80 group-hover:opacity-100 transition-all">
                            Mendukung efisiensi dan akurasi akuisisi data lapangan Anda dengan perangkat pemetaan berstandar industri <span class="italic text-[#FFB347]">with affordable price</span>, tanpa mengurangi kualitas dan kepercayaan Anda.
                        </p>
                    </div>

                    <div class="flex justify-end mt-10">
                        <a href="/produk" class="group/btn relative overflow-hidden bg-white px-12 py-5 rounded-2xl text-sm font-black uppercase tracking-widest text-slate-900 transition-all duration-500 hover:bg-[#FFB347] shadow-xl">
                            <span class="relative z-10">Lihat Produk</span>
                            <i class="fa-solid fa-arrow-right ml-2 group-hover/btn:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 2: AFTER SALES & PELATIHAN -->
            <div class="group relative overflow-hidden p-8 rounded-[2.5rem] border border-white/10 flex flex-col justify-between min-h-[320px] transition-all duration-700 hover:border-orange-500/50 hover:shadow-[0_0_60px_-10px_rgba(255,106,26,0.25)]">
                <img src="img/kalibrasi.jpeg" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[3s] z-0" alt="Kalibrasi">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-950/80 to-transparent z-0"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="w-14 h-14 bg-orange-800 rounded-2xl flex items-center justify-center text-white text-xl shadow-[0_15px_30px_-10px_rgba(180,60,20,0.5)] mb-6 transition-all duration-500 group-hover:rotate-[10deg] group-hover:scale-110">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-3xl font-black text-white uppercase tracking-tighter mb-3 leading-tight">After Sales &<br><span class="text-orange-300">Pelatihan</span></h3>
                        <p class="text-slate-300 leading-relaxed max-w-xl font-medium text-sm opacity-80 group-hover:opacity-100 transition-all">Pendampingan teknis dan pengolahan data untuk produktivitas tim Anda di lapangan.</p>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="https://wa.me/6282123852658?text=Halo%20K%20Survey,%20saya%20ingin%20menjadwalkan%20training%20dan%20layanan%20after%20sales." target="_blank" class="group/btn relative overflow-hidden bg-white px-7 py-4 rounded-lg text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 transition-all duration-500 hover:bg-orange-600 hover:text-white shadow-md">
                            <span class="relative z-10">Jadwalkan Training</span>
                            <i class="fa-solid fa-calendar-check ml-2 text-[9px] transition-transform group-hover/btn:rotate-12"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    
    <section class="relative py-28 bg-slate-50 px-6 overflow-hidden border-t border-slate-100">
    
    <!-- ANIMASI BACKGROUND BARU: ELEVATION TOPOGRAPHY & BLUR ORBS (TANPA GARIS KOTAK/GRID) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- 1. Topographic Blur Blobs (Efek Kontur Warna Elevasi yang Mengambang & Bernapas) -->
        <div class="absolute top-[-10%] left-[-5%] w-[600px] h-[600px] bg-gradient-to-br from-orange-400/15 via-amber-300/10 to-transparent rounded-full blur-[120px] animate-[pulse_7s_ease-in-out_infinite]"></div>
        <div class="absolute bottom-[-10%] right-[-5%] w-[700px] h-[700px] bg-gradient-to-tl from-orange-600/15 via-orange-400/5 to-transparent rounded-full blur-[140px] animate-[pulse_10s_ease-in-out_infinite_2s]"></div>

        <!-- 2. Concentric Wave Waves (Ring Topografi Halus yang Membesar Lambat) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-orange-500/5 rounded-full animate-[ping_8s_cubic-bezier(0,0,0.2,1)_infinite]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] bg-orange-400/5 rounded-full animate-[ping_12s_cubic-bezier(0,0,0.2,1)_infinite_3s]"></div>
        
        <!-- 3. Floating Sparkle Particles (Partikel Cahaya Mengambang Halus) -->
        <div class="absolute top-1/3 left-1/5 w-3 h-3 bg-amber-400/40 rounded-full blur-[1px] animate-[bounce_6s_infinite]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-orange-500/40 rounded-full blur-[1px] animate-[bounce_8s_infinite_1.5s]"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20 space-y-3">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-orange-200/80 text-orange-600 text-[10px] font-black uppercase tracking-[0.3em] shadow-sm">
                <span class="w-1.5 h-1.5 bg-orange-500 rounded-full animate-pulse"></span> Expertise & Trust
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-950 tracking-tighter uppercase leading-none">
                Mengapa Memilih <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 via-amber-500 to-orange-500 italic">Kami?</span>
            </h2>
            <p class="text-slate-500 font-medium text-sm md:text-base max-w-xl mx-auto">
                Komitmen kami dalam memberikan standar layanan geospasial terbaik untuk mendukung efisiensi proyek Anda.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Card 1 -->
            <div class="group relative bg-white/90 backdrop-blur-md rounded-[2.5rem] p-8 border border-slate-200/80 shadow-sm hover:border-orange-500 hover:shadow-[0_25px_50px_-12px_rgba(255,106,26,0.18)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-600 to-amber-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-orange-50 border border-orange-100 flex items-center justify-center text-orange-600 text-2xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-xl font-black text-slate-900 tracking-tight uppercase">Tenaga Profesional</h4>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">
                            Didukung tim ahli berpengalaman di bidang geodesi dan teknologi geospasial terkini.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group relative bg-white/90 backdrop-blur-md rounded-[2.5rem] p-8 border border-slate-200/80 shadow-sm hover:border-orange-500 hover:shadow-[0_25px_50px_-12px_rgba(255,106,26,0.18)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-600 to-amber-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-orange-50 border border-orange-100 flex items-center justify-center text-orange-600 text-2xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-xl font-black text-slate-900 tracking-tight uppercase">Teknologi Modern</h4>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">
                            Solusi pengukuran paling mutakhir mulai dari sistem Kinematic GNSS hingga LiDAR SLAM.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group relative bg-white/90 backdrop-blur-md rounded-[2.5rem] p-8 border border-slate-200/80 shadow-sm hover:border-orange-500 hover:shadow-[0_25px_50px_-12px_rgba(255,106,26,0.18)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-600 to-amber-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-orange-50 border border-orange-100 flex items-center justify-center text-orange-600 text-2xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-xl font-black text-slate-900 tracking-tight uppercase">Layanan Kalibrasi</h4>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">
                            Memastikan presisi dan performa instrumen sesuai standar ketat industri global.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="group relative bg-white/90 backdrop-blur-md rounded-[2.5rem] p-8 border border-slate-200/80 shadow-sm hover:border-orange-500 hover:shadow-[0_25px_50px_-12px_rgba(255,106,26,0.18)] hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-600 to-amber-400 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-orange-50 border border-orange-100 flex items-center justify-center text-orange-600 text-2xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-sm">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-xl font-black text-slate-900 tracking-tight uppercase">Dukungan Teknis</h4>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">
                            Pendampingan penuh untuk operasional lapangan hingga pengolahan data hasil ukur.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <section class="py-24 bg-[#f8fafc] px-6 relative overflow-hidden border-t border-slate-100">
    
    <!-- ANIMASI BACKGROUND BARU: CAMERA LENS SHUTTER & DIGITAL MAP NODES -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- 1. Focal Ring (Aperture Lensa Kamera Besar yang Berputar Lambat) -->
        <div class="absolute -top-20 -right-20 w-[600px] h-[600px] rounded-full border border-orange-500/10 animate-[spin_40s_linear_infinite]">
            <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-orange-500/20 to-transparent"></div>
            <div class="absolute top-0 left-1/2 w-px h-full bg-gradient-to-b from-transparent via-orange-500/20 to-transparent"></div>
        </div>

        <!-- 2. Shutter Aperture Ring 2 (Aksen Ring Lensa Kedua) -->
        <div class="absolute -top-10 -right-10 w-[450px] h-[450px] rounded-full border border-dashed border-orange-400/15 animate-[spin_30s_linear_infinite_reverse]"></div>

        <!-- 3. Ambient Glow Blur Oranye -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-orange-600/10 rounded-full blur-[120px] animate-[pulse_6s_ease-in-out_infinite]"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-500/5 rounded-full blur-[140px] animate-[pulse_9s_ease-in-out_infinite_2s]"></div>

        <!-- 4. Node Digital Map (Titik Lokasi Lapangan yang Berkedip) -->
        <div class="absolute bottom-12 left-10 flex items-center gap-2 opacity-30 animate-[pulse_4s_infinite]">
            <span class="w-2 h-2 rounded-full bg-orange-500"></span>
            
        </div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#C9490F]/5 border border-[#C9490F]/10 text-[#C9490F] text-[9px] font-black uppercase tracking-widest">
                    <span class="w-1.5 h-1.5 bg-[#C9490F] rounded-full animate-pulse"></span> Resources & Gallery
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase leading-none">
                    Dokumentasi & <span class="text-[#C9490F] italic">Artikel</span>
                </h2>
                <p class="text-slate-500 font-medium max-w-lg">Koleksi aktivitas lapangan dan pembahasan teknis mendalam seputar teknologi geospasial.</p>
            </div>
            <div class="hidden md:block">
                
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            
            @if($articleHighlight)
            <div class="md:col-span-7 group relative h-[520px] rounded-[3.5rem] overflow-hidden shadow-2xl border border-white">
                <img src="{{ asset('storage/' . $articleHighlight->thumbnail) }}" 
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
                     alt="{{ $articleHighlight->title }}">
                
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 p-10 w-full">
                    <div class="flex items-center gap-3 text-[#FFB347] text-[10px] font-black uppercase tracking-[0.3em] mb-4">
                        <i class="fa-solid fa-camera-retro"></i> Dokumentasi Terkini
                    </div>
                    <h3 class="text-3xl font-black text-white uppercase tracking-tighter mb-4 leading-tight">
                        {{ $articleHighlight->title }}
                    </h3>
                    <p class="text-slate-300 text-sm font-medium line-clamp-2 mb-8 opacity-80">
                        {{ Str::limit(strip_tags($articleHighlight->content), 150) }}
                    </p>
                    
                    <a href="{{ route('article.show', $articleHighlight->slug) }}" class="inline-flex items-center gap-4 text-white font-black text-[10px] uppercase tracking-widest group/link">
                        Lihat Selengkapnya <i class="fa-solid fa-circle-arrow-right text-xl text-[#FFB347] group-hover/link:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
            @endif

            <div class="md:col-span-5 flex flex-col gap-5">
                <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-2 pl-2 italic">Artikel Pilihan</p>
                
                @forelse($articleList as $art)
                <a href="{{ route('article.show', $art->slug) }}" class="group flex gap-5 bg-white p-5 rounded-[2.5rem] border border-slate-100 hover:border-[#C9490F] transition-all hover:shadow-xl shadow-sm">
                    <div class="w-28 h-28 rounded-3xl overflow-hidden flex-shrink-0 bg-slate-50 border border-slate-100">
                        <img src="{{ asset('storage/' . $art->thumbnail) }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                             alt="{{ $art->title }}">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-base font-black text-slate-900 leading-tight mb-2 group-hover:text-[#C9490F] transition-colors uppercase tracking-tight">
                            {{ $art->title }}
                        </h4>
                        <p class="text-[11px] text-slate-500 line-clamp-2 font-medium leading-relaxed">
                            {{ Str::limit(strip_tags($art->content), 80) }}
                        </p>
                    </div>
                </a>
                @empty
                <div class="p-10 text-center bg-white rounded-[2.5rem] border border-dashed border-slate-200">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Belum ada artikel tambahan</p>
                </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-slate-950 relative overflow-hidden border-t border-slate-800">
    
    <!-- ANIMASI BACKGROUND TEGAS: DYNAMIC GEOSPATIAL NETWORK & GLOWING NODES -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- 1. Grid Line Tegas (Jaringan Garis Geospasial) -->
        <div class="absolute inset-0 opacity-15" 
             style="background-image: linear-gradient(to right, #FF6000 1.5px, transparent 1.5px), linear-gradient(to bottom, #FF6000 1.5px, transparent 1.5px); background-size: 70px 70px;">
        </div>

        <!-- 2. Pulsing Radar Scan Ring (Lingkaran Sinyal Terang) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border-2 border-[#FF6000]/30 rounded-full animate-[ping_6s_cubic-bezier(0,0,0.2,1)_infinite]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] border-2 border-amber-400/20 rounded-full animate-[ping_10s_cubic-bezier(0,0,0.2,1)_infinite_2s]"></div>

        <!-- 3. Animated Connection Lines SVG (Garis Jaringan Bergerak Jelas) -->
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <g stroke="#FF6000" stroke-width="1.5" fill="none" class="opacity-40">
                <path d="M150,150 L350,250 L250,500 Z" class="animate-[pulse_3s_ease-in-out_infinite]" />
                <path d="M800,200 L1000,350 L900,600 L750,400 Z" class="animate-[pulse_4s_ease-in-out_infinite_1s]" />
                <path d="M350,650 L550,750 L450,900 Z" class="animate-[pulse_5s_ease-in-out_infinite_2s]" />
            </g>
        </svg>

        <!-- 4. Glowing GPS Nodes (Titik Sinyal Terang Berkedip) -->
        <div class="absolute top-1/4 left-1/6 w-4 h-4 bg-[#FF6000] rounded-full animate-ping shadow-[0_0_20px_6px_rgba(255,96,0,0.8)]"></div>
        <div class="absolute top-1/4 left-1/6 w-4 h-4 bg-white rounded-full"></div>

        <div class="absolute bottom-1/3 right-1/5 w-4 h-4 bg-amber-400 rounded-full animate-ping delay-500 shadow-[0_0_20px_6px_rgba(255,180,0,0.8)]"></div>
        <div class="absolute bottom-1/3 right-1/5 w-4 h-4 bg-white rounded-full"></div>

        <div class="absolute top-2/3 left-1/3 w-3 h-3 bg-[#FF6000] rounded-full animate-ping delay-1000 shadow-[0_0_15px_4px_rgba(255,96,0,0.8)]"></div>
        
        <!-- 5. Ambient Glow Oranye Kuat -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-[#FF6000]/15 rounded-full blur-[140px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20 space-y-4">
            <div class="inline-flex items-center gap-2.5 px-5 py-2 rounded-full bg-white/10 border border-[#FF6000]/40 text-[#FF8800] text-[10px] font-black uppercase tracking-[0.3em] backdrop-blur-md shadow-[0_0_20px_rgba(255,96,0,0.2)]">
                <span class="w-2 h-2 bg-[#FF6000] rounded-full animate-pulse shadow-[0_0_8px_#FF6000]"></span> Verified Technical Feedback
            </div>
            <div class="space-y-4">
                <!-- Judul -->
                <h2 class="text-5xl md:text-6xl font-black text-white uppercase tracking-tighter leading-none">
                    Suara <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF8800] via-[#FF6000] to-amber-300 italic">Pelanggan</span>
                </h2>
                
                <!-- Deskripsi -->
                <p class="text-slate-300 max-w-2xl mx-auto font-medium text-lg leading-relaxed">
                    Transparansi kualitas adalah komitmen kami. Pengalaman nyata dari para profesional geodesi.
                </p>
            </div>
        </div>

        <div class="flex overflow-x-auto gap-8 pb-12 snap-x snap-mandatory scrollbar-hide relative z-20">
            @forelse($ulasan as $item)
            <!-- Card Testimonial -->
            <div class="flex-none w-[350px] md:w-[450px] snap-center bg-white p-10 rounded-[3rem] shadow-2xl space-y-8 border-2 border-transparent hover:border-[#FF6000] hover:shadow-[0_20px_50px_-10px_rgba(255,96,0,0.3)] transition-all duration-500 overflow-hidden relative group">
                <div class="flex justify-between items-start">
                    <div class="flex gap-1.5 text-sm">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $item->rating)
                                <i class="fa-solid fa-star text-[#FF8800]"></i>
                            @else
                                <i class="fa-solid fa-star text-slate-200"></i>
                            @endif
                        @endfor
                    </div>
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $item->created_at->format('M Y') }}</span>
                </div>
                
                <blockquote class="text-slate-700 font-medium leading-relaxed italic text-lg relative">
                    <i class="fa-solid fa-quote-left absolute -top-4 -left-6 text-[#FF6000]/10 text-6xl z-0"></i>
                    <span class="relative z-10">"{{ $item->message }}"</span>
                </blockquote>

                <div class="flex items-center gap-5 border-t border-slate-100 pt-8 mt-auto">
                    <div class="w-14 h-14 rounded-2xl bg-[#FF6000] text-white flex items-center justify-center font-black text-xl shadow-lg shadow-[#FF6000]/30 group-hover:scale-105 transition-transform">
                        {{ strtoupper(substr($item->name, 0, 2)) }}
                    </div>
                    <div>
                        <h4 class="text-base font-black text-slate-900 uppercase tracking-tight">{{ $item->name }}</h4>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ $item->company ?? 'Personal' }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="w-full text-center py-16 bg-white rounded-[3rem] border border-dashed border-slate-200">
                <i class="fa-solid fa-comments text-slate-300 text-5xl mb-4"></i>
                <p class="text-slate-400 font-medium italic">Belum ada masukan teknis dari pelanggan.</p>
            </div>
            @endforelse
        </div>

        <!-- Tombol Submit Feedback -->
        <div class="mt-16 text-center relative z-20">
            <button onclick="toggleModal('feedbackModal')" class="inline-flex items-center gap-4 px-12 py-5 rounded-full bg-[#FF6000] text-white font-black uppercase text-[11px] tracking-[0.3em] hover:bg-[#E04800] hover:scale-105 transition-all shadow-2xl shadow-[#FF6000]/40 border-2 border-white/20">
                Submit Engineering Feedback <i class="fa-solid fa-pen-to-square"></i>
            </button>
        </div>
    </div>
</section>

    @include('footer')
<!-- Modal Background -->
<div id="feedbackModal" class="fixed inset-0 z-[150] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Overlay -->
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity bg-slate-900/80 backdrop-blur-sm" onclick="toggleModal('feedbackModal')"></div>

        <!-- Modal Content -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-[2rem] text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full border border-slate-200">
            <div class="bg-[#C9490F] px-8 py-6">
                <h3 class="text-xl font-bold text-white uppercase tracking-widest" id="modal-title">Engineering Feedback</h3>
                <p class="text-orange-200/70 text-xs mt-1">Berikan masukan teknis untuk presisi yang lebih baik.</p>
            </div>
            <form action="{{ route('feedback.submit') }}" method="POST" class="px-8 py-8 space-y-5">
    @csrf
    
    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3 text-center">Tingkat Presisi / Kepuasan</label>
        <div class="flex flex-row-reverse justify-center gap-2">
            <input type="radio" id="star5" name="rating" value="5" class="hidden peer" checked />
            <label for="star5" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#FFB347] hover:text-[#FFB347] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star4" name="rating" value="4" class="hidden peer" />
            <label for="star4" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#FFB347] hover:text-[#FFB347] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star3" name="rating" value="3" class="hidden peer" />
            <label for="star3" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#FFB347] hover:text-[#FFB347] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star2" name="rating" value="2" class="hidden peer" />
            <label for="star2" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#FFB347] hover:text-[#FFB347] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star1" name="rating" value="1" class="hidden peer" />
            <label for="star1" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#FFB347] hover:text-[#FFB347] transition-colors"><i class="fa-solid fa-star"></i></label>
        </div>
    </div>
    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Nama Lengkap</label>
        <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#C9490F] outline-none text-sm font-medium" placeholder="Contoh: Rahmat Nugraha">
    </div>

    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Instansi / Perusahaan</label>
        <input type="text" name="company" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#C9490F] outline-none text-sm font-medium" placeholder="PT. Alam Hijau">
    </div>

    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Masukan Teknis</label>
        <textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#C9490F] outline-none text-sm font-medium" placeholder="Tuliskan pengalaman teknis Anda menggunakan produk kami..."></textarea>
    </div>

    <div class="pt-4 flex gap-3">
        <button type="button" onclick="toggleModal('feedbackModal')" class="flex-1 px-6 py-4 rounded-xl border border-slate-200 text-slate-500 font-bold uppercase text-[10px] tracking-widest hover:bg-slate-50 transition-all">Batal</button>
        <button type="submit" class="flex-1 px-6 py-4 rounded-xl bg-[#5AAC41] text-white font-bold uppercase text-[10px] tracking-widest hover:bg-[#4d9437] shadow-lg shadow-green-900/20 transition-all">Kirim Feedback</button>
    </div>
</form>
        </div>
    </div>
</div>

<script>
    function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Mencegah scrolling di background
    } else {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
}

// Menutup modal dengan tombol ESC
document.addEventListener('keydown', (e) => {
    if (e.key === "Escape") {
        const modal = document.getElementById('feedbackModal');
        if (!modal.classList.contains('hidden')) toggleModal('feedbackModal');
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#C9490F',
            customClass: { popup: 'rounded-[2rem]' }
        });
    @endif
</script>
</body>
</html>