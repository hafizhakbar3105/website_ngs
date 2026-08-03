<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Expertise & Services | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
        
        /* Ultra Smooth Transition */
        * { transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }

        .service-card {
            background: white;
            border: 1px solid rgba(15, 23, 42, 0.04);
            border-radius: 4rem;
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
            z-index: 1;
        }
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 40px 80px -25px rgba(255, 106, 26, 0.25);
            border-color: #ff6a1a;
        }
        .icon-box {
            width: 90px;
            height: 90px;
            border-radius: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top left, #fff7ed, #ffe4cc);
            color: #c9490f;
            font-size: 2.25rem;
            box-shadow: inset 0 2px 4px rgba(255,255,255,1);
        }
        .bg-mesh {
            background-color: #170902;
            background-image: 
                radial-gradient(at 0% 0%, hsla(20,100%,20%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(30,100%,25%,1) 0, transparent 50%);
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden">

    @include('nav')

    <header class="relative pt-60 pb-32 px-6 bg-mesh overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600 z-20"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="max-w-4xl space-y-8">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-orange-600 to-orange-500 shadow-[0_0_30px_-5px_rgba(255,106,26,0.6)]">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-white">Integrated Ecosystem</span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                    OUR <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-400 -skew-x-12">
    SOLUTIONS
</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-xl font-medium leading-relaxed max-w-2xl">
                    Lebih dari sekadar penyedia alat, kami menghadirkan ekosistem teknis yang menjamin setiap koordinat data Anda memiliki tingkat presisi dan reliabilitas tertinggi.
                </p>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 -mt-16 relative z-20 pb-32">
    
    <!-- ANIMASI BACKGROUND BARU: TERRAIN POLYGON ELEVATION & FLOATING LIGHTNODES (BEDA DARI RADAR/GRID) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10">
        <!-- 1. Vektor Polygon Topografi 3D Melayang Lambat (Bentuk Lahan Digital) -->
        <svg class="absolute top-0 right-0 w-[600px] h-[600px] opacity-15 animate-[pulse_6s_ease-in-out_infinite]" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 150 L200 80 L320 180 L250 300 L120 280 Z" stroke="#C9490F" stroke-width="1.5" stroke-dasharray="4 4" fill="rgba(201, 73, 15, 0.03)" />
            <path d="M200 80 L250 300 M100 150 L320 180" stroke="#FFB347" stroke-width="1" opacity="0.6" />
        </svg>

        <svg class="absolute -bottom-10 -left-10 w-[500px] h-[500px] opacity-15 animate-[pulse_9s_ease-in-out_infinite_2s]" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M80 120 L220 50 L350 150 L280 320 L100 250 Z" stroke="#C9490F" stroke-width="1.5" fill="rgba(255, 179, 71, 0.04)" />
            <path d="M220 50 L280 320 M80 120 L350 150" stroke="#C9490F" stroke-width="1" opacity="0.5" />
        </svg>

        <!-- 2. Dual Layer Organic Glow (Pendaran Warna Lahan Warm Glow) -->
        <div class="absolute top-1/3 right-1/4 w-[450px] h-[450px] bg-gradient-to-br from-orange-500/15 via-amber-400/10 to-transparent rounded-full blur-[90px]"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[400px] h-[400px] bg-gradient-to-tr from-orange-600/15 via-amber-300/10 to-transparent rounded-full blur-[100px]"></div>

        <!-- 3. Floating Light Spheres (Partikel Cahaya Lahan Mengambang Naik-Turun) -->
        <div class="absolute top-10 left-1/3 w-3 h-3 bg-orange-500/40 rounded-full blur-[1px] animate-[bounce_7s_infinite]"></div>
        <div class="absolute bottom-12 right-1/3 w-2.5 h-2.5 bg-amber-400/50 rounded-full blur-[1px] animate-[bounce_9s_infinite_1.5s]"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 relative z-10">
        
        <!-- CARD 1: INSTRUMEN PRESISI TINGGI -->
        <div class="service-card group bg-white/90 backdrop-blur-md rounded-[3rem] border border-slate-100 shadow-xl hover:border-orange-500 hover:shadow-2xl hover:shadow-orange-500/15 transition-all duration-500 flex flex-col justify-between overflow-hidden">
            <div class="p-12 space-y-10 flex-grow">
                <div class="icon-box w-20 h-20 rounded-3xl bg-orange-50 text-orange-600 flex items-center justify-center text-3xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all shadow-sm">
                    <i class="fa-solid fa-satellite-dish"></i>
                </div>
                <div class="space-y-5">
                    <h2 class="text-3xl font-black text-slate-950 leading-tight uppercase tracking-tighter">Instrumen <br>Presisi Tinggi</h2>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">
                        Distribusikan resmi teknologi geospasial mutakhir mulai dari GNSS RTK, Total Station, hingga sistem LiDAR SLAM dan Drone VTOL.
                    </p>
                </div>
                <div class="space-y-4 pt-4 border-t border-slate-100">
                    <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <i class="fa-solid fa-circle-check text-orange-500"></i> Konsultasi Geodesi
                    </div>
                    <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <i class="fa-solid fa-circle-check text-orange-500"></i> Global Brand Partner
                    </div>
                </div>
            </div>
            <div class="p-12 pt-0">
                <a href="{{ route('produk.index') }}" class="group/btn flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-5 rounded-3xl text-[10px] font-black uppercase tracking-[0.2em] hover:brightness-110 hover:shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] shadow-2xl transition-all">
                    View Inventory <i class="fa-solid fa-arrow-right-long group-hover/btn:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- CARD 2: KALIBRASI & SERTIFIKASI -->
        <div class="service-card group bg-white/90 backdrop-blur-md rounded-[3rem] border border-slate-100 shadow-xl hover:border-orange-500 hover:shadow-2xl hover:shadow-orange-500/15 transition-all duration-500 flex flex-col justify-between overflow-hidden">
            <div class="p-12 space-y-10 flex-grow">
                <div class="icon-box w-20 h-20 rounded-3xl bg-orange-50 text-orange-600 flex items-center justify-center text-3xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all shadow-sm">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="space-y-5">
                    <h2 class="text-3xl font-black text-slate-950 leading-tight uppercase tracking-tighter">Kalibrasi & <br>Sertifikasi</h2>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">
                        Memastikan setiap instrumen tetap berada pada standar akurasi industri melalui proses pengujian ketat untuk keandalan jangka panjang.
                    </p>
                </div>
                <div class="space-y-4 pt-4 border-t border-slate-100">
                    <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <i class="fa-solid fa-circle-check text-orange-500"></i> Sertifikat Resmi
                    </div>
                    <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <i class="fa-solid fa-circle-check text-orange-500"></i> Pengujian Akurasi
                    </div>
                </div>
            </div>
            <div class="p-12 pt-0">
                <a href="https://wa.me/6282123852658?text=Halo%20Admin%20K%20Survey,%20saya%20ingin%20mendaftarkan%20alat%20saya%20untuk%20proses%20Kalibrasi/Sertifikasi." 
                   target="_blank"
                   class="group/btn flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-5 rounded-3xl text-[10px] font-black uppercase tracking-[0.2em] hover:brightness-110 hover:shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] shadow-2xl transition-all">
                    Register Device <i class="fa-solid fa-arrow-right-long group-hover/btn:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- CARD 3: TECHNICAL ENABLEMENT -->
        <div class="service-card group bg-white/90 backdrop-blur-md rounded-[3rem] border border-slate-100 shadow-xl hover:border-orange-500 hover:shadow-2xl hover:shadow-orange-500/15 transition-all duration-500 flex flex-col justify-between overflow-hidden">
            <div class="p-12 space-y-10 flex-grow">
                <div class="icon-box w-20 h-20 rounded-3xl bg-orange-50 text-orange-600 flex items-center justify-center text-3xl group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all shadow-sm">
                    <i class="fa-solid fa-user-graduate"></i>
                </div>
                <div class="space-y-5">
                    <h2 class="text-3xl font-black text-slate-950 leading-tight uppercase tracking-tighter">Technical <br>Enablement</h2>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">
                        Pendampingan operasional intensif dan pelatihan pengolahan data pasca-pembelian untuk memaksimalkan produktivitas tim Anda.
                    </p>
                </div>
                <div class="space-y-4 pt-4 border-t border-slate-100">
                    <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <i class="fa-solid fa-circle-check text-orange-500"></i> On-Site Training
                    </div>
                    <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                        <i class="fa-solid fa-circle-check text-orange-500"></i> Data Processing
                    </div>
                </div>
            </div>
            <div class="p-12 pt-0">
                <a href="https://wa.me/6282123852658?text={{ urlencode('Halo K Survey, saya membutuhkan layanan Technical Enablement atau Pelatihan Pengolahan Data.') }}" 
                   target="_blank"
                   class="group/btn flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-5 rounded-3xl text-[10px] font-black uppercase tracking-[0.2em] hover:brightness-110 hover:shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] shadow-2xl transition-all">
                    Talk to Experts <i class="fa-solid fa-arrow-right-long group-hover/btn:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>

    </div>
</main>

    <section class="relative bg-slate-50 py-32 px-6 overflow-hidden">
    
    <!-- ANIMASI BACKGROUND BARU: TOPOGRAPHIC ELEVATION CONTOUR WAVES (TIDAK SAMA DENGAN SECTION LAIN) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- 1. Wave Contour Lines (Garis Gelombang Kontur Elevasi Tanah yang Mengalir Halus) -->
        <svg class="absolute -top-10 -right-10 w-[700px] h-[700px] opacity-25" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,100 C150,200 350,50 500,150" stroke="#C9490F" stroke-width="1.5" class="animate-[pulse_5s_ease-in-out_infinite]" />
            <path d="M0,180 C180,280 320,120 500,220" stroke="#FFB347" stroke-width="1.5" class="animate-[pulse_7s_ease-in-out_infinite_1s]" />
            <path d="M0,260 C120,340 380,200 500,300" stroke="#C9490F" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite_2s]" />
            <path d="M0,340 C200,420 300,280 500,380" stroke="#FFB347" stroke-width="1.5" class="animate-[pulse_8s_ease-in-out_infinite_0.5s]" />
        </svg>

        <!-- 2. Dual Elevation Blur Light (Pendaran Warna Gradasi Elevasi) -->
        <div class="absolute top-1/4 -right-20 w-[500px] h-[500px] bg-gradient-to-br from-orange-500/15 via-amber-300/10 to-transparent rounded-full blur-[120px] animate-[pulse_6s_ease-in-out_infinite]"></div>
        <div class="absolute bottom-0 -left-20 w-[550px] h-[550px] bg-gradient-to-tr from-amber-400/15 via-orange-600/10 to-transparent rounded-full blur-[130px]"></div>

        <!-- 3. Elevation Height Marker (Aksen Label Elevasi Geospasial) -->
        <div class="absolute top-20 left-12 flex items-center gap-2 opacity-30">
            <span class="w-1.5 h-1.5 rounded-full bg-orange-600 animate-ping"></span>
            
        </div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            
            <!-- LEFT CONTENT -->
            <div class="space-y-8">
                <h2 class="text-5xl font-black text-slate-950 leading-none tracking-tighter normal-case">
                    Why Choose <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-500">K Survey?</span>
                </h2>
                <p class="text-slate-500 leading-relaxed font-medium">
                    Setiap solusi yang kami berikan didorong oleh keahlian lebih dari 10 tahun di bidang geospasial. Kami mengombinasikan perangkat survey terbaik dengan dukungan teknis dan pelayanan terbaik untuk Anda.
                </p>
                <div class="flex gap-12 pt-4">
                    <div class="space-y-1">
                        <p class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-500 leading-none">100%</p>
                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em]">Genuine Support</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-500 leading-none">24/7</p>
                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em]">Consultation Access</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT CARD WITH FLOATING SHADOW -->
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-br from-orange-600/20 to-amber-400/10 rounded-[4rem] blur-2xl group-hover:scale-105 transition-transform duration-700"></div>
                <div class="relative bg-white/90 backdrop-blur-md p-10 rounded-[4rem] shadow-sm border border-orange-100 flex items-center gap-8 hover:shadow-2xl hover:border-orange-300 transition-all duration-500">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-600 to-orange-500 rounded-3xl flex items-center justify-center text-white text-3xl shadow-lg shadow-orange-300 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500 flex-shrink-0">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-black text-slate-900 uppercase">Trusted by Professionals</h4>
                        <p class="text-xs text-slate-500 font-medium leading-relaxed mt-1">Dukungan penuh tenaga ahli berpengalaman lebih dari 10 tahun di bidang geospasial.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    @include('footer')

</body>
</html>