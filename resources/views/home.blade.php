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
                    <a href="https://wa.me/6282123852658?text=Halo%20Tim%20Nusa%20Geospatial%2C%20saya%20ingin%20berkonsultasi%20mengenai%20solusi%20pemetaan%20dan%20layanan%20geospasial%20yang%20sesuai%20dengan%20kebutuhan%20project%20saya.%20Boleh%20dibantu%3F" target="_blank" class="bg-blue-600 blue-glow text-white px-8 py-4 rounded-2xl font-bold flex items-center gap-3 hover:bg-blue-500 transition-all group w-fit">
    Mulai Konsultasi <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
</a>
                    <a href="/produk" class="glass bg-white/5 text-white px-8 py-4 rounded-2xl font-bold hover:bg-white/10 transition">Lihat Katalog</a>
                </div>
            </div>
            
            <div class="relative hidden lg:block">
    <!-- Efek Glow di Latar Belakang -->
    <div class="absolute inset-0 bg-blue-500/20 blur-[100px]"></div>
    
    <!-- Gambar: Menghapus class 'grayscale' dan 'hover:grayscale-0' agar warna tetap natural -->
    <img src="img/logo.jpeg" alt="Tech" class="relative rounded-[2rem] border border-white/10 shadow-2xl transition duration-700">
    
    <!-- Kartu Mengambang: Menambahkan shadow-2xl dan drop-shadow untuk mempertegas tulisan -->
    <!-- Penambahan shadow abu-abu yang lebih tegas (shadow-2xl kustom) -->
<div class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.25)] border border-slate-100">
    <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-1 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.1)]">
        Akurasi Perangkat
    </p>
    <p class="text-2xl font-black text-[#043978] tracking-tighter drop-shadow-[0_2px_2px_rgba(0,0,0,0.1)]">
        99.9% Precision
    </p>
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

            <div class="grid grid-cols-1 gap-6">
    <div class="relative overflow-hidden bento-card p-10 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col justify-between min-h-[400px]">
    <img src="img/penjualan.jpeg" class="absolute inset-0 w-full h-full object-cover scale-[1.15] origin-top-left z-0 pointer-events-none" alt="Background Penjualan">
    <div class="absolute inset-0 bg-slate-900/70 z-0 pointer-events-none"></div>

    <div class="relative z-10 flex flex-col h-full justify-between">
        <!-- Bagian Atas: Ikon dan Teks -->
        <div>
            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-blue-200 mb-6">
                <i class="fa-solid fa-satellite-dish"></i>
            </div>
            <h3 class="text-3xl font-extrabold mb-4 text-white uppercase tracking-tighter">Solusi Instrumen Geospasial</h3>
            <p class="text-slate-200 leading-relaxed max-w-xl font-medium">Mendukung efisiensi dan akurasi akuisisi data lapangan Anda dengan perangkat pemetaan berstandar industri untuk berbagai kondisi topografi</p>
        </div>

        <!-- Bagian Bawah: Tombol di Kanan -->
        <div class="flex justify-end mt-8">
            <a href="/produk" class="inline-flex items-center gap-3 bg-white  px-10 py-4 rounded-2xl text-base font-black uppercase tracking-widest shadow-xl hover:shadow-white/10 hover:scale-105 transition-all">
                Lihat Produk
            </a>
        </div>
    </div>
</div>

    <div class="relative overflow-hidden bento-card p-10 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col md:flex-row items-center gap-10 min-h-[200px]">
    <img src="img/kalibrasi.jpeg" class="absolute inset-0 w-full h-full object-cover scale-[1.15] origin-top-left z-0 pointer-events-none" alt="Background Kalibrasi">
    <div class="absolute inset-0 bg-slate-900/70 z-0 pointer-events-none"></div>

    <div class="relative z-10 flex-1">
        <h3 class="text-2xl font-extrabold mb-2 text-white">After Sales & Pelatihan</h3>
        <p class="text-slate-200">Pendampingan teknis dan pengolahan data untuk produktivitas tim Anda di lapangan</p>
    </div>
    
    <a href="https://wa.me/6282123852658?text=Halo%20Tim%20Expert%20Nusa%20Geospatial!%20Saya%20tertarik%20untuk%20menjadwalkan%20program%20pelatihan%20dan%20pendampingan%20teknis%20pengolahan%20data%20untuk%20tim%20kami.%20Boleh%20diskusi%20lebih%20lanjut%20mengenai%20pilihan%20silabus%20dan%20ketersediaan%20jadwalnya%3F" target="_blank" class="relative z-10 bg-white text-slate-900 px-8 py-4 rounded-2xl font-extrabold shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        Jadwalkan Training
    </a>
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
    @foreach($produkUnggulan as $item)
    <div class="group bg-white rounded-[2.5rem] p-6 border border-slate-200 hover:shadow-2xl transition duration-500 flex flex-col h-full shadow-sm relative overflow-hidden">
        <div class="aspect-square bg-slate-50 rounded-[2rem] mb-6 overflow-hidden flex items-center justify-center relative border border-slate-100">
            @if($item->badge)
            <div class="absolute top-4 left-4 bg-slate-900 text-white text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest z-10">{{ $item->badge }}</div>
            @endif
            
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-48 object-contain">
        </div>
        <div class="px-2 flex flex-col flex-grow">
            <p class="text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-2">{{ $item->brand }}</p>
            <h3 class="text-xl font-black text-slate-900 mb-2 uppercase tracking-tight">{{ $item->name }}</h3>
            <p class="text-xs text-slate-500 leading-relaxed mb-8 flex-grow">{{ $item->description }}</p>
            
            <a href="{{ url('detailProduk', $item->id) }}" class="w-full bg-slate-950 text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-2">
                Detail Produk
            </a>
        </div>
    </div>
    @endforeach
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
        <p class="text-slate-400 font-medium italic">Belum ada ulasan yang ditampilkan.</p>
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