<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang & Kontak | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
        
        /* Transition Halus */
        * { transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); }

        .input-focus:focus {
            background-color: white !important;
            box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3) !important;
        }

        .bg-pattern {
            background-color: #020617;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden">

    @include('nav')

    <header class="relative pt-52 pb-32 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                <div class="lg:col-span-7 space-y-10">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-50 border border-blue-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-600">Profil Perusahaan</span>
                    </div>
                    <h1 class="text-6xl md:text-8xl font-black text-slate-950 leading-[0.85] tracking-tighter uppercase">
                        KEAHLIAN <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 italic">TERUKUR</span>
                    </h1>
                    <p class="text-slate-500 text-lg md:text-xl font-medium leading-relaxed max-w-2xl">
                        Nusa Geospatial Solution adalah mitra strategis penyedia teknologi survei yang berfokus pada akurasi data lapangan. Kami mengintegrasikan perangkat keras kelas dunia dengan pendampingan teknis ahli
                    </p>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-12 pt-10 border-t border-slate-100">
                        <div class="space-y-1">
                            <h4 class="text-3xl font-black text-slate-900 leading-none">Geospasial</h4>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Spesialisasi Utama</p>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-3xl font-black text-slate-900 leading-none">Teruji</h4>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Standar Akurasi</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-5 relative">
    <!-- Container Logo Utama -->
    <div class="flex items-center justify-center p-12 bg-white rounded-3xl border border-slate-100 shadow-xl min-h-[350px]">
        <img src="img/logo.png" 
             alt="Logo NusaGeo" 
             class="w-full h-auto max-h-40 object-contain">
    </div>

    <!-- Badge Teks Statis -->
    <div class="absolute -bottom-4 -right-4 bg-slate-950 p-7 rounded-[2rem] text-white shadow-2xl max-w-[220px] border-4 border-white">
        <p class="text-[10px] font-black leading-relaxed uppercase tracking-[0.15em]">
            Mendedikasikan presisi untuk setiap koordinat di Indonesia
        </p>
    </div>
</div>
            </div>
        </div>
    </header>

    <section class="py-32 bg-pattern">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="group p-12 rounded-[4rem] bg-white/5 border border-white/10 backdrop-blur-xl space-y-8 hover:bg-white/10 transition-all">
                    <div class="w-16 h-16 rounded-3xl bg-blue-600 flex items-center justify-center text-white text-2xl">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-blue-400 font-black text-xs uppercase tracking-[0.4em]">Visi Kami</h3>
                        <p class="text-3xl font-bold text-white leading-tight tracking-tight">
                            Menjadi tolok ukur utama dalam ekosistem geospasial nasional melalui inovasi teknologi dan integritas data
                        </p>
                    </div>
                </div>

                <div class="p-12 rounded-[4rem] bg-blue-600 space-y-10 shadow-2xl shadow-blue-600/20">
                    <h3 class="text-blue-200 font-black text-xs uppercase tracking-[0.4em]">Misi Kami</h3>
                    <div class="space-y-8">
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-blue-400/50 leading-none">01</span>
                            <p class="text-lg font-bold text-white leading-tight">Menyediakan akses instrumen survei dengan teknologi sensor paling mutakhir</p>
                        </div>
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-blue-400/50 leading-none">02</span>
                            <p class="text-lg font-bold text-white leading-tight">Menjamin keabsahan data melalui layanan kalibrasi perangkat yang tersertifikasi</p>
                        </div>
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-blue-400/50 leading-none">03</span>
                            <p class="text-lg font-bold text-white leading-tight">Membangun kompetensi teknisi lapangan melalui edukasi dan dukungan teknis berkelanjutan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-32 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-24">
            
            <div class="lg:col-span-5 space-y-16">
                <div class="space-y-6">
                    <h2 class="text-5xl font-black text-slate-950 tracking-tighter uppercase leading-none">Hubungi <br><span class="text-blue-600 italic">Kami</span></h2>
                    <p class="text-slate-500 font-medium text-lg leading-relaxed">Punya pertanyaan teknis atau butuh penawaran resmi? Tim ahli kami siap membantu Anda</p>
                </div>

                <div class="space-y-10">
                    <div class="flex items-start gap-8 group">
                        <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center text-blue-600 text-xl border border-slate-100 group-hover:bg-blue-600 group-hover:text-white transition-all"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Lokasi Kantor</h5>
                            <p class="text-sm font-bold text-slate-900 leading-relaxed">Jl. Contoh Alamat No. 123,<br>Kota Sukabumi, Jawa Barat</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-8 group">
                        <div class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center text-blue-600 text-xl border border-slate-100 group-hover:bg-blue-600 group-hover:text-white transition-all"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Email Resmi</h5>
                            <p class="text-sm font-bold text-slate-900">info@nusageo.com</p>
                        </div>
                    </div>
                    <a href="https://wa.me/..." class="flex items-start gap-8 group">
                        <div class="w-14 h-14 rounded-2xl bg-green-500 flex items-center justify-center text-white text-xl shadow-lg shadow-green-100 group-hover:rotate-12 transition-transform"><i class="fa-brands fa-whatsapp"></i></div>
                        <div>
                            <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">WhatsApp Chat</h5>
                            <p class="text-sm font-bold text-slate-900 group-hover:text-blue-600 transition-colors">+62 812-3456-7890</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-7 bg-white rounded-[4rem] border border-slate-100 p-12 md:p-16 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -mr-16 -mt-16"></div>
                
                <form action="#" class="relative z-10 space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Nama Lengkap</label>
                            <input type="text" class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Instansi / Perusahaan</label>
                            <input type="text" class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all" placeholder="Nama organisasi">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Layanan yang Dibutuhkan</label>
                        <select class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all appearance-none cursor-pointer">
                            <option>Penjualan Alat Survei</option>
                            <option>Layanan Kalibrasi Alat</option>
                            <option>Dukungan Teknis & Pelatihan</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Detail Kebutuhan</label>
                        <textarea rows="4" class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all resize-none" placeholder="Ceritakan proyek atau kebutuhan alat Anda..."></textarea>
                    </div>
                    <button type="submit" class="group flex items-center justify-center gap-3 w-full bg-slate-950 text-white py-6 rounded-3xl font-black uppercase tracking-[0.2em] hover:bg-blue-600 transition-all shadow-2xl shadow-slate-900/10">
                        Kirim Pesan <i class="fa-solid fa-paper-plane group-hover:translate-x-2 group-hover:-translate-y-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    @include('footer')

</body>
</html>