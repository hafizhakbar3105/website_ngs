<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>{{ $article->title }} | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-reveal { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #C9490F; border-radius: 10px; }

        .article-content { line-height: 1.9; color: #334155; font-size: 1.15rem; }
        .article-content h2, .article-content h3 { 
            color: #0f172a; font-weight: 800; margin-top: 3rem; margin-bottom: 1.5rem; 
            letter-spacing: -0.02em; text-transform: uppercase; 
        }
        .article-content p { margin-bottom: 1.8rem; }
        .article-content b, .article-content strong { color: #C9490F; }

        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900 selection:bg-[#C9490F] selection:text-white">

    @include('nav')

    <header class="relative h-[85vh] min-h-[600px] overflow-hidden bg-slate-950">
        <img src="{{ asset('storage/'.$article->thumbnail) }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-50 scale-110 animate-[pulse_8s_infinite] transition-transform duration-1000" alt="Cover">
        
        <div class="absolute inset-0 bg-gradient-to-t from-[#f8fafc] via-slate-950/20 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-transparent to-transparent"></div>
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600 z-20"></div>

        <div class="absolute inset-0 flex items-end pb-32">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="max-w-5xl space-y-10 animate-reveal">
                    <div class="flex flex-wrap items-center gap-5">
                        <span class="bg-gradient-to-r from-orange-600 to-orange-500 text-white px-6 py-2.5 rounded-full text-[10px] font-black uppercase tracking-[0.3em] shadow-2xl shadow-orange-500/40">
                            Engineering Insight
                        </span>
                        <div class="flex items-center gap-3 text-white/70 text-[11px] font-bold uppercase tracking-widest">
                            <i class="fa-regular fa-calendar-check text-[#FFB347]"></i> 
                            {{ $article->created_at->format('d F Y') }}
                        </div>
                    </div>

                    <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase italic drop-shadow-2xl">
                        {{ $article->title }}
                    </h1>

                    <nav class="flex items-center gap-4 text-white/40 text-[10px] font-black uppercase tracking-[0.2em]">
                        <a href="/" class="hover:text-[#FFB347] transition-colors">Home</a>
                        <span class="w-10 h-px bg-white/20"></span>
                        <span class="text-white/80">Article Detail</span>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 -mt-20 relative z-30 pb-40">
        <div class="grid lg:grid-cols-12 gap-16">
            
            <div class="lg:col-span-7 space-y-12">
                <div class="bg-white rounded-[4rem] p-10 md:p-20 shadow-[0_40px_100px_-20px_rgba(201,73,15,0.08)] border border-white animate-reveal" style="animation-delay: 0.2s">
                    
                    <div class="flex flex-wrap items-center justify-between gap-6 mb-16 pb-10 border-b border-orange-50">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white shadow-md shadow-orange-500/30">
                                <i class="fa-solid fa-feather-pointed"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Reading Experience</p>
                                <p class="text-xs font-bold text-slate-700 uppercase">Interactive Documentation</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="w-12 h-12 rounded-2xl glass-effect flex items-center justify-center text-slate-400 hover:text-orange-600 hover:bg-white hover:shadow-xl transition-all"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="w-12 h-12 rounded-2xl glass-effect flex items-center justify-center text-slate-400 hover:text-green-500 hover:bg-white hover:shadow-xl transition-all"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>

                    <div class="article-content prose prose-slate max-w-none">
                        {!! nl2br(e($article->content)) !!}
                    </div>

                    <div class="mt-24 pt-12 border-t border-slate-100 flex flex-wrap gap-3">
                        @foreach(['Geospatial', 'Precision', 'TechnicalUpdate'] as $tag)
                        <span class="px-6 py-3 bg-slate-50 text-slate-500 text-[9px] font-black rounded-2xl border border-slate-100 uppercase tracking-widest hover:border-[#C9490F] hover:text-[#C9490F] transition-all cursor-pointer">
                            #{{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <aside class="lg:col-span-5 space-y-10">
                <div class="sticky top-28 space-y-10">
                    
                    <div class="bg-white p-10 rounded-[3.5rem] border border-white shadow-[0_30px_70px_-20px_rgba(201,73,15,0.07)] animate-reveal" style="animation-delay: 0.4s">
                        <div class="flex justify-between items-center mb-10">
                            <h3 class="text-[11px] font-black uppercase tracking-[0.3em] text-[#C9490F] flex items-center gap-3">
                                <span class="w-10 h-1.5 bg-gradient-to-r from-orange-600 to-orange-500 rounded-full"></span> Field Assets
                            </h3>
                            <div class="px-3 py-1 bg-orange-50 rounded-lg text-[9px] font-bold text-orange-600 uppercase tracking-widest">
                                {{ $article->gallery ? count($article->gallery) : 0 }} Capture
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-5">
                            @if($article->gallery && count($article->gallery) > 0)
                                @foreach($article->gallery as $img)
                                <div class="group relative aspect-square rounded-[2.5rem] overflow-hidden bg-slate-100 cursor-zoom-in shadow-sm hover:shadow-2xl hover:shadow-orange-500/20 transition-all duration-500 border border-slate-100">
                                    <img src="{{ asset('storage/'.$img) }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-125 group-hover:rotate-3">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#C9490F]/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6">
                                        <i class="fa-solid fa-expand text-white text-sm"></i>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="col-span-2 py-20 text-center border-2 border-dashed border-orange-100 rounded-[3rem] bg-orange-50/30">
                                    <i class="fa-solid fa-camera-retro text-orange-200 text-5xl mb-4"></i>
                                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Belum ada dokumentasi lapangan</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="relative p-12 rounded-[4rem] bg-gradient-to-br from-[#2a160b] to-[#170902] text-white overflow-hidden shadow-2xl animate-reveal" style="animation-delay: 0.6s">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-600/30 rounded-full blur-[90px] -mr-32 -mt-32"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-amber-500/15 rounded-full blur-[70px] -ml-24 -mb-24"></div>
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                        
                        <div class="relative z-10 space-y-8">
                            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-white/5 border border-orange-500/20 text-[#FFB347] text-[9px] font-black uppercase tracking-widest">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#FFB347] animate-pulse"></span> Professional Inquiry
                            </div>
                            
                            <h4 class="text-4xl font-black leading-[1] uppercase tracking-tighter">Ready for <br><span class="text-orange-400 italic">Next Level</span> Precision?</h4>
                            
                            <p class="text-slate-400 text-sm leading-relaxed font-medium">Hubungi tim ahli kami untuk implementasi teknologi yang tepat pada proyek Anda.</p>
                            
                            <a href="https://wa.me/6282123852658" class="group/btn relative w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white py-5 rounded-[2rem] font-black text-xs uppercase tracking-[0.2em] flex items-center justify-center gap-4 transition-all duration-500 hover:brightness-110 hover:scale-[1.02] shadow-2xl shadow-orange-500/30">
                                Consult Now <i class="fa-brands fa-whatsapp text-lg group-hover/btn:rotate-[360deg] transition-transform duration-700"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-between px-8 py-6 glass-effect rounded-[2.5rem]">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white font-black text-xs shadow-lg shadow-orange-500/30">NG</div>
                            <div>
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Official Channel</p>
                                <p class="text-xs font-bold text-slate-800">NGS Technical Media</p>
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