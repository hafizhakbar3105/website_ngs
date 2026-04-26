<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa Geospatial Solution | Precision Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    
    .tech-gradient { 
        background: radial-gradient(circle at top right, #1e293b, #0f172a); 
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
    ::-webkit-scrollbar-track { background: #0f172a; }
    ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: #3b82f6; }

    /* Blue Glow pada Button */
    .blue-glow { 
        box-shadow: 0 0 50px -10px rgba(59, 130, 246, 0.4); 
    }
</style>
</head>
<body class="bg-[#f8fafc] text-slate-900 overflow-x-hidden">

    @include('nav')

   <section class="relative min-h-screen flex items-center pt-24 pb-12 tech-gradient overflow-hidden">
    <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-indigo-600/15 rounded-full blur-[100px]"></div>
    
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full grid lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-10 order-2 lg:order-1">
            <div class="space-y-6">
                

                <h1 class="text-6xl lg:text-8xl font-black text-white leading-tight lg:leading-[1.1] tracking-tighter">
    Precision <span class="inline-block text-transparent bg-clip-text bg-gradient-to-b from-white to-slate-500 py-1">Data</span><br>
    <span class="relative inline-block py-2">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400 italic px-2">Trusted</span>
        <span class="absolute bottom-1 left-2 w-[90%] h-1 bg-gradient-to-r from-blue-500 to-transparent"></span>
    </span> Solutions
</h1>

                <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-xl font-medium">
                    Menghadirkan ekosistem pengukuran modern berbasis <span class="text-blue-300 border-b border-blue-300/30">GNSS & LiDAR SLAM</span>. Solusi cerdas untuk efisiensi lapangan tanpa batas.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-5">
                <a href="https://wa.me/6282123852658" target="_blank" class="relative group overflow-hidden bg-blue-600 text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all hover:scale-105 active:scale-95 shadow-2xl shadow-blue-500/20 flex items-center justify-center gap-4">
                    <span class="relative z-10">Mulai Konsultasi</span>
                    <i class="fa-solid fa-arrow-right relative z-10 group-hover:translate-x-2 transition-transform"></i>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
                
                <a href="/produk" class="group bg-white/5 backdrop-blur-xl text-white border border-white/10 px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white/10 transition-all flex items-center justify-center gap-3">
                    Lihat Katalog <i class="fa-solid fa-boxes-stacked opacity-50 group-hover:opacity-100"></i>
                </a>
            </div>
        </div>

        <div class="relative order-1 lg:order-2 flex justify-center items-center">
            <div class="absolute w-[120%] h-[120%] border border-blue-500/10 rounded-full animate-[spin_20s_linear_infinite]"></div>
            <div class="absolute w-[100%] h-[100%] border border-white/5 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div>

            <div class="relative group">
                <div class="absolute -inset-16 bg-gradient-to-tr from-blue-600/30 via-cyan-400/10 to-indigo-600/20 rounded-full blur-[100px] opacity-60 group-hover:opacity-100 transition duration-1000"></div>

                <div class="relative w-80 h-80 md:w-[450px] md:h-[450px] bg-gradient-to-br from-white/[0.08] to-transparent backdrop-blur-3xl rounded-[5rem] border border-white/20 shadow-2xl flex items-center justify-center overflow-hidden transition-all duration-700 group-hover:border-white/40">
                    <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-blue-400 to-transparent opacity-50 animate-[scan_4s_ease-in-out_infinite]"></div>

                    <img src="img/logo.png" alt="Tech" class="relative z-10 w-[95%] h-[95%] object-contain filter drop-shadow-[0_0_60px_rgba(59,130,246,0.4)] transition duration-1000 group-hover:scale-105">
                    
                    <div class="absolute top-0 -inset-full h-full w-full z-20 block transform -skew-x-12 bg-gradient-to-r from-transparent via-white/10 to-transparent opacity-30 group-hover:animate-shine"></div>
                </div>

                <div class="absolute -bottom-10 -right-10 bg-white/95 backdrop-blur-2xl p-8 rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.3)] border border-slate-100 transform hover:-translate-y-2 transition-transform duration-500">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <i class="fa-solid fa-bullseye text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Akurasi Perangkat</p>
                            <p class="text-3xl font-black text-[#043978] tracking-tighter">99.9% <span class="text-sm font-bold text-slate-400">Precision</span></p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>

<div class="bg-white py-12 border-y border-slate-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 mb-6">
        <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 text-center">Authorized Distributor & Partner</p>
    </div>
    
    <div class="flex space-x-12 animate-scroll whitespace-nowrap">
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">TOPCON</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">CHCNAV</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">HI-TARGET</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">SOUTH</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">RUIDE</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">FOIF</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">COMNAV</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">TERSUS</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">TOPCON</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">CHCNAV</span>
        <span class="text-2xl font-black text-slate-300 hover:text-blue-600 transition tracking-tighter">HI-TARGET</span>
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
    
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] border border-blue-500/20 rounded-full animate-[ping_4s_linear_infinite] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-blue-400/10 rounded-full animate-[ping_6s_linear_infinite] pointer-events-none"></div>

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] rounded-full animate-[spin_10s_linear_infinite] pointer-events-none"
         style="background: conic-gradient(from 0deg, transparent 70%, rgba(4, 57, 120, 0.15) 100%);">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1 h-1/2 bg-gradient-to-b from-[#043978] to-transparent opacity-40"></div>
    </div>

    <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
    <div class="absolute bottom-1/3 right-1/4 w-1.5 h-1.5 bg-indigo-400 rounded-full animate-pulse delay-700"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="space-y-1">
                <div class="w-16 h-1.5 bg-[#043978] rounded-full"></div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase leading-none">
                    Produk <span class="text-[#043978] italic">Unggulan</span>
                </h2>
                <p class="text-slate-500 font-medium text-lg mt-2">Teknologi pemetaan presisi dari brand kelas dunia</p>
            </div>
            <a href="{{ url('produk') }}" class="group text-[#043978] font-black flex items-center gap-2 uppercase tracking-widest text-[11px] border-b-2 border-[#043978] pb-1 transition-all">
                Lihat Semua Produk <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produkUnggulan as $item)
            <div class="group bg-white/90 backdrop-blur-md rounded-[3rem] p-6 border border-slate-200 hover:border-[#043978] hover:shadow-[0_30px_60px_-15px_rgba(4,57,120,0.15)] transition-all duration-500 flex flex-col h-full shadow-sm relative overflow-hidden">
                
                <div class="aspect-square bg-slate-50 rounded-[2.5rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100 group-hover:bg-white transition-colors duration-500">
                    @if($item->badge)
                    <div class="absolute top-4 left-4 bg-slate-900 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest z-10 shadow-lg">{{ $item->badge }}</div>
                    @endif
                    
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-52 object-contain transition-transform duration-700 group-hover:scale-110">
                </div>

                <div class="px-2 flex flex-col flex-grow">
                    <p class="text-[#043978] text-[11px] font-black uppercase tracking-[0.4em] mb-3">{{ $item->brand }}</p>
                    <h3 class="text-2xl font-black text-slate-900 mb-3 uppercase tracking-tighter leading-tight">{{ $item->name }}</h3>
                    <p class="text-sm text-slate-500 leading-relaxed mb-10 flex-grow opacity-80">"{{ $item->description }}"</p>
                    
                    <a href="{{ url('detailProduk', $item->id) }}" class="group/btn relative w-full bg-slate-950 overflow-hidden text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-3 transition-all duration-300 hover:bg-[#043978] shadow-xl">
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
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none" 
         style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 100px 100px;">
    </div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[600px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8 border-b border-white/5 pb-10">
            <div class="max-w-2xl">
                <h2 class="text-5xl md:text-7xl font-black text-white tracking-tighter uppercase leading-tight">
                    Layanan <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300 italic px-2">Terintegrasi</span>
                </h2>
                <p class="text-slate-400 mt-6 font-medium leading-relaxed text-lg italic">
                    “Memberikan ekosistem lengkap dari pengadaan hingga dukungan teknis pasca-jual.”
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-10">
            
            <div class="group relative overflow-hidden p-10 rounded-[3.5rem] border border-white/10 flex flex-col justify-between min-h-[450px] transition-all duration-700 hover:border-blue-500/40 hover:shadow-[0_0_50px_-12px_rgba(59,130,246,0.3)]">
                <img src="img/penjualan.jpeg" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[3s] z-0" alt="Penjualan">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-950/70 to-transparent z-0"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="w-20 h-20 bg-blue-600 rounded-[2rem] flex items-center justify-center text-white text-3xl shadow-[0_20px_40px_-10px_rgba(59,130,246,0.5)] mb-10 transition-all duration-500 group-hover:rotate-[10deg] group-hover:scale-110">
                            <i class="fa-solid fa-satellite-dish"></i>
                        </div>
                        <h3 class="text-4xl font-black text-white uppercase tracking-tighter mb-4 leading-tight">Solusi Instrumen<br><span class="text-blue-400">Geospasial</span></h3>
                        <p class="text-slate-300 leading-relaxed max-w-xl font-medium text-lg opacity-80 group-hover:opacity-100 transition-all">Mendukung efisiensi dan akurasi akuisisi data lapangan Anda dengan perangkat pemetaan berstandar industri.</p>
                    </div>

                    <div class="flex justify-end mt-10">
                        <a href="/produk" class="group/btn relative overflow-hidden bg-white px-12 py-5 rounded-2xl text-sm font-black uppercase tracking-widest text-slate-900 transition-all duration-500 hover:bg-[#E7D532] shadow-xl">
                            <span class="relative z-10">Lihat Produk</span>
                            <i class="fa-solid fa-arrow-right ml-2 group-hover/btn:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden p-8 rounded-[2.5rem] border border-white/10 flex flex-col justify-between min-h-[320px] transition-all duration-700 hover:border-indigo-500/40 hover:shadow-[0_0_50px_-12px_rgba(99,102,241,0.3)]">
    <img src="img/kalibrasi.jpeg" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[3s] z-0" alt="Kalibrasi">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-950/70 to-transparent z-0"></div>

    <div class="relative z-10 flex flex-col h-full justify-between">
        <div>
            <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center text-white text-xl shadow-[0_15px_30px_-10px_rgba(99,102,241,0.5)] mb-6 transition-all duration-500 group-hover:rotate-[10deg] group-hover:scale-110">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h3 class="text-3xl font-black text-white uppercase tracking-tighter mb-3 leading-tight">After Sales &<br><span class="text-indigo-400">Pelatihan</span></h3>
            <p class="text-slate-300 leading-relaxed max-w-xl font-medium text-sm opacity-80 group-hover:opacity-100 transition-all">Pendampingan teknis dan pengolahan data untuk produktivitas tim Anda di lapangan.</p>
        </div>

        <div class="flex justify-end mt-6">
            <a href="https://wa.me/6282123852658" target="_blank" class="group/btn relative overflow-hidden bg-white px-7 py-4 rounded-lg text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 transition-all duration-500 hover:bg-blue-600 hover:text-white shadow-md">
                <span class="relative z-10">Jadwalkan Training</span>
                <i class="fa-solid fa-calendar-check ml-2 text-[9px] transition-transform group-hover/btn:rotate-12"></i>
            </a>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

    <a href="https://wa.me/..." class="fixed bottom-8 right-8 z-[100] group">
    <!-- Efek Blur/Glow Bulat -->
    <div class="absolute inset-0 bg-green-500 rounded-full blur-xl opacity-40 group-hover:opacity-60 transition"></div>
    
    <!-- Tombol Bulat -->
    <div class="relative bg-green-500 text-white p-4 rounded-full flex items-center justify-center shadow-2xl">
        <i class="fa-brands fa-whatsapp text-2xl"></i>
        <!-- Teks dihilangkan agar benar-benar bulat sempurna -->
    </div>
</a>
    <section class="py-24 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 space-y-4">
                <p class="text-blue-600 font-bold uppercase tracking-[0.2em] text-xs">Expertise & Trust </p>
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Mengapa Memilih Kami?</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="space-y-4 text-center md:text-left">
                    <div class="text-blue-600 text-3xl"><i class="fa-solid fa-user-graduate"></i></div>
                    <h4 class="font-bold text-slate-800">Tenaga Profesional</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Didukung ahli berpengalaman di bidang geodesi dan teknologi geospasial</p>
                </div>
                <div class="space-y-4 text-center md:text-left">
                    <div class="text-blue-600 text-3xl"><i class="fa-solid fa-microchip"></i></div>
                    <h4 class="font-bold text-slate-800">Teknologi Modern</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Solusi pengukuran terbaru mulai dari GNSS hingga LiDAR SLAM</p>
                </div>
                <div class="space-y-4 text-center md:text-left">
                    <div class="text-blue-600 text-3xl"><i class="fa-solid fa-certificate"></i></div>
                    <h4 class="font-bold text-slate-800">Layanan Kalibrasi</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Memastikan akurasi dan performa alat sesuai standar industri global</p>
                </div>
                <div class="space-y-4 text-center md:text-left">
                    <div class="text-blue-600 text-3xl"><i class="fa-solid fa-headset"></i></div>
                    <h4 class="font-bold text-slate-800">Dukungan Teknis</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">Pendampingan operasional dan pengolahan data pasca-pembelian</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#f8fafc] px-6 relative overflow-hidden border-t border-slate-100">
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/5 rounded-full blur-[100px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#043978]/5 border border-[#043978]/10 text-[#043978] text-[9px] font-black uppercase tracking-widest">
                    <span class="w-1.5 h-1.5 bg-[#043978] rounded-full animate-pulse"></span> Resources & Gallery
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase leading-none">
                    Dokumentasi & <span class="text-[#043978] italic">Artikel</span>
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
                    <div class="flex items-center gap-3 text-[#E7D532] text-[10px] font-black uppercase tracking-[0.3em] mb-4">
                        <i class="fa-solid fa-camera-retro"></i> Dokumentasi Terkini
                    </div>
                    <h3 class="text-3xl font-black text-white uppercase tracking-tighter mb-4 leading-tight">
                        {{ $articleHighlight->title }}
                    </h3>
                    <p class="text-slate-300 text-sm font-medium line-clamp-2 mb-8 opacity-80">
                        {{ Str::limit(strip_tags($articleHighlight->content), 150) }}
                    </p>
                    
                    <a href="{{ route('article.show', $articleHighlight->slug) }}" class="inline-flex items-center gap-4 text-white font-black text-[10px] uppercase tracking-widest group/link">
                        Lihat Selengkapnya <i class="fa-solid fa-circle-arrow-right text-xl text-[#E7D532] group-hover/link:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
            @endif

            <div class="md:col-span-5 flex flex-col gap-5">
                <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-2 pl-2 italic">Artikel Pilihan</p>
                
                @forelse($articleList as $art)
                <a href="{{ route('article.show', $art->slug) }}" class="group flex gap-5 bg-white p-5 rounded-[2.5rem] border border-slate-100 hover:border-[#043978] transition-all hover:shadow-xl shadow-sm">
                    <div class="w-28 h-28 rounded-3xl overflow-hidden flex-shrink-0 bg-slate-50 border border-slate-100">
                        <img src="{{ asset('storage/' . $art->thumbnail) }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                             alt="{{ $art->title }}">
                    </div>
                    <div class="flex flex-col justify-center">
                        <h4 class="text-base font-black text-slate-900 leading-tight mb-2 group-hover:text-[#043978] transition-colors uppercase tracking-tight">
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

<section class="py-32 bg-primary relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-px bg-white/20"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-white/5 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20 space-y-4">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-highlight text-[10px] font-black uppercase tracking-[0.3em]">
                Verified Technical Feedback
            </div>
            <div class="space-y-4">
    <!-- Judul: Menggunakan Biru Tua NGS untuk kesan Teknologi & Kepercayaan -->
    <h2 class="text-5xl md:text-6xl font-black text-[#043978] uppercase tracking-tighter leading-none">
        Suara <span class="italic text-slate-500">Pelanggan</span>
    </h2>
    
    <!-- Deskripsi: Menggunakan Abu Gelap (Slate-600) untuk kesan Presisi & Profesional -->
    <p class="text-slate-600 max-w-2xl mx-auto font-semibold text-lg leading-relaxed">
        Transparansi kualitas adalah komitmen kami. Pengalaman nyata dari para profesional geodesi.
    </p>
</div>
        </div>

        <div class="flex overflow-x-auto gap-8 pb-12 snap-x snap-mandatory scrollbar-hide">
    
    @forelse($ulasan as $item)
    <div class="flex-none w-[350px] md:w-[450px] snap-center bg-white p-10 rounded-[3.5rem] shadow-2xl space-y-8 border border-slate-100">
        <div class="flex justify-between items-start">
            <div class="flex gap-1 text-primary text-xs">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $item->rating)
                        <i class="fa-solid fa-star text-[#E7D532]"></i>
                    @else
                        <i class="fa-solid fa-star text-slate-200"></i>
                    @endif
                @endfor
            </div>
            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $item->created_at->format('M Y') }}</span>
        </div>
        <p class="text-slate-700 font-medium leading-relaxed italic text-lg">"{{ $item->message }}"</p>
        <div class="flex items-center gap-5 border-t border-slate-100 pt-8">
            <div class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl">
                {{ strtoupper(substr($item->name, 0, 2)) }}
            </div>
            <div>
                <h4 class="text-sm font-black text-slate-900 uppercase tracking-tight">{{ $item->name }}</h4>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ $item->company ?? 'Personal' }}</p>
            </div>
        </div>
    </div>
    @empty
    <div class="w-full text-center py-10">
        <p class="text-slate-400 font-medium italic"></p>
    </div>
    @endforelse

