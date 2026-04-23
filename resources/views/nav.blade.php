<nav class="fixed w-full z-[100] px-4 md:px-6 py-4">
    <!-- Mengganti 'glass' dan 'backdrop-blur' menjadi 'bg-white' -->
    <div class="max-w-7xl mx-auto bg-white rounded-2xl px-6 py-3 flex justify-between items-center shadow-lg border border-slate-100">
        <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
            <a href="{{ url('/') }}">
                <img src="img/NGS.png" alt="NusaGeo Logo" class="h-9 w-auto">
            </a>
        </div>

        <!-- Menu Desktop -->
        <div class="hidden md:flex gap-8 text-[11px] font-bold uppercase tracking-[0.15em] text-slate-500">
            <a href="{{ url('/') }}" 
               class="relative group py-1 transition-colors duration-300 {{ Request::is('/') ? 'text-blue-600' : 'hover:text-slate-900' }}">
                Beranda
                <span class="absolute bottom-0 left-0 h-0.5 bg-blue-600 rounded-full transition-all duration-500 {{ Request::is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

            <a href="{{ url('produk') }}" 
               class="relative group py-1 transition-colors duration-300 {{ Request::is('produk*') ? 'text-blue-600' : 'hover:text-slate-900' }}">
                Produk
                <span class="absolute bottom-0 left-0 h-0.5 bg-blue-600 rounded-full transition-all duration-500 {{ Request::is('produk*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

            <a href="{{ url('service') }}" 
               class="relative group py-1 hover:text-slate-900 transition-colors duration-300">
                Layanan
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 rounded-full group-hover:w-full transition-all duration-500"></span>
            </a>

            <a href="{{ url('profil') }}" 
               class="relative group py-1 hover:text-slate-900 transition-colors duration-300">
                Tentang Kami
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 rounded-full group-hover:w-full transition-all duration-500"></span>
            </a>
        </div>

        <div class="flex items-center gap-4">
            <a href="#contact" class="hidden md:block bg-slate-900 text-white px-6 py-2.5 rounded-xl text-[10px] font-black tracking-wider hover:bg-blue-600 hover:shadow-xl hover:shadow-blue-200 hover:-translate-y-0.5 transition-all duration-300">
                HUBUNGI KAMI
            </a>
            <button id="menuBtn" class="md:hidden text-slate-800 p-2 text-xl focus:outline-none transition-transform active:scale-90">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </div>

    <!-- Menu Mobile juga diubah menjadi bg-white -->
    <div id="mobileMenu" class="hidden absolute top-20 left-4 right-4 bg-white p-8 rounded-[2rem] shadow-2xl md:hidden border border-slate-100 animate-in fade-in zoom-in duration-300">
        <div class="flex flex-col gap-6 text-center font-black text-sm uppercase tracking-widest">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-blue-600' : 'text-slate-600' }}">Beranda</a>
            <a href="{{ url('produk') }}" class="{{ Request::is('produk*') ? 'text-blue-600' : 'text-slate-600' }}">Produk</a>
            <a href="#layanan" class="text-slate-600">Layanan</a>
            <a href="#tentang" class="text-slate-600">Tentang Kami</a>
            <hr class="border-slate-100">
            <a href="https://wa.me/..." class="text-green-600 flex items-center justify-center gap-2 group">
                <i class="fa-brands fa-whatsapp text-xl transition-transform group-hover:rotate-12"></i> Konsultasi WA
            </a>
        </div>
    </div>
</nav>