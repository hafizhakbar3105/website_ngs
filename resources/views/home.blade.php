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
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.3); }
        .tech-gradient { background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); }
        .blue-glow { box-shadow: 0 0 40px -10px rgba(59, 130, 246, 0.5); }
        .bento-card:hover { transform: translateY(-5px); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900 overflow-x-hidden">

    @include('nav')

    <section class="relative min-h-screen flex items-center pt-20 tech-gradient overflow-hidden">
        <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-blue-500/20 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-indigo-500/10 rounded-full blur-[100px]"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold tracking-widest uppercase">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    Geospatial Excellence 
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] tracking-tight">
                    Precision Data,<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400 italic">Trusted Solutions</span> 
                </h1>
                <p class="text-slate-400 text-lg leading-relaxed max-w-lg">
                    Menghadirkan solusi pengukuran modern berbasis <span class="text-white">GNSS, LiDAR SLAM, dan Sistem Pemetaan Drone</span> untuk efisiensi lapangan maksimal
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="bg-blue-600 blue-glow text-white px-8 py-4 rounded-2xl font-bold flex items-center gap-3 hover:bg-blue-500 transition-all group">
                        Mulai Konsultasi <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </a>
                    <a href="#" class="glass bg-white/5 text-white px-8 py-4 rounded-2xl font-bold hover:bg-white/10 transition">Lihat Katalog</a>
                </div>
            </div>
            
            <div class="relative hidden lg:block">
                <div class="absolute inset-0 bg-blue-500/20 blur-[100px]"></div>
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=800" alt="Tech" class="relative rounded-[2rem] border border-white/10 shadow-2xl grayscale hover:grayscale-0 transition duration-700">
                <div class="absolute -bottom-6 -left-6 glass p-6 rounded-2xl shadow-xl">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-1">Akurasi Perangkat</p>
                    <p class="text-2xl font-extrabold text-slate-800">99.9% Precision</p>
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

    <section class="py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-4">Layanan Terintegrasi</h2>
                    <p class="text-slate-500">Kami memberikan ekosistem lengkap mulai dari pengadaan alat hingga dukungan teknis pasca-jual</p>
                </div>
                <div class="h-px flex-1 bg-slate-200 mx-8 hidden md:block"></div>
                <p class="text-blue-600 font-bold uppercase tracking-widest text-xs">Our Services </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 bento-card bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col justify-between min-h-[400px]">
                    <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-blue-200">
                        <i class="fa-solid fa-satellite-dish"></i>
                    </div>
                    <div>
                        <h3 class="text-3xl font-extrabold mb-4">Penjualan Alat Survei</h3>
                        <p class="text-slate-500 leading-relaxed mb-6">Distribusi brand ternama dunia untuk GNSS, Total Station, dan Teknologi LiDAR terbaru</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-tighter">GNSS RTK</span>
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-tighter">LiDAR SLAM</span>
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-tighter">Drone VTOL</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bg-slate-900 p-10 rounded-[2.5rem] shadow-xl flex flex-col justify-between text-white">
                    <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-blue-400 text-2xl border border-white/10">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-extrabold mb-2 text-white">Kalibrasi Profesional</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Memastikan performa alat sesuai standar industri global</p>
                    </div>
                </div>

                <div class="md:col-span-3 bento-card bg-blue-50 border border-blue-100 p-10 rounded-[2.5rem] flex flex-col md:flex-row items-center gap-10">
                    <div class="flex-1">
                        <h3 class="text-2xl font-extrabold mb-2">After Sales & Pelatihan</h3>
                        <p class="text-slate-600">Pendampingan teknis dan pengolahan data untuk produktivitas tim Anda di lapangan</p>
                    </div>
                    <a href="#" class="bg-white text-slate-900 px-8 py-4 rounded-2xl font-extrabold shadow-sm hover:shadow-md transition">Jadwalkan Training</a>
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

    <section class="py-24 bg-[#f8fafc] px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-4">Produk Unggulan </h2>
                    <p class="text-slate-500">Jelajahi teknologi pemetaan terbaru dari brand kelas dunia</p>
                </div>
                <a href="#" class="text-blue-600 font-bold flex items-center gap-2 hover:gap-4 transition-all">
                    Lihat Semua Produk <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-white rounded-[2rem] p-4 border border-slate-100 hover:shadow-2xl transition duration-500">
                    <div class="aspect-square bg-slate-50 rounded-[1.5rem] mb-6 overflow-hidden flex items-center justify-center relative">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Premium </div>
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=400" alt="CHCNAV i93" class="w-48 group-hover:scale-110 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="px-4 pb-4">
                        <p class="text-blue-600 text-[10px] font-extrabold uppercase tracking-widest mb-2">CHCNAV GNSS </p>
                        <h3 class="text-xl font-extrabold text-slate-800 mb-2">i93 Visual IMU RTK </h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6">Visual stakeout & IMU canggih untuk survei profesional</p>
                        <a href="https://wa.me/..." class="w-full bg-slate-900 text-white py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-blue-600 transition">
                            <i class="fa-brands fa-whatsapp"></i> Tanya Spesifikasi 
                        </a>
                    </div>
                </div>

                <div class="group bg-white rounded-[2rem] p-4 border border-slate-100 hover:shadow-2xl transition duration-500">
                    <div class="aspect-square bg-slate-50 rounded-[1.5rem] mb-6 overflow-hidden flex items-center justify-center relative">
                        <div class="absolute top-4 left-4 bg-indigo-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Mobile Mapping </div>
                        <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&q=80&w=400" alt="LiDAR SLAM" class="w-48 group-hover:scale-110 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="px-4 pb-4">
                        <p class="text-blue-600 text-[10px] font-extrabold uppercase tracking-widest mb-2">LiDAR SLAM SYSTEM </p>
                        <h3 class="text-xl font-extrabold text-slate-800 mb-2">Tersus MVP S1 </h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6">Akuisisi data 3D real-time dengan colorized point cloud</p>
                        <a href="https://wa.me/..." class="w-full bg-slate-900 text-white py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-blue-600 transition">
                            <i class="fa-brands fa-whatsapp"></i> Tanya Spesifikasi 
                        </a>
                    </div>
                </div>

                <div class="group bg-white rounded-[2rem] p-4 border border-slate-100 hover:shadow-2xl transition duration-500">
                    <div class="aspect-square bg-slate-50 rounded-[1.5rem] mb-6 overflow-hidden flex items-center justify-center relative">
                        <div class="absolute top-4 left-4 bg-cyan-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">Bathymetric</div>
                        <img src="https://images.unsplash.com/photo-1567016376408-0226e4d0c1ea?auto=format&fit=crop&q=80&w=400" alt="TheDuck USV" class="w-48 group-hover:scale-110 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="px-4 pb-4">
                        <p class="text-blue-600 text-[10px] font-extrabold uppercase tracking-widest mb-2">USV SYSTEM</p>
                        <h3 class="text-xl font-extrabold text-slate-800 mb-2">Tersus TheDuck</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6">Kapal tanpa awak untuk survei hidrografi presisi tinggi</p>
                        <a href="https://wa.me/..." class="w-full bg-slate-900 text-white py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-blue-600 transition">
                            <i class="fa-brands fa-whatsapp"></i> Tanya Spesifikasi 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

</body>
</html>