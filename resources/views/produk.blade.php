<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Katalog | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="text-slate-900 bg-[#f8fafc] font-['Plus_Jakarta_Sans'] scroll-smooth">

    @include('nav')

    <header class="relative pt-52 pb-24 px-6 bg-slate-950 overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-orange-600/25 rounded-full blur-[120px] -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-orange-500/15 rounded-full blur-[100px] -ml-32 -mb-32"></div>
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-gradient-to-r from-orange-600 to-orange-500 shadow-[0_0_30px_-5px_rgba(255,106,26,0.6)]">
                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                    <span class="text-[9px] font-black uppercase tracking-[0.3em] text-white">Engineering Grade</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-white leading-none tracking-tighter uppercase italic">
                    KATALOG <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-300">PRODUK</span>
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
                <nav class="space-y-3">
                    <a href="{{ route('produk.index') }}" 
                       class="group flex items-center justify-between p-4 rounded-2xl border transition-all {{ !request('category') ? 'bg-gradient-to-r from-orange-600 to-orange-500 border-orange-600 text-white shadow-lg shadow-orange-500/30' : 'hover:bg-white hover:border-orange-300 text-slate-500 border-transparent' }}">
                        <span class="text-xs font-black uppercase tracking-widest">Semua Alat</span>
                        @if(!request('category'))
                        <i class="fa-solid fa-satellite-dish text-white/80 text-sm"></i>
                        @endif
                    </a>

                    @foreach($categories as $cat)
                    <a href="{{ route('produk.index', ['category' => $cat->slug]) }}" 
                       class="group flex items-center justify-between p-4 rounded-2xl border transition-all {{ request('category') == $cat->slug ? 'bg-gradient-to-r from-orange-600 to-orange-500 border-orange-600 text-white shadow-lg shadow-orange-500/30' : 'hover:bg-white hover:border-orange-300 text-slate-500 border-transparent' }}">
                        <span class="text-xs font-bold uppercase tracking-widest">{{ $cat->name }}</span>
                        @if(request('category') == $cat->slug)
                        <i class="fa-solid fa-satellite-dish text-white/80 text-sm"></i>
                        @endif
                    </a>
                    @endforeach
                </nav>
            </div>
        </aside>

        <section class="flex-1">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                
                @forelse($products as $produk)
                <div class="relative flex flex-col md:flex-row h-full min-h-[320px] bg-white rounded-[2.5rem] p-5 border-2 border-slate-100 shadow-sm hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20 hover:border-orange-500 transition-all duration-700 group overflow-hidden">

                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="md:w-2/5 relative aspect-square md:aspect-auto bg-slate-50 rounded-[2rem] overflow-hidden flex items-center justify-center p-6 flex-shrink-0">
                        <div class="absolute top-4 left-4 z-20">
                            <span class="px-2.5 py-1 bg-gradient-to-r from-orange-600 to-orange-500 text-white text-[7px] font-black uppercase tracking-widest rounded-lg shadow-md shadow-orange-500/40">Premium</span>
                        </div>
                        <img src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-full h-full object-contain p-2 drop-shadow-2xl group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div class="space-y-2">
                            <p class="inline-block text-[8px] font-black text-white uppercase tracking-[0.2em] bg-gradient-to-r from-orange-600 to-orange-500 px-2.5 py-1 rounded-full">
    {{ $produk->category->name ?? 'Uncategorized' }} / {{ $produk->brand }}
</p>
                            <h3 class="text-xl font-black text-slate-900 leading-tight tracking-tight pt-1">{{ $produk->name }}</h3>
                            <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-3">
                                {{ $produk->description }}
                            </p>
                            
                            @if($produk->badge)
                            <div class="flex gap-2 pt-2">
                                <span class="px-2.5 py-1 bg-orange-50 rounded-lg text-[8px] font-bold text-orange-700 border border-orange-200 flex items-center gap-1.5">
                                    <i class="fa-solid fa-star text-orange-500"></i> {{ $produk->badge }}
                                </span>
                            </div>
                            @endif
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-slate-50">
                            <div class="flex gap-3">
                                <a href="https://wa.me/6282123852658?text={{ urlencode('Halo K Survey, saya ingin mengajukan kalibrasi untuk produk ' . $produk->name . ' (' . $produk->brand . '). Mohon informasi prosedur dan biayanya.') }}" 
   target="_blank" 
   class="flex-[2] bg-gradient-to-r from-orange-600 to-orange-500 text-white text-center py-3.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:shadow-lg hover:shadow-orange-500/40 hover:brightness-110 transition-all duration-300">
    Ajukan Kalibrasi
</a>
                                <a href="{{ route('produk.detail', $produk->id) }}" class="flex-1 bg-white border-2 border-orange-200 text-orange-700 text-center py-3.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-orange-50 hover:border-orange-500 transition-all duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20 bg-white rounded-[2.5rem] border border-slate-100">
                    <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-boxes-open text-orange-300 text-3xl"></i>
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