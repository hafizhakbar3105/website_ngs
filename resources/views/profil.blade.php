<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Tentang Kami | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
        * { transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
        .input-focus:focus {
            background-color: white !important;
            box-shadow: 0 10px 25px -5px rgba(255, 106, 26, 0.15);
            border: 1px solid rgba(255, 106, 26, 0.4) !important;
        }
        .bg-pattern {
            background-color: #170902;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden">

    @include('nav')

    <header class="relative pt-52 pb-32 px-6 overflow-hidden">
        <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-orange-500/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                <div class="lg:col-span-7 space-y-10">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-orange-600 to-orange-500 shadow-[0_0_30px_-5px_rgba(255,106,26,0.6)]">
                        <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-white">Profil Perusahaan</span>
                    </div>
                    <h1 class="text-6xl md:text-8xl font-black text-slate-950 leading-[0.85] tracking-tighter uppercase">
                        MITRA <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-400 italic">TERPERCAYA</span>
                    </h1>
                    <p class="text-slate-500 text-lg md:text-xl font-medium leading-relaxed max-w-2xl">
                        <span class="font-bold text-slate-900">K Survey</span> merupakan trusted reseller produk survei dan pemetaan dari berbagai brand ternama seperti CHC, Hi-Target, Tersus, Ruide, Topcon, ComNav, hingga Garmin. Kami berkomitmen menghadirkan produk geospasial yang presisi, tepercaya, dan mampu mendukung kinerja profesional Anda secara optimal.
                    </p>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-12 pt-10 border-t border-orange-100">
                        <div class="space-y-1">
                            <h4 class="text-3xl font-black text-slate-900 leading-none">Deliver Best</h4>
                            <p class="text-[10px] font-black text-orange-500 uppercase tracking-widest">Product Survey in Indonesia</p>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-3xl font-black text-slate-900 leading-none">Kualitas</h4>
                            <p class="text-[10px] font-black text-orange-500 uppercase tracking-widest">Brand Terpercaya</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-5 relative">
                    <div class="flex items-center justify-center p-12 bg-white rounded-3xl border-2 border-orange-100 shadow-xl shadow-orange-500/10 min-h-[350px]">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo NusaGeo" class="w-full h-auto max-h-40 object-contain">
                    </div>

                    <div class="absolute -bottom-4 -right-4 bg-gradient-to-br from-orange-600 to-orange-500 p-7 rounded-[2rem] text-white shadow-2xl shadow-orange-500/40 max-w-[260px] border-4 border-white">
                        <p class="text-[10px] font-black leading-relaxed uppercase tracking-[0.15em]">
                            “Precision Data, Trusted Solution” - Solusi alat survei berkualitas dengan harga terjangkau.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-32 bg-pattern relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- VISI -->
                <div class="group p-12 rounded-[4rem] bg-white/5 border border-orange-500/20 backdrop-blur-xl space-y-8 hover:bg-white/10 hover:border-orange-500/40 transition-all">
                    <div class="w-16 h-16 rounded-3xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white text-2xl shadow-lg shadow-orange-500/30">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-orange-400 font-black text-xs uppercase tracking-[0.4em]">Visi Kami</h3>
                        <p class="text-3xl font-bold text-white leading-tight tracking-tight">
                            Menjadi partner terpercaya untuk kebutuhan alat survei dan pemetaan berkualitas dengan harga yang tetap terjangkau.
                        </p>
                    </div>
                </div>

                <!-- MISI -->
                <div class="p-12 rounded-[4rem] bg-gradient-to-br from-orange-600 to-orange-500 space-y-10 shadow-2xl shadow-orange-600/30">
                    <h3 class="text-orange-100 font-black text-xs uppercase tracking-[0.4em]">Misi Kami</h3>
                    <div class="space-y-6">
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-white/40 leading-none">01</span>
                            <p class="text-lg font-bold text-white leading-tight">Menyediakan alat survei dan pemetaan berkualitas dari brand terpercaya.</p>
                        </div>
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-white/40 leading-none">02</span>
                            <p class="text-lg font-bold text-white leading-tight">Memberikan harga kompetitif dengan tetap menjaga kualitas.</p>
                        </div>
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-white/40 leading-none">03</span>
                            <p class="text-lg font-bold text-white leading-tight">Memberikan pelayanan yang cepat, ramah, dan responsif.</p>
                        </div>
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-white/40 leading-none">04</span>
                            <p class="text-lg font-bold text-white leading-tight">Mendukung pelanggan dengan solusi yang praktis dan mudah digunakan.</p>
                        </div>
                        <div class="flex gap-6 items-start">
                            <span class="text-2xl font-black text-white/40 leading-none">05</span>
                            <p class="text-lg font-bold text-white leading-tight">Menjaga kepuasan pelanggan melalui layanan yang konsisten dan dapat diandalkan.</p>
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
                    <h2 class="text-5xl font-black text-slate-950 tracking-tighter uppercase leading-none">Hubungi <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-400 italic">Kami</span></h2>
                    <p class="text-slate-500 font-medium text-lg leading-relaxed">
                        Solusi alat survei berkualitas dengan harga terjangkau dan layanan yang bisa diandalkan.
                    </p>
                </div>

                <div class="space-y-10">
                    <div class="flex items-start gap-8 group">
                        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-600 text-xl border border-orange-100 group-hover:bg-gradient-to-br group-hover:from-orange-600 group-hover:to-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Lokasi Kantor</h5>
                            <p class="text-sm font-bold text-slate-900 leading-relaxed">Jl. Kiyai Abdul Aziz 1, Karang Tengah,<br>Kec. Gunungpuyuh, Kabupaten Sukabumi, Jawa Barat 43152</p>
                        </div>
                    </div>
                    <a href="https://wa.me/6282123852658" target="_blank" class="flex items-start gap-8 group">
                        <div class="w-14 h-14 rounded-2xl bg-green-500 flex items-center justify-center text-white text-xl shadow-lg shadow-green-100 group-hover:rotate-12 transition-transform"><i class="fa-brands fa-whatsapp"></i></div>
                        <div>
                            <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">WhatsApp Chat</h5>
                            <p class="text-sm font-bold text-slate-900 group-hover:text-orange-600 transition-colors">+62 821-2385-2658</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-7 bg-white rounded-[4rem] border-2 border-orange-100 p-12 md:p-16 shadow-sm shadow-orange-500/10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                
                <form id="whatsappForm" class="relative z-10 space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Nama Lengkap</label>
                            <input type="text" id="name" required class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Instansi / Perusahaan</label>
                            <input type="text" id="company" required class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all" placeholder="Nama organisasi">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Layanan yang Dibutuhkan</label>
                        <select id="service" class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all appearance-none cursor-pointer">
                            <option value="Penjualan Alat Survei">Penjualan Alat Survei</option>
                            <option value="Layanan Kalibrasi Alat">Layanan Kalibrasi Alat</option>
                            <option value="Dukungan Teknis & Pelatihan">Dukungan Teknis & Pelatihan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 px-1">Detail Kebutuhan</label>
                        <textarea id="message" rows="4" required class="w-full bg-slate-50 border border-transparent rounded-2xl p-5 focus:outline-none input-focus font-semibold text-sm transition-all resize-none" placeholder="Ceritakan proyek atau kebutuhan alat Anda..."></textarea>
                    </div>
                    <button type="submit" class="group flex items-center justify-center gap-3 w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white py-6 rounded-3xl font-black uppercase tracking-[0.2em] hover:brightness-110 transition-all shadow-2xl shadow-orange-500/30">
                        Kirim via WhatsApp <i class="fa-solid fa-paper-plane group-hover:translate-x-2 group-hover:-translate-y-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    @include('footer')

    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const company = document.getElementById('company').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;

            const waText = `*HALO K SURVEY*%0A` +
                        `--------------------------------------------%0A` +
                        `*Nama:* ${name}%0A` +
                        `*Instansi:* ${company}%0A` +
                        `*Layanan:* ${service}%0A` +
                        `--------------------------------------------%0A` +
                        `*Detail Kebutuhan:*%0A${message}%0A` +
                        `--------------------------------------------%0A` +
                        `_Pesan dikirim melalui Form Website_`;

            window.open(`https://wa.me/6282123852658?text=${waText}`, '_blank');
        });
    </script>
</body>
</html>