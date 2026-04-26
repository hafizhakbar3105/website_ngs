<footer class="bg-slate-900 text-slate-400 pt-20 pb-10 px-6 border-t border-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <div class="space-y-6">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('img/logo.png') }}" alt="NusaGeo Logo" class="h-20 w-auto">
                </div>
                <p class="text-sm leading-relaxed">
                    Penyedia solusi pengukuran modern dan peralatan geospasial presisi tinggi untuk berbagai sektor industri di Indonesia.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center hover:bg-pink-600 hover:border-pink-600 transition text-white"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full border border-slate-700 flex items-center justify-center hover:bg-red-600 hover:border-red-600 transition text-white"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Navigasi</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition">Beranda</a></li>
                    <li><a href="{{ route('produk.index') }}" class="hover:text-blue-400 transition">Katalog Produk</a></li>
                    
                    <li>
                        <a href="https://wa.me/6282123852658?text=Halo%20Nusa%20Geospatial%20Solution,%20saya%20ingin%20bertanya%20mengenai%20Layanan%20Kalibrasi%20Alat." 
                           target="_blank" 
                           class="hover:text-blue-400 transition flex items-center gap-2">
                            Layanan Kalibrasi <i class="fa-brands fa-whatsapp text-xs opacity-70"></i>
                        </a>
                    </li>
                    
                    <li><a href="{{ url('/profil') }}" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Kategori Produk</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('produk.index') }}?category=GNSS" class="hover:text-blue-400 transition">GNSS RTK System</a></li>
                    <li><a href="{{ route('produk.index') }}?category=TotalStation" class="hover:text-blue-400 transition">Total Station</a></li>
                    <li><a href="{{ route('produk.index') }}?category=LiDAR" class="hover:text-blue-400 transition">LiDAR SLAM</a></li>
                    <li><a href="{{ route('produk.index') }}?category=Drone" class="hover:text-blue-400 transition">Drone Mapping</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-6">Kontak & Lokasi</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex gap-3">
                        <i class="fa-solid fa-location-dot text-blue-500 mt-1"></i>
                        <span>Jl. Raya Geospasial No. 10, Sukabumi, Jawa Barat</span>
                    </li>
                    <li class="flex gap-3">
                        <i class="fa-solid fa-envelope text-blue-500 mt-1"></i>
                        <a href="mailto:admin@nusageospatialsolution.co.id" class="hover:text-blue-400 transition">admin@nusageospatialsolution.co.id</a>
                    </li>
                    <li class="flex gap-3">
                        <i class="fa-solid fa-phone text-blue-500 mt-1"></i>
                        <a href="https://wa.me/6282123852658" target="_blank" class="hover:text-blue-400 transition">+62 821-2385-2658</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] font-bold uppercase tracking-widest">
            <p>© 2026 NUSA GEOSPATIAL SOLUTION. ALL RIGHTS RESERVED</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Terms of Service</a>
                <a href="{{ route('login.admin') }}" class="opacity-0 hover:opacity-100 transition">Admin Portal</a>
            </div>
        </div>
    </div>
</footer>