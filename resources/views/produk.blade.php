<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="text-slate-900 bg-[#f8fafc] font-['Plus_Jakarta_Sans'] scroll-smooth">

    @include('nav')

    <header class="relative pt-52 pb-24 px-6 bg-slate-950 overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] -mr-48 -mt-48"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-blue-400">Engineering Grade</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-white leading-none tracking-tighter uppercase italic">
                    KATALOG <span class="text-slate-700">PRODUK</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-lg max-w-xl font-medium leading-relaxed">
                    Peralatan geospasial presisi tinggi dari brand terpercaya dunia untuk hasil pengukuran yang akurat di setiap medan.
                </p>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-20 flex flex-col lg:flex-row gap-16">
        <aside class="lg:w-72 space-y-12">
            <div>
                <h3 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 mb-8 px-4">Kategori Utama</h3>
                <nav class="space-y-2">
                    <a href="{{ route('produk.index') }}" 
                       class="group flex items-center justify-between p-4 rounded-2xl {{ !request('category') ? 'bg-white border-blue-600 text-blue-600 shadow-lg shadow-blue-500/10' : 'hover:bg-white text-slate-500 border-transparent' }} border transition-all">
                        <span class="text-xs font-black uppercase tracking-widest">Semua Alat</span>
                    </a>

                    @foreach($categories as $cat)
                    <a href="{{ route('produk.index', ['category' => $cat->slug]) }}" 
                       class="group flex items-center justify-between p-4 rounded-2xl {{ request('category') == $cat->slug ? 'bg-white border-blue-600 text-blue-600 shadow-lg shadow-blue-500/10' : 'hover:bg-white text-slate-500 border-transparent' }} border transition-all">
                        <span class="text-xs font-bold uppercase tracking-widest">{{ $cat->name }}</span>
                    </a>
                    @endforeach
                </nav>
            </div>
        </aside>

        <section class="flex-1">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                
                @forelse($products as $produk)
                <div class="flex flex-col md:flex-row h-full min-h-[320px] bg-white rounded-[2.5rem] p-5 border border-slate-100 shadow-sm hover:-translate-y-2 hover:shadow-2xl hover:border-blue-500 transition-all duration-700 group">
                    
                    <div class="md:w-2/5 relative aspect-square md:aspect-auto bg-slate-50 rounded-[2rem] overflow-hidden flex items-center justify-center p-6 flex-shrink-0">
                        <div class="absolute top-4 left-4 z-20">
                            <span class="px-2.5 py-1 bg-white/90 backdrop-blur text-slate-900 text-[7px] font-black uppercase tracking-widest rounded-lg shadow-sm">Premium</span>
                        </div>
                        <img src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-[75%] object-contain group-hover:scale-110 transition-transform duration-700">
                    </div>
                    
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div class="space-y-2">
                            <p class="text-[8px] font-black text-blue-600 uppercase tracking-[0.2em]">
                                {{ str_replace('-', ' ', $produk->category) }} / {{ $produk->brand }}
                            </p>
                            <h3 class="text-xl font-black text-slate-900 leading-tight tracking-tight">{{ $produk->name }}</h3>
                            <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-3">
                                {{ $produk->description }}
                            </p>
                            
                            @if($produk->badge)
                            <div class="flex gap-2 pt-2">
                                <span class="px-2.5 py-1 bg-slate-50 rounded-lg text-[8px] font-bold text-slate-500 border border-slate-100 flex items-center gap-1.5">
                                    <i class="fa-solid fa-star text-blue-500"></i> {{ $produk->badge }}
                                </span>
                            </div>
                            @endif
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-slate-50">
                            <div class="flex gap-3">
                                <a href="https://wa.me/6282123852658" target="_blank" class="flex-[2] bg-slate-900 text-white text-center py-3.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-blue-600 transition-all duration-300">
                                    Ajukan Kalibrasi
                                </a>
                                <a href="{{ route('produk.detail', $produk->id) }}" class="flex-1 bg-white border border-slate-200 text-slate-900 text-center py-3.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-slate-50 transition-all duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20 bg-white rounded-[2.5rem] border border-slate-100">
                    <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-boxes-open text-slate-300 text-3xl"></i>
                    </div>
                    <p class="text-slate-400 font-medium">Katalog untuk kategori ini belum tersedia.</p>
                </div>
                @endforelse

            </div>
        </section>
    </main>

    @include('footer')

</body>
</html>