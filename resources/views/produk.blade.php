<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Catalog | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; scroll-behavior: smooth; }
        
        /* Slow & Elegant Transitions */
        * { transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1); }

        /* Tech-Card Ultra Stable & Balanced */
        .tech-card { 
            display: flex; flex-direction: column; height: 100%; 
            background: white; border-radius: 2.5rem; padding: 1.25rem;
            border: 1px solid rgba(15, 23, 42, 0.05);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        }
        .tech-card:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 40px 70px -15px rgba(15, 23, 42, 0.08); 
            border-color: #3b82f6; 
        }

        /* Image Viewport Stability (Balanced Ratio) */
        .img-viewport { 
            position: relative; width: 100%; aspect-ratio: 1.1 / 1; 
            background: radial-gradient(circle at center, #ffffff 0%, #f1f5f9 100%); 
            border-radius: 2rem; overflow: hidden; 
            display: flex; align-items: center; justify-content: center; 
        }
        .img-viewport img { width: 65%; object-fit: contain; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.05)); }
        .tech-card:hover .img-viewport img { transform: scale(1.1) rotate(-1deg); }

        /* Typography Control untuk Kerapihan Grid */
        .description-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 2.8rem;
        }
        
        .active-pill { background: #0f172a !important; color: white !important; box-shadow: 0 15px 30px -5px rgba(15, 23, 42, 0.2); }
    </style>
</head>
<body class="text-slate-900">

    @include('nav')

    <header class="relative pt-52 pb-24 px-6 bg-slate-950 overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] -mr-48 -mt-48"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-blue-400">Engineering Grade</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-white leading-none tracking-tighter uppercase italic">
                    KATALOG <span class="text-slate-700">PRODUK</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-lg max-w-xl font-medium leading-relaxed">
                    Peralatan geospasial presisi tinggi dari brand terpercaya dunia untuk hasil pengukuran yang akurat di setiap medan.
                </p>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-20 flex flex-col lg:flex-row gap-16">
        
        <aside class="lg:w-72 space-y-12">
            <div>
                <h3 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 mb-8 px-4">Kategori Utama</h3>
                <nav class="space-y-2">
                    <a href="#" class="active-pill group flex items-center justify-between p-5 rounded-[1.8rem] transition-all">
                        <span class="text-xs font-extrabold uppercase tracking-widest">Semua Alat</span>
                        <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-2"></i>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-5 rounded-[1.8rem] hover:bg-white text-slate-500 hover:text-blue-600 border border-transparent hover:border-slate-100 transition-all">
                        <span class="text-xs font-extrabold uppercase tracking-widest">GNSS RTK</span>
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-600 opacity-0 group-hover:opacity-100 transition-all"></div>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-5 rounded-[1.8rem] hover:bg-white text-slate-500 hover:text-blue-600 border border-transparent hover:border-slate-100 transition-all">
                        <span class="text-xs font-extrabold uppercase tracking-widest">Total Station</span>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-5 rounded-[1.8rem] hover:bg-white text-slate-500 hover:text-blue-600 border border-transparent hover:border-slate-100 transition-all">
                        <span class="text-xs font-extrabold uppercase tracking-widest">LiDAR SLAM</span>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-5 rounded-[1.8rem] hover:bg-white text-slate-500 hover:text-blue-600 border border-transparent hover:border-slate-100 transition-all">
                        <span class="text-xs font-extrabold uppercase tracking-widest">USV & Echosounder</span>
                    </a>
                </nav>
            </div>
        </aside>

        <section class="flex-1">
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
        
        <div class="tech-card group flex flex-col md:flex-row bg-white rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-700 h-full">
            
            <div class="md:w-2/5 relative aspect-square md:aspect-auto bg-[#f8fafc] rounded-[2rem] overflow-hidden flex items-center justify-center p-6 flex-shrink-0">
    <div class="absolute top-4 left-4 z-20">
        <span class="px-2.5 py-1 bg-white/90 backdrop-blur text-slate-900 text-[7px] font-black uppercase tracking-widest rounded-lg shadow-sm">Premium</span>
    </div>
    <!-- Animasi grayscale-0, scale-110, dan transition telah dihapus -->
    <img src="img/product/chcnav-i93.png" alt="i93" class="w-full h-full object-contain">
</div>
            
            <div class="p-6 flex flex-col flex-grow justify-between">
                <div class="space-y-2">
                    <p class="text-[8px] font-black text-blue-600 uppercase tracking-[0.2em]">CHCNAV Geospasial</p>
                    <h3 class="text-xl font-black text-slate-900 leading-tight tracking-tight">i93 Visual IMU RTK</h3>
                    <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-3">
                        Solusi GNSS premium dengan visual stakeout dan dual-camera untuk akurasi tanpa kompromi di setiap medan.
                    </p>
                    
                    <div class="flex gap-2 pt-2">
                        <span class="px-2.5 py-1 bg-slate-50 rounded-lg text-[8px] font-bold text-slate-500 border border-slate-100 flex items-center gap-1.5">
                            <i class="fa-solid fa-camera text-blue-500"></i> Visual AR
                        </span>
                    </div>
                </div>
                
                <div class="mt-6 pt-6 border-t border-slate-50">
    <div class="flex gap-3">
        <a href="https://wa.me/6282123852658?text=Halo%20Tim%20Nusa%20Geospatial,%20saya%20ingin%20mengajukan%20permohonan%20kalibrasi%20untuk%20alat%20survei%20saya.%20Boleh%20diinformasikan%20mengenai%20prosedur,%20estimasi%20waktu,%20dan%20biayanya?" target="_blank" class="flex-[2] bg-slate-900 text-white text-center py-3.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-blue-600 shadow-lg shadow-slate-900/10 transition-all">
            Ajukan Kalibrasi
        </a>
        <a href="{{ url('detailProduk') }}" class="flex-1 bg-white border border-slate-200 text-slate-900 text-center py-3.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-slate-50 transition-all">
            Detail
        </a>
    </div>
</div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Menjaga stabilitas tinggi kartu agar sejajar di setiap baris */
    .tech-card {
        min-height: 320px;
    }
    
    .description-clamp {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
    </main>

    @include('footer')

</body>
</html>