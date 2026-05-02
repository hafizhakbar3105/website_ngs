<nav class="fixed top-0 left-0 w-full z-[100] px-4 md:px-6 py-4">
    <div class="max-w-7xl mx-auto bg-white rounded-2xl px-6 py-3 flex justify-between items-center shadow-lg border border-slate-100">
        
        <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/NGS.png') }}" alt="NusaGeo Logo" class="h-9 w-auto">
            </a>
        </div>

        <div class="hidden md:flex gap-8 text-[11px] font-bold uppercase tracking-[0.15em] text-slate-500">
            
            @if(Auth::check() && Auth::user()->role === 'admin' && Str::contains(Request::path(), 'admin'))
                <a href="{{ url('/admin/homeadmin') }}" class="relative group py-1 transition-colors duration-300 {{ Request::is('homeadmin*') ? 'text-[#043978]' : 'hover:text-slate-900' }}">
                    Dashboard Admin
                    <span class="absolute bottom-0 left-0 h-0.5 bg-[#043978] rounded-full transition-all duration-500 {{ Request::is('homeadmin*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ url('/admin/produkadmin') }}" class="relative group py-1 transition-colors duration-300 {{ Request::is('produkadmin*') ? 'text-[#043978]' : 'hover:text-slate-900' }}">
                    Kelola Katalog
                    <span class="absolute bottom-0 left-0 h-0.5 bg-[#043978] rounded-full transition-all duration-500 {{ Request::is('produkadmin*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                
            @else
                <a href="{{ url('/') }}" class="relative group py-1 transition-colors duration-300 {{ Request::is('/') ? 'text-[#043978]' : 'hover:text-slate-900' }}">
                    Beranda
                    <span class="absolute bottom-0 left-0 h-0.5 bg-[#043978] rounded-full transition-all duration-500 {{ Request::is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ url('produk') }}" class="relative group py-1 transition-colors duration-300 {{ Request::is('produk*') ? 'text-[#043978]' : 'hover:text-slate-900' }}">
                    Produk
                    <span class="absolute bottom-0 left-0 h-0.5 bg-[#043978] rounded-full transition-all duration-500 {{ Request::is('produk*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>
                <a href="{{ url('service') }}" class="relative group py-1 hover:text-slate-900 transition-colors duration-300">
                    Layanan
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#043978] rounded-full group-hover:w-full transition-all duration-500"></span>
                </a>
                <a href="{{ url('profil') }}" class="relative group py-1 hover:text-slate-900 transition-colors duration-300">
                    Tentang Kami
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#043978] rounded-full group-hover:w-full transition-all duration-500"></span>
                </a>
            @endif
        </div>

        <div class="flex items-center gap-4">
    
    @if(Auth::check() && Auth::user()->role === 'admin' && Str::contains(Request::path(), 'admin'))
        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button type="submit" class="hidden md:flex items-center gap-2 bg-red-50 text-red-600 border border-red-100 px-5 py-2.5 rounded-xl text-[10px] font-black tracking-wider hover:bg-red-600 hover:text-white transition-all duration-300">
                <i class="fa-solid fa-power-off"></i> LOGOUT
            </button>
        </form>
    @else
        {{-- Link WhatsApp dengan pesan otomatis --}}
        <a href="https://wa.me/6282123852658?text=Halo%20Nusa%20Geospatial%20Solution,%20saya%20ingin%20bertanya%20mengenai%20layanan%20Anda." 
           target="_blank" 
           class="hidden md:block bg-slate-900 text-white px-6 py-2.5 rounded-xl text-[10px] font-black tracking-wider hover:bg-[#043978] hover:shadow-xl transition-all duration-300 uppercase">
            HUBUNGI KAMI
        </a>
    @endif

    <button id="menuBtn" class="md:hidden text-slate-800 p-2 text-xl focus:outline-none transition-transform active:scale-90">
        <i class="fa-solid fa-bars-staggered"></i>
    </button>
</div>
    </div>

    <div id="mobileMenu" class="hidden absolute top-20 left-4 right-4 bg-white p-8 rounded-[2rem] shadow-2xl md:hidden border border-slate-100 animate-in fade-in zoom-in duration-300">
        <div class="flex flex-col gap-6 text-center font-black text-sm uppercase tracking-widest">
            
            @if(Auth::check() && Auth::user()->role === 'admin' && Str::contains(Request::path(), 'admin'))
                <a href="{{ url('/admin/homeadmin') }}" class="text-[#043978]">Dashboard Admin</a>
                <a href="{{ url('/admin/produkadmin') }}" class="text-slate-600">Kelola Katalog</a>
                <hr class="border-slate-100">
                <form method="POST" action="{{ url('/logout') }}">
                    @csrf
                    <button type="submit" class="text-red-600 w-full flex items-center justify-center gap-2">
                        <i class="fa-solid fa-power-off text-xl"></i> LOGOUT
                    </button>
                </form>
            @else
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-[#043978]' : 'text-slate-600' }}">Beranda</a>
                <a href="{{ url('produk') }}" class="{{ Request::is('produk*') ? 'text-[#043978]' : 'text-slate-600' }}">Produk</a>
                <a href="{{ url('service') }}" class="text-slate-600">Layanan</a>
                <a href="{{ url('profil') }}" class="text-slate-600">Tentang Kami</a>
                <hr class="border-slate-100">
                <a href="https://wa.me/..." class="text-green-600 flex items-center justify-center gap-2 group">
                    <i class="fa-brands fa-whatsapp text-xl transition-transform group-hover:rotate-12"></i> Konsultasi WA
                </a>
            @endif

        </div>
    </div>
</nav>


<a href="https://wa.me/6282123852658?text=Halo%20Nusa%20Geospatial%20Solution,%20saya%20tertarik%20dengan%20layanan%20Anda%20dan%20ingin%20berkonsultasi." 
   target="_blank" 
   class="fixed bottom-8 right-8 z-[100] group">
    
    <div class="absolute inset-0 bg-green-500 rounded-full blur-xl opacity-40 group-hover:opacity-70 group-hover:scale-125 transition-all duration-500"></div>
    
    <div class="relative bg-green-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl transition-transform duration-300 group-hover:scale-110 active:scale-95">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </div>
</a>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', function (e) {
                // Mencegah klik 'tembus' ke latar belakang
                e.stopPropagation(); 
                
                // Munculkan atau sembunyikan menu
                mobileMenu.classList.toggle('hidden');
                
                // Ganti Icon (Garis Tiga jadi Silang)
                const icon = menuBtn.querySelector('i');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars-staggered');
                } else {
                    icon.classList.remove('fa-bars-staggered');
                    icon.classList.add('fa-xmark');
                }
            });

            // Menutup menu otomatis jika user klik di mana saja selain menu
            document.addEventListener('click', function (e) {
                if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    const icon = menuBtn.querySelector('i');
                    if(icon) {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars-staggered');
                    }
                }
            });
        }
    });
</script>