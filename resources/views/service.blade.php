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
                    OUR <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-300 italic">SOLUTIONS</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-xl font-medium leading-relaxed max-w-2xl">
                    Lebih dari sekadar penyedia alat, kami menghadirkan ekosistem teknis yang menjamin setiap koordinat data Anda memiliki tingkat presisi dan reliabilitas tertinggi.
                </p>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 -mt-16 relative z-20 pb-32">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="service-card group">
                <div class="p-12 space-y-10 flex-grow">
                    <div class="icon-box group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-satellite-dish"></i>
                    </div>
                    <div class="space-y-5">
                        <h2 class="text-3xl font-black text-slate-950 leading-tight uppercase tracking-tighter">Instrumen <br>Presisi Tinggi</h2>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Distribusi resmi teknologi geospasial mutakhir mulai dari GNSS RTK, Total Station, hingga sistem LiDAR SLAM dan Drone VTOL.
                        </p>
                    </div>
                    <div class="space-y-4 pt-4 border-t border-slate-50">
                        <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                            <i class="fa-solid fa-circle-check text-orange-500"></i> Konsultasi Geodesi
                        </div>
                        <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                            <i class="fa-solid fa-circle-check text-orange-500"></i> Global Brand Partner
                        </div>
                    </div>
                </div>
                <div class="p-12 pt-0">
                    <a href="{{ route('produk.index') }}" class="group flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-5 rounded-3xl text-[10px] font-black uppercase tracking-[0.2em] hover:brightness-110 hover:shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] shadow-2xl transition-all">
                        View Inventory <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2"></i>
                    </a>
                </div>
            </div>

            <div class="service-card group">
                <div class="p-12 space-y-10 flex-grow">
                    <div class="icon-box group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div class="space-y-5">
                        <h2 class="text-3xl font-black text-slate-950 leading-tight uppercase tracking-tighter">Kalibrasi & <br>Sertifikasi</h2>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Memastikan setiap instrumen tetap berada pada standar akurasi industri melalui proses pengujian ketat untuk keandalan jangka panjang.
                        </p>
                    </div>
                    <div class="space-y-4 pt-4 border-t border-slate-50">
                        <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                            <i class="fa-solid fa-circle-check text-orange-500"></i> Sertifikat Resmi
                        </div>
                        <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                            <i class="fa-solid fa-circle-check text-orange-500"></i> Pengujian Akurasi
                        </div>
                    </div>
                </div>
                <div class="p-12 pt-0">
                    <a href="https://wa.me/6282123852658?text=Halo%20Admin%20K Survey,%20saya%20ingin%20mendaftarkan%20alat%20saya%20untuk%20proses%20Kalibrasi/Sertifikasi." 
                       target="_blank"
                       class="group flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-5 rounded-3xl text-[10px] font-black uppercase tracking-[0.2em] hover:brightness-110 hover:shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] shadow-2xl transition-all">
                        Register Device <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2"></i>
                    </a>
                </div>
            </div>

            <div class="service-card group">
                <div class="p-12 space-y-10 flex-grow">
                    <div class="icon-box group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div class="space-y-5">
                        <h2 class="text-3xl font-black text-slate-950 leading-tight uppercase tracking-tighter">Technical <br>Enablement</h2>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Pendampingan operasional intensif dan pelatihan pengolahan data pasca-pembelian untuk memaksimalkan produktivitas tim Anda.
                        </p>
                    </div>
                    <div class="space-y-4 pt-4 border-t border-slate-50">
                        <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                            <i class="fa-solid fa-circle-check text-orange-500"></i> On-Site Training
                        </div>
                        <div class="flex items-center gap-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">
                            <i class="fa-solid fa-circle-check text-orange-500"></i> Data Processing
                        </div>
                    </div>
                </div>
                <div class="p-12 pt-0">
                    <a href="https://wa.me/6282123852658?text=Halo%20K Survey,%20saya%20membutuhkan%20layanan%20Technical%20Enablement%20atau%20Pelatihan%20Pengolahan%20Data." 
                       target="_blank"
                       class="group flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-5 rounded-3xl text-[10px] font-black uppercase tracking-[0.2em] hover:brightness-110 hover:shadow-[0_20px_40px_-10px_rgba(255,106,26,0.5)] shadow-2xl transition-all">
                        Talk to Experts <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <section class="bg-slate-50 py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="space-y-8">
                    <h2 class="text-5xl font-black text-slate-950 leading-none tracking-tighter normal-case">Why Choose <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-500">K Survey?</span></h2>
                    <p class="text-slate-500 leading-relaxed font-medium">
                        Setiap solusi yang kami berikan didorong oleh keahlian lebih dari 10 tahun di bidang geospasial.Kami mengombinasikan perangkat survey terbaik terbaik dengan dukungan teknis dan pelayanan terbaik untuk anda.
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
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-br from-orange-600/20 to-amber-400/10 rounded-[4rem] blur-2xl"></div>
                    <div class="relative bg-white p-10 rounded-[4rem] shadow-sm border border-orange-100 flex items-center gap-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-600 to-orange-500 rounded-3xl flex items-center justify-center text-white text-3xl shadow-lg shadow-orange-300">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-black text-slate-900 uppercase">Trusted by Professionals</h4>
                            <p class="text-xs text-slate-500 font-medium">Dukungan penuh tenaga ahli berpengalaman lebih dari 10 tahun di bidang geospasial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

</body>
</html>