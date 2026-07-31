<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>{{ $article->title }} | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; background-color: #F8FAFC; }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #F1F5F9; }
        ::-webkit-scrollbar-thumb { background: #C9490F; border-radius: 10px; }

        /* Typography Artikel Bersih & Nyaman Dibaca */
        .article-content { line-height: 2; color: #334155; font-size: 1.125rem; }
        .article-content h2, .article-content h3 { 
            color: #0F172A; font-weight: 900; margin-top: 3.5rem; margin-bottom: 1.5rem; 
            letter-spacing: -0.02em; text-transform: uppercase; 
            border-left: 4px solid #C9490F; padding-left: 1.25rem;
        }
        .article-content p { margin-bottom: 2rem; font-weight: 400; }
        .article-content b, .article-content strong { color: #C9490F; font-weight: 800; }

        /* Pattern Grid Geodesi/Geologi Transparan */
        .bg-geology-grid {
            background-size: 50px 50px;
            background-image: 
                linear-gradient(to right, rgba(201, 73, 15, 0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(201, 73, 15, 0.04) 1px, transparent 1px);
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900 selection:bg-[#C9490F] selection:text-white relative overflow-x-hidden">

    @include('nav')

    <!-- HEADER COVER / HERO SECTION (Gradiasi Fading Nyatu ke Background Putih) -->
    <header class="relative h-[80vh] min-h-[600px] overflow-hidden bg-slate-950 flex items-end pb-28">
        <!-- Cover Image -->
        <img src="{{ asset('storage/'.$article->thumbnail) }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-45 scale-105 animate-[pulse_10s_infinite] transition-transform duration-1000" alt="Cover">
        
        <!-- Gradasi Transisi dari Gelap Atas ke Background Putih Terang di Bawah -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#F8FAFC] via-slate-950/60 to-transparent z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-transparent to-transparent z-10"></div>
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600 z-20"></div>

        <div class="max-w-7xl mx-auto px-6 w-full relative z-20">
            <div class="max-w-5xl space-y-8 animate-reveal">
                <div class="flex flex-wrap items-center gap-4">
                    <span class="bg-gradient-to-r from-orange-600 to-orange-500 text-white px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-[0.3em] shadow-lg shadow-orange-500/30">
                        Engineering Insight
                    </span>
                    <div class="flex items-center gap-2 text-white/90 text-[11px] font-mono uppercase tracking-widest bg-white/10 border border-white/20 px-4 py-2 rounded-full backdrop-blur-md shadow-sm">
                        <i class="fa-regular fa-calendar-check text-amber-400"></i> 
                        {{ $article->created_at->format('d F Y') }}
                    </div>
                </div>

                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[0.95] tracking-tight uppercase italic drop-shadow-2xl">
                    {{ $article->title }}
                </h1>

                <nav class="flex items-center gap-3 text-slate-300 text-[10px] font-mono uppercase tracking-[0.2em]">
                    <a href="/" class="hover:text-amber-400 transition-colors">Home</a>
                    <span class="text-orange-500">//</span>
                    <span class="text-white font-bold">Technical Documentation</span>
                </nav>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT DENGAN BACKGROUND PUTIH & AKSEEN GEOLOGI -->
    <main class="max-w-7xl mx-auto px-6 -mt-16 relative z-30 pb-40">
        
        <!-- LATAR AKSEEN GEOLOGI: GARIS KONTUR ELEVASI & GRID GEODESIK -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10 bg-geology-grid">
            <!-- Vector Lines Kontur Geologi 1 (Top Kanan) -->
            <svg class="absolute -top-10 -right-10 w-[700px] h-[700px] opacity-25" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20,100 Q180,20 380,180 T500,220" stroke="#C9490F" stroke-width="1.5" stroke-dasharray="4 4" class="animate-[pulse_5s_ease-in-out_infinite]" />
                <path d="M0,200 Q200,80 400,260 T500,320" stroke="#FFB347" stroke-width="1.5" class="animate-[pulse_7s_ease-in-out_infinite_1s]" />
                <path d="M50,300 Q220,150 450,360" stroke="#C9490F" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite_2s]" />
                <!-- Station Point Marker -->
                <circle cx="380" cy="180" r="4" fill="#C9490F" />
                <text x="390" y="185" fill="#94A3B8" font-family="monospace" font-size="10">ST_ELEV_850M</text>
            </svg>

            <!-- Vector Lines Kontur Geologi 2 (Bottom Kiri) -->
            <svg class="absolute bottom-10 -left-20 w-[650px] h-[650px] opacity-20" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50,150 Q220,50 380,220 T500,280" stroke="#C9490F" stroke-width="1.5" />
                <path d="M100,280 Q250,180 450,380" stroke="#FFB347" stroke-width="1.5" stroke-dasharray="3 3" />
            </svg>

            <!-- Warm Ambient Glow Lights -->
            <div class="absolute top-1/3 left-10 w-[550px] h-[550px] bg-gradient-to-br from-orange-500/10 via-amber-300/5 to-transparent rounded-full blur-[120px]"></div>
            <div class="absolute bottom-1/4 right-10 w-[600px] h-[600px] bg-gradient-to-tr from-orange-600/10 via-amber-400/5 to-transparent rounded-full blur-[140px]"></div>
        </div>

        <div class="grid lg:grid-cols-12 gap-12 relative z-10">
            
            <!-- KOLOM ARTIKEL UTAMA (KIRI - CARD PUTIH ELEGAN) -->
            <div class="lg:col-span-7 space-y-12">
                <div class="bg-white/95 backdrop-blur-xl rounded-[3.5rem] p-8 md:p-16 border-2 border-orange-100 shadow-[0_30px_80px_-15px_rgba(201,73,15,0.08)] relative overflow-hidden animate-reveal">
                    <!-- Accent Line Card -->
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>

                    <!-- Meta Reader Bar -->
                    <div class="flex flex-wrap items-center justify-between gap-6 mb-12 pb-8 border-b border-slate-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white shadow-md shadow-orange-500/30">
                                <i class="fa-solid fa-feather-pointed"></i>
                            </div>
                            <div>
                                <p class="text-[9px] font-mono font-bold text-orange-600 uppercase tracking-widest">Reading Experience</p>
                                <p class="text-xs font-extrabold text-slate-800 uppercase">Interactive Documentation</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-400 hover:text-orange-600 hover:bg-white hover:shadow-lg transition-all"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
                            <a href="https://wa.me/6282123852658?text={{ urlencode('Halo K Survey, saya membaca artikel "' . $article->title . '" dan ingin bertanya lebih lanjut.') }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-400 hover:text-emerald-500 hover:bg-white hover:shadow-lg transition-all"><i class="fa-brands fa-whatsapp text-sm"></i></a>
                        </div>
                    </div>

                    <!-- Article Content Text -->
                    <div class="article-content max-w-none">
                        {!! nl2br(e($article->content)) !!}
                    </div>

                    <!-- Tags Section -->
                    <div class="mt-16 pt-10 border-t border-slate-100 flex flex-wrap gap-3">
                        @foreach(['Geospatial', 'Precision', 'TechnicalUpdate'] as $tag)
                        <span class="px-5 py-2.5 bg-slate-50 text-slate-600 text-[10px] font-mono font-bold rounded-2xl border border-slate-200 uppercase tracking-widest hover:border-orange-500 hover:text-orange-600 transition-all cursor-pointer">
                            #{{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SIDEBAR DOKUMENTASI (KANAN - CARD PUTIH & DARK CTA) -->
            <aside class="lg:col-span-5 space-y-10">
                <div class="sticky top-28 space-y-8">
                    
                    <!-- GALERI FOTO FIELD ASSETS -->
                    <div class="bg-white/95 backdrop-blur-xl p-8 rounded-[3.5rem] border-2 border-orange-100 shadow-[0_20px_60px_-15px_rgba(201,73,15,0.06)] relative overflow-hidden animate-reveal">
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="text-[11px] font-black uppercase tracking-[0.3em] text-[#C9490F] flex items-center gap-3">
                                <span class="w-8 h-1.5 bg-gradient-to-r from-orange-600 to-orange-500 rounded-full"></span> Field Assets
                            </h3>
                            <div class="px-3 py-1 bg-orange-50 rounded-lg text-[9px] font-mono font-bold text-orange-600 uppercase tracking-widest border border-orange-100">
                                {{ $article->gallery ? count($article->gallery) : 0 }} Capture
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            @if($article->gallery && count($article->gallery) > 0)
                                @foreach($article->gallery as $img)
                                <div class="group relative aspect-square rounded-[2rem] overflow-hidden bg-slate-100 cursor-zoom-in border border-slate-200 hover:border-orange-500 shadow-sm transition-all duration-500">
                                    <img src="{{ asset('storage/'.$img) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-orange-600/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                                        <i class="fa-solid fa-expand text-white text-xs"></i>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="col-span-2 py-16 text-center border-2 border-dashed border-orange-100 rounded-[2.5rem] bg-orange-50/30">
                                    <i class="fa-solid fa-camera-retro text-orange-200 text-4xl mb-3"></i>
                                    <p class="text-[10px] font-mono text-slate-400 uppercase tracking-widest">Belum ada dokumentasi lapangan</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- CTA CARD CONSULTATION (DARK ACCENT CONTRAST) -->
                    <div class="relative p-10 rounded-[3.5rem] bg-gradient-to-br from-slate-950 via-slate-900 to-[#2a160b] text-white overflow-hidden shadow-2xl border border-orange-500/20 animate-reveal">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-600/30 rounded-full blur-[90px] -mr-32 -mt-32"></div>
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                        
                        <div class="relative z-10 space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-orange-500/20 text-[#FFB347] text-[9px] font-mono font-bold uppercase tracking-widest">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#FFB347] animate-pulse"></span> Professional Inquiry
                            </div>
                            
                            <h4 class="text-3xl font-black leading-none uppercase tracking-tight">Ready for <br><span class="text-orange-400 italic">Next Level</span> Precision?</h4>
                            
                            <p class="text-slate-400 text-xs leading-relaxed font-medium">Hubungi tim ahli kami untuk implementasi teknologi yang tepat pada proyek Anda.</p>
                            
                            <a href="https://wa.me/6282123852658?text={{ urlencode('Halo K Survey, saya berminat berkonsultasi mengenai implementasi alat survei setelah membaca artikel: ' . $article->title) }}" target="_blank" class="group/btn relative w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] flex items-center justify-center gap-3 transition-all duration-300 hover:brightness-110 shadow-lg shadow-orange-500/30">
                                Consult Now <i class="fa-brands fa-whatsapp text-base group-hover/btn:rotate-12 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- OFFICIAL CHANNEL BADGE -->
                    <div class="flex items-center justify-between px-7 py-5 bg-white/90 backdrop-blur-md rounded-2xl border border-orange-100 shadow-sm">
                        <div class="flex items-center gap-3.5">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white font-black text-xs shadow-md shadow-orange-500/30">KS</div>
                            <div>
                                <p class="text-[9px] font-mono text-slate-400 uppercase tracking-widest">Official Channel</p>
                                <p class="text-xs font-bold text-slate-800">K Survey Technical Media</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-certificate text-orange-500"></i>
                    </div>

                </div>
            </aside>

        </div>
    </main>

    @include('footer')

</body>
</html>