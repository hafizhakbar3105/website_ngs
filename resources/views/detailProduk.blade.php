<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHCNAV i93 Detail | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
        
        /* Smooth Transition */
        * { transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1); }

        .tech-card-dark { 
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25);
        }
        
        .spec-row { border-bottom: 1px solid rgba(226, 232, 240, 0.5); }
        .spec-row:last-child { border-bottom: none; }
        
        .img-main-container {
            background: radial-gradient(circle at center, #ffffff 0%, #f1f5f9 100%);
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden">

    @include('nav')

    <header class="pt-40 pb-12 px-6 max-w-7xl mx-auto">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-slate-100 pb-10">
            <div class="space-y-2">
                <span class="text-blue-600 font-bold text-xs uppercase tracking-widest">CHCNAV GNSS System</span>
                <h1 class="text-4xl md:text-6xl font-black text-slate-950 tracking-tighter leading-none">i93 Visual IMU RTK</h1>
            </div>
            <div class="flex gap-3">
                <div class="px-4 py-2 bg-slate-50 rounded-full border border-slate-100 text-[10px] font-bold text-slate-500 uppercase tracking-widest">In Stock</div>
                <div class="px-4 py-2 bg-blue-50 rounded-full border border-blue-100 text-[10px] font-bold text-blue-600 uppercase tracking-widest">New Technology</div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <div class="lg:col-span-7 space-y-8">
                <div class="img-main-container aspect-[1.2/1] rounded-[3.5rem] flex items-center justify-center p-16 border border-slate-50 relative overflow-hidden group">
                    <img src="img/products/i93-large.png" alt="CHCNAV i93" class="w-4/5 h-4/5 object-contain drop-shadow-2xl group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-8 right-8 flex gap-3">
                         <button class="w-12 h-12 rounded-2xl bg-white/80 backdrop-blur shadow-sm border border-slate-100 flex items-center justify-center text-slate-400 hover:text-blue-600"><i class="fa-solid fa-expand"></i></button>
                    </div>
                </div>
                
                <div class="grid grid-cols-4 gap-6">
                    <div class="aspect-square rounded-3xl border-2 border-blue-600 p-3 bg-white shadow-sm cursor-pointer overflow-hidden"><img src="img/products/i93-1.png" class="w-full h-full object-contain"></div>
                    <div class="aspect-square rounded-3xl border border-slate-100 p-3 bg-slate-50 hover:bg-white transition cursor-pointer overflow-hidden opacity-60 hover:opacity-100"><img src="img/products/i93-2.png" class="w-full h-full object-contain"></div>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-12">
                <div class="tech-card-dark p-10 rounded-[3rem] text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/20 rounded-full blur-3xl -mr-16 -mt-16"></div>
                    <h3 class="text-xs font-black uppercase tracking-[0.3em] text-blue-400 mb-6">Field Application</h3>
                    <p class="text-sm leading-relaxed text-slate-300 font-medium italic">
                        "Optimasi pekerjaan survei di area dengan gangguan sinyal tinggi. Teknologi Visual Stakeout AR kami memungkinkan navigasi titik 50% lebih cepat dengan akurasi sub-sentimeter yang konsisten."
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 px-2">Key Advantages</h4>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex items-center gap-5 p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition-all">
                            <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center text-white text-xl"><i class="fa-solid fa-camera"></i></div>
                            <div>
                                <h5 class="text-sm font-black text-slate-900 uppercase">Visual Assist 2.0</h5>
                                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">AR Powered Navigation</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-5 p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition-all">
                            <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center text-white text-xl"><i class="fa-solid fa-microchip"></i></div>
                            <div>
                                <h5 class="text-sm font-black text-slate-900 uppercase">Professional IMU</h5>
                                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">60° Tilt Compensation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4 pt-6">
    <!-- Tombol WhatsApp / Quote -->
    <a href="https://wa.me/..." class="group flex items-center justify-center gap-4 bg-slate-950 text-white py-5 rounded-[2rem] font-black uppercase tracking-widest hover:bg-blue-600 transition-all shadow-2xl shadow-slate-950/20">
        <i class="fa-brands fa-whatsapp text-xl group-hover:rotate-12 transition-transform"></i> 
        Minta Penawaran
    </a>
    
    <!-- Tombol Brosur -->
    <a href="#" class="flex items-center justify-center gap-3 bg-white border border-slate-200 text-slate-900 py-5 rounded-[2rem] font-black uppercase tracking-widest hover:bg-slate-50 transition-all">
        <i class="fa-solid fa-download text-xs"></i> Brosur Teknis
    </a>
</div>
            </div>
        </div>

        <div class="mt-32 space-y-12">
            <div class="flex flex-col gap-4">
                <p class="text-[11px] font-black text-blue-600 uppercase tracking-[0.4em]">Inside Technology</p>
                <h2 class="text-3xl md:text-4xl font-black text-slate-950 tracking-tight">Spesifikasi Teknis</h2>
            </div>
            
            <div class="bg-white rounded-[3.5rem] border border-slate-100 p-8 md:p-12 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-2">
                    <div class="spec-row flex justify-between py-6">
                        <span class="text-[11px] font-black uppercase tracking-widest text-slate-400">Total Saluran</span>
                        <span class="text-sm font-bold text-slate-900">1408 Channels</span>
                    </div>
                    <div class="spec-row flex justify-between py-6">
                        <span class="text-[11px] font-black uppercase tracking-widest text-slate-400">Akurasi Kinematik</span>
                        <span class="text-sm font-bold text-slate-900">8mm + 1ppm (RMS)</span>
                    </div>
                    <div class="spec-row flex justify-between py-6">
                        <span class="text-[11px] font-black uppercase tracking-widest text-slate-400">Daya Tahan Baterai</span>
                        <span class="text-sm font-bold text-slate-900">15 Jam Operasional</span>
                    </div>
                    <div class="spec-row flex justify-between py-6">
                        <span class="text-[11px] font-black uppercase tracking-widest text-slate-400">Berat Perangkat</span>
                        <span class="text-sm font-bold text-slate-900">1.15 Kilogram</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('footer')

</body>
</html>