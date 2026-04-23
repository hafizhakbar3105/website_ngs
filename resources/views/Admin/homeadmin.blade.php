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

        /* Efek agar bintang di sebelah kiri ikut menyala saat hover atau checked */
.flex-row-reverse label:hover ~ label,
.flex-row-reverse input:checked ~ label {
    color: #E7D532;
}
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

    <section class="py-24 bg-slate-50 px-6 overflow-hidden border-t border-slate-100">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="space-y-1">
                <div class="w-12 h-1 bg-primary rounded-full"></div>
                <h2 class="text-4xl font-black text-slate-900 tracking-tighter uppercase">Produk <span class="text-primary italic">Unggulan</span></h2>
                <p class="text-slate-500 font-medium">Teknologi pemetaan presisi dari brand kelas dunia</p>
            </div>
            <a href="{{ url('produk') }}" class="text-primary font-black flex items-center gap-2 uppercase tracking-widest text-[11px] border-b-2 border-primary pb-1">
                Lihat Semua Produk <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white rounded-[2.5rem] p-6 border border-slate-200 hover:shadow-2xl transition duration-500 flex flex-col h-full shadow-sm">
                <div class="aspect-square bg-slate-50 rounded-[2rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100">
                    <div class="absolute top-4 left-4 bg-slate-900 text-highlight text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest z-10">Premium Tech</div>
                    <img src="img/products/i93.png" alt="i93" class="w-48 grayscale group-hover:grayscale-0 transition duration-700">
                </div>
                <div class="px-2 flex flex-col flex-grow">
                    <p class="text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-2">CHCNAV GNSS</p>
                    <h3 class="text-xl font-black text-slate-900 mb-2 uppercase tracking-tight">i93 Visual IMU RTK</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-8 flex-grow">Visual stakeout & IMU canggih untuk efisiensi survei profesional maksimal di medan sulit.</p>
                    
                    <a href="{{ url('detailProduk') }}" class="w-full bg-slate-950 text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-2">
                        Detail Alat
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-[2.5rem] p-6 border border-slate-200 hover:shadow-2xl transition duration-500 flex flex-col h-full shadow-sm">
                <div class="aspect-square bg-slate-50 rounded-[2rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100">
                    <div class="absolute top-4 left-4 bg-slate-900 text-highlight text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest z-10">LiDAR System</div>
                    <img src="img/products/mvps1.png" alt="MVP S1" class="w-48 grayscale group-hover:grayscale-0 transition duration-700">
                </div>
                <div class="px-2 flex flex-col flex-grow">
                    <p class="text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-2">Tersus LiDAR</p>
                    <h3 class="text-xl font-black text-slate-900 mb-2 uppercase tracking-tight">Tersus MVP S1</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-8 flex-grow">Akuisisi data 3D real-time dengan colorized point cloud presisi tinggi secara instan.</p>
                    
                    <a href="#" class="w-full bg-slate-950 text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-2">
                        Detail Alat
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-[2.5rem] p-6 border border-slate-200 hover:shadow-2xl transition duration-500 flex flex-col h-full shadow-sm">
                <div class="aspect-square bg-slate-50 rounded-[2rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100">
                    <div class="absolute top-4 left-4 bg-slate-900 text-highlight text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest z-10">Hydrography</div>
                    <img src="img/products/theduck.png" alt="TheDuck" class="w-48 grayscale group-hover:grayscale-0 transition duration-700">
                </div>
                <div class="px-2 flex flex-col flex-grow">
                    <p class="text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-2">USV SYSTEM</p>
                    <h3 class="text-xl font-black text-slate-900 mb-2 uppercase tracking-tight">Tersus TheDuck</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-8 flex-grow">Kapal tanpa awak untuk survei hidrografi presisi tinggi secara otomatis dan aman.</p>
                    
                    <a href="#" class="w-full bg-slate-950 text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-2">
                        Detail Alat
                    </a>
                </div>
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
            
            <div class="flex-none w-[350px] md:w-[450px] snap-center bg-white p-10 rounded-[3.5rem] shadow-2xl space-y-8 border border-white/10">
                <div class="flex justify-between items-start">
                    <div class="flex gap-1 text-primary text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest">April 2026</span>
                </div>
                <p class="text-slate-700 font-medium leading-relaxed italic text-lg">"Proses kalibrasi di NGS sangat transparan. Kami dikirimkan data pengujian sebelum sertifikat fisik diterbitkan. Benar-benar standar teknis yang profesional!"</p>
                <div class="flex items-center gap-5 border-t border-slate-100 pt-8">
                    <div class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl">RN</div>
                    <div>
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-tight">Rahmat Nugraha</h4>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Surveyor - PT. Alam Hijau</p>
                    </div>
                </div>
            </div>

            <div class="flex-none w-[350px] md:w-[450px] snap-center bg-slate-900 p-10 rounded-[3.5rem] shadow-2xl space-y-8 border border-white/5">
                <div class="flex justify-between items-start">
                    <div class="flex gap-1 text-highlight text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-600 uppercase tracking-widest">Maret 2026</span>
                </div>
                <p class="text-blue-50/90 font-medium leading-relaxed italic text-lg">"Alat GNSS i93-nya juara! Visual stakeout sangat membantu tim saya yang baru belajar AR untuk navigasi titik dengan presisi."</p>
                <div class="flex items-center gap-5 border-t border-white/5 pt-8">
                    <div class="w-14 h-14 rounded-2xl bg-white/10 text-highlight flex items-center justify-center font-black text-xl border border-white/10">A</div>
                    <div>
                        <h4 class="text-sm font-black text-white uppercase tracking-tight">Anonym</h4>
                        <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Instansi Pemerintah</p>
                    </div>
                </div>
            </div>

            <div class="flex-none w-[350px] md:w-[450px] snap-center bg-white p-10 rounded-[3.5rem] shadow-2xl space-y-8 border border-white/10">
                <div class="flex justify-between items-start">
                    <div class="flex gap-1 text-primary text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Februari 2026</span>
                </div>
                <p class="text-slate-700 font-medium leading-relaxed italic text-lg">"Technical Support-nya luar biasa. Saat kami kesulitan mengolah data LiDAR, tim teknis NGS membantu via remote session sampai tuntas malam itu juga."</p>
                <div class="flex items-center gap-5 border-t border-slate-100 pt-8">
                    <div class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl">HB</div>
                    <div>
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-tight">Hendra Bakti</h4>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Direktur Teknis PT. GeoData</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-16 text-center">
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
<!-- Rating Bintang -->
<div>
    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3 text-center">Tingkat Presisi / Kepuasan</label>
    <div class="flex flex-row-reverse justify-center gap-2">
        <!-- Input diatur reverse agar teknik CSS hover-sibling bekerja -->
        <input type="radio" id="star5" name="rating" value="5" class="hidden peer" />
        <label for="star5" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors">
            <i class="fa-solid fa-star"></i>
        </label>

        <input type="radio" id="star4" name="rating" value="4" class="hidden peer" />
        <label for="star4" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors">
            <i class="fa-solid fa-star"></i>
        </label>

        <input type="radio" id="star3" name="rating" value="3" class="hidden peer" />
        <label for="star3" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors">
            <i class="fa-solid fa-star"></i>
        </label>

        <input type="radio" id="star2" name="rating" value="2" class="hidden peer" />
        <label for="star2" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors">
            <i class="fa-solid fa-star"></i>
        </label>

        <input type="radio" id="star1" name="rating" value="1" class="hidden peer" />
        <label for="star1" class="cursor-pointer text-2xl text-slate-300 peer-checked:text-[#E7D532] hover:text-[#E7D532] transition-colors">
            <i class="fa-solid fa-star"></i>
        </label>
    </div>
</div>
            <form action="#" method="POST" class="px-8 py-8 space-y-5">
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Nama Lengkap</label>
                    <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#043978] focus:ring-1 focus:ring-[#043978] outline-none transition-all text-sm font-medium" placeholder="Contoh: Rahmat Nugraha">
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Instansi / Perusahaan</label>
                    <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#043978] focus:ring-1 focus:ring-[#043978] outline-none transition-all text-sm font-medium" placeholder="PT. Alam Hijau">
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Masukan Teknis</label>
                    <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#043978] focus:ring-1 focus:ring-[#043978] outline-none transition-all text-sm font-medium" placeholder="Tuliskan pengalaman teknis Anda menggunakan produk kami..."></textarea>
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
</body>
</html>