</div>

        <div class="mt-16 text-center">
    <button onclick="toggleModal('feedbackModal')" class="inline-flex items-center gap-4 px-12 py-5 rounded-full bg-[#E7D532] text-[#043978] font-black uppercase text-[11px] tracking-[0.3em] hover:scale-105 transition-all shadow-2xl border-2 border-white/10">
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
            <div class="bg-[#043978] px-8 py-6">
                <h3 class="text-xl font-bold text-white uppercase tracking-widest" id="modal-title">Engineering Feedback</h3>
                <p class="text-blue-200/70 text-xs mt-1">Berikan masukan teknis untuk presisi yang lebih baik.</p>
            </div>
            <form action="{{ route('feedback.submit') }}" method="POST" class="px-8 py-8 space-y-5">
    @csrf
    
    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3 text-center">Tingkat Presisi / Kepuasan</label>
        <div class="flex flex-row-reverse justify-center gap-2">
            <input type="radio" id="star5" name="rating" value="5" class="hidden peer" checked />
            <label for="star5" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star4" name="rating" value="4" class="hidden peer" />
            <label for="star4" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star3" name="rating" value="3" class="hidden peer" />
            <label for="star3" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star2" name="rating" value="2" class="hidden peer" />
            <label for="star2" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors"><i class="fa-solid fa-star"></i></label>

            <input type="radio" id="star1" name="rating" value="1" class="hidden peer" />
            <label for="star1" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors"><i class="fa-solid fa-star"></i></label>
        </div>
    </div>
    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Nama Lengkap</label>
        <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#043978] outline-none text-sm font-medium" placeholder="Contoh: Rahmat Nugraha">
    </div>

    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Instansi / Perusahaan</label>
        <input type="text" name="company" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#043978] outline-none text-sm font-medium" placeholder="PT. Alam Hijau">
    </div>

    <div>
        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Masukan Teknis</label>
        <textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#043978] outline-none text-sm font-medium" placeholder="Tuliskan pengalaman teknis Anda menggunakan produk kami..."></textarea>
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
            confirmButtonColor: '#043978',
            customClass: { popup: 'rounded-[2rem]' }
        });
    @endif
</script>
</body>
</html>