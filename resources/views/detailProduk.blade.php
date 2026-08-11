<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>{{ $produk->name }} Detail | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FFFFFF; scroll-behavior: smooth; }
        .smooth-transition { transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); }
        .tech-card-dark { 
            background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25);
        }
        .bg-laser-matrix {
            background-size: 36px 36px;
            background-image: 
                radial-gradient(circle, rgba(201, 73, 15, 0.12) 1.5px, transparent 1.5px),
                linear-gradient(to right, rgba(201, 73, 15, 0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(201, 73, 15, 0.02) 1px, transparent 1px);
        }
    </style>
</head>
<body class="text-slate-900 overflow-x-hidden relative selection:bg-[#C9490F] selection:text-white">

    @include('nav')

    <!-- HEADER SECTION -->
    <header class="pt-40 pb-8 px-6 max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-orange-100 pb-10">
            <div class="space-y-3">
                <div class="flex items-center gap-2 text-[10px] font-mono font-bold text-orange-600 uppercase tracking-widest">
                    <span>{{ $produk->brand }}</span>
                    <span class="text-slate-300">//</span>
                    <span class="text-slate-400">PRECISION HARDWARE INSTRUMENT</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-slate-950 tracking-tight leading-none uppercase italic">{{ $produk->name }}</h1>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <div class="px-4 py-2 bg-slate-50 rounded-full border border-slate-200 text-[10px] font-mono font-bold text-slate-600 uppercase tracking-widest flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> In Stock
                </div>
                @if($produk->badge)
                <div class="px-5 py-2 bg-gradient-to-r from-orange-600 to-amber-500 rounded-full text-[10px] font-black text-white uppercase tracking-widest shadow-lg shadow-orange-500/25">
                    {{ $produk->badge }}
                </div>
                @endif
            </div>
        </div>
    </header>

    <!-- MAIN PRODUCT SECTION -->
    <main class="max-w-7xl mx-auto px-6 py-8 relative">
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10 bg-laser-matrix">
            <div class="absolute top-1/3 left-10 w-[450px] h-[450px] bg-gradient-to-br from-orange-600/10 via-amber-400/5 to-transparent rounded-full blur-[100px]"></div>
            <div class="absolute bottom-1/4 right-10 w-[550px] h-[550px] bg-gradient-to-tr from-orange-500/10 via-amber-300/5 to-transparent rounded-full blur-[130px]"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 relative z-10">
            
            <!-- KOLOM KIRI: FOTO UTAMA & GALERI THUMBNAIL -->
            <div class="lg:col-span-7 space-y-8">
                <!-- GAMBAR UTAMA: SINKRON BERSIH DENGAN FULL AREA TANPA TERPOTONG -->
                <div onclick="openShopeeModal()" class="w-full aspect-[1.2/1] rounded-[3.5rem] bg-white flex items-center justify-center p-0 border-2 border-orange-100 shadow-[0_20px_60px_-15px_rgba(201,73,15,0.1)] relative overflow-hidden group cursor-zoom-in">
                    <img id="mainProductImage" src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->name }}" class="w-full h-full object-contain drop-shadow-sm group-hover:scale-105 transition-transform duration-500">
                    
                    <div class="absolute bottom-8 right-8 flex gap-3 z-10">
                        <button type="button" class="w-12 h-12 rounded-2xl bg-white/90 backdrop-blur shadow-md border border-orange-100 flex items-center justify-center text-slate-500 group-hover:text-orange-600 group-hover:scale-105 transition-all">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                </div>
                
                @php
                    $allImages = [$produk->image];
                    if(isset($produk->gallery) && is_array($produk->gallery)) {
                        $allImages = array_merge($allImages, $produk->gallery);
                    }
                @endphp

                <!-- LIST THUMBNAIL GALERI -->
                @if(count($allImages) > 1)
                <div class="flex flex-wrap gap-5 mt-6">
                    @foreach($allImages as $idx => $img)
                    <div onmouseenter="changeMainImage('{{ asset('storage/' . $img) }}', {{ $idx }}, this)" 
                         onclick="openShopeeModal({{ $idx }})" 
                         class="thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl {{ $idx == 0 ? 'border-2 border-[#C9490F] opacity-100 bg-white shadow-md' : 'border border-slate-200 opacity-60 bg-slate-50 hover:bg-white' }} p-1 cursor-pointer overflow-hidden shrink-0 transition-all duration-300">
                        <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-contain rounded-2xl">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- KOLOM KANAN: DESKRIPSI & KEUNGGULAN -->
            <div class="lg:col-span-5 space-y-10">
                <div class="tech-card-dark p-10 rounded-[3rem] text-white relative overflow-hidden border border-slate-800">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500/20 rounded-full blur-3xl -mr-16 -mt-16"></div>
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
                    
                    <h3 class="text-[10px] font-mono font-bold uppercase tracking-[0.3em] text-orange-400 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-microchip"></i> Deskripsi Detail
                    </h3>
                    
                    <p class="text-sm leading-relaxed text-slate-300 font-medium italic">
                        "{{ $produk->full_description ?? 'Deskripsi detail belum ditambahkan.' }}"
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 px-2">Key Advantages</h4>
                    <div class="grid grid-cols-1 gap-4">
                        @if($produk->advantages && count($produk->advantages) > 0)
                            @foreach($produk->advantages as $adv)
                            <div class="flex items-center gap-5 p-5 rounded-3xl bg-white/90 backdrop-blur-md border border-orange-100 hover:border-orange-300 hover:shadow-xl hover:shadow-orange-500/10 transition-all duration-300">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-500 flex items-center justify-center text-white text-xl shadow-md shadow-orange-500/25 shrink-0">
                                    <i class="fa-solid {{ $adv['icon'] }}"></i>
                                </div>
                                <div>
                                    <h5 class="text-sm font-black text-slate-900 uppercase tracking-tight">{{ $adv['title'] }}</h5>
                                    <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider mt-0.5">{{ $adv['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p class="text-xs italic text-slate-400 pl-2">Fitur keunggulan belum ditambahkan.</p>
                        @endif
                    </div>
                </div>
                
                <div class="flex flex-col gap-4 pt-4">
                    <a href="https://wa.me/6282123852658?text=Halo%20Tim%20K%20Survey,%20saya%20tertarik%20dan%20ingin%20meminta%20penawaran%20harga%20(quotation)%20untuk%20alat%20*{{ urlencode($produk->name) }}*.%20Boleh%20dibantu%20informasi%20lebih%20lanjutnya%3F" target="_blank" class="group flex items-center justify-center gap-4 bg-gradient-to-r from-orange-600 to-orange-500 text-white py-5 rounded-[2rem] font-black text-xs uppercase tracking-widest hover:brightness-110 transition-all shadow-2xl shadow-orange-500/30">
                        <i class="fa-brands fa-whatsapp text-xl group-hover:rotate-12 transition-transform"></i> 
                        Minta Penawaran Harga
                    </a>
                </div>
            </div>
        </div>

        <!-- SPESIFIKASI TEKNIS -->
        <div class="mt-32 space-y-10 relative z-10">
            <div class="flex flex-col gap-2">
                <p class="text-[10px] font-mono font-bold text-orange-600 uppercase tracking-[0.4em]">Inside Technology</p>
                <h2 class="text-3xl md:text-4xl font-black text-slate-950 tracking-tight uppercase italic">Spesifikasi Teknis</h2>
            </div>
            
            <div class="bg-white/95 backdrop-blur-md rounded-[3.5rem] border-2 border-orange-100 p-8 md:p-14 shadow-sm shadow-orange-500/5 relative overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-1">
                    @if($produk->specifications && count($produk->specifications) > 0)
                        @foreach($produk->specifications as $spec)
                        <div class="spec-row flex justify-between items-center py-6 border-b border-slate-100 last:border-none">
                            <span class="text-[11px] font-mono font-bold uppercase tracking-widest text-slate-400">{{ $spec['label'] }}</span>
                            <span class="text-sm font-extrabold text-slate-900">{{ $spec['value'] }}</span>
                        </div>
                        @endforeach
                    @else
                        <p class="col-span-2 text-center text-slate-400 italic py-10">Spesifikasi teknis belum tersedia.</p>
                    @endif
                </div>
            </div> 
        </div>
    </main>

    @include('footer')

    <!-- MODAL POPUP LIGHTBOX (STYLE SHOPEE) -->
    <div id="shopeeModal" class="hidden fixed inset-0 z-[10000] bg-black/85 backdrop-blur-md flex items-center justify-center p-4 md:p-8 opacity-0 transition-opacity duration-300">
        <button onclick="closeShopeeModal()" class="absolute top-6 right-6 text-white/70 hover:text-white text-3xl transition-colors z-20">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="bg-white rounded-3xl p-6 md:p-10 max-w-5xl w-full max-h-[90vh] overflow-y-auto flex flex-col md:flex-row gap-8 relative shadow-2xl scale-95 transition-transform duration-300" id="shopeeModalBox">
            <div class="flex-1 relative flex items-center justify-center bg-white rounded-2xl p-0 min-h-[350px] md:min-h-[480px] overflow-hidden">
                <button onclick="prevShopeeImg()" class="absolute left-3 top-1/2 -translate-y-1/2 w-11 h-11 bg-black/40 hover:bg-[#C9490F] text-white rounded-full flex items-center justify-center backdrop-blur transition-all shadow-lg z-10">
                    <i class="fa-solid fa-chevron-left text-base"></i>
                </button>

                <img id="shopeeActiveImg" src="" class="w-full h-full max-h-[460px] object-contain rounded-xl drop-shadow-md transition-all duration-300">

                <button onclick="nextShopeeImg()" class="absolute right-3 top-1/2 -translate-y-1/2 w-11 h-11 bg-black/40 hover:bg-[#C9490F] text-white rounded-full flex items-center justify-center backdrop-blur transition-all shadow-lg z-10">
                    <i class="fa-solid fa-chevron-right text-base"></i>
                </button>
            </div>

            <div class="w-full md:w-80 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <span class="text-xs font-bold text-[#C9490F] uppercase tracking-widest">{{ $produk->brand }}</span>
                    <h3 class="text-xl font-black text-slate-900 leading-tight uppercase">{{ $produk->name }}</h3>
                    <p class="text-xs text-slate-500 font-medium">Pratinjau galeri gambar:</p>
                    
                    <div class="grid grid-cols-3 gap-3 pt-2" id="shopeeModalThumbnails">
                        @foreach($allImages as $i => $img)
                        <div onclick="selectShopeeImg({{ $i }})" class="shopee-thumb-btn aspect-square rounded-xl border p-1 bg-slate-50 cursor-pointer overflow-hidden transition-all duration-200 hover:border-[#C9490F]">
                            <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-contain rounded-lg">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-[11px] font-mono text-slate-400 uppercase font-bold" id="shopeeImgCounter">1 / {{ count($allImages) }}</span>
                    <button onclick="closeShopeeModal()" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase rounded-xl transition-colors">Tutup Pratinjau</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT SYSTEM LOGIC -->
    <script>
        const galleryList = @json(array_map(function($path) { return asset('storage/' . $path); }, $allImages));
        let currentImgIndex = 0;

        function changeMainImage(imageSrc, index, element) {
            currentImgIndex = index;
            const mainImage = document.getElementById('mainProductImage');
            
            mainImage.style.opacity = 0.5;
            setTimeout(() => {
                mainImage.src = imageSrc;
                mainImage.style.opacity = 1;
            }, 80);

            const allThumbnails = document.querySelectorAll('.thumbnail-btn');
            allThumbnails.forEach(thumb => {
                thumb.className = 'thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl border border-slate-200 p-1 bg-slate-50 hover:bg-white cursor-pointer overflow-hidden opacity-60 hover:opacity-100 shrink-0 transition-all duration-300';
            });

            element.className = 'thumbnail-btn aspect-square w-20 md:w-28 rounded-3xl border-2 border-[#C9490F] p-1 bg-white shadow-md cursor-pointer overflow-hidden shrink-0 opacity-100 transition-all duration-300';
        }

        function openShopeeModal(startIndex) {
            if (startIndex !== undefined) {
                currentImgIndex = startIndex;
            }
            updateShopeeModalContent();
            
            const modal = document.getElementById('shopeeModal');
            const modalBox = document.getElementById('shopeeModalBox');
            modal.classList.remove('hidden');
            
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalBox.classList.remove('scale-95');
            }, 10);
        }

        function closeShopeeModal() {
            const modal = document.getElementById('shopeeModal');
            const modalBox = document.getElementById('shopeeModalBox');
            modal.classList.add('opacity-0');
            modalBox.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        function selectShopeeImg(index) {
            currentImgIndex = index;
            updateShopeeModalContent();
        }

        function nextShopeeImg() {
            currentImgIndex = (currentImgIndex + 1) % galleryList.length;
            updateShopeeModalContent();
        }

        function prevShopeeImg() {
            currentImgIndex = (currentImgIndex - 1 + galleryList.length) % galleryList.length;
            updateShopeeModalContent();
        }

        function updateShopeeModalContent() {
            const activeImg = document.getElementById('shopeeActiveImg');
            activeImg.src = galleryList[currentImgIndex];

            document.getElementById('shopeeImgCounter').innerText = `${currentImgIndex + 1} / ${galleryList.length}`;

            const thumbs = document.querySelectorAll('.shopee-thumb-btn');
            thumbs.forEach((thumb, idx) => {
                if(idx === currentImgIndex) {
                    thumb.className = 'shopee-thumb-btn aspect-square rounded-xl border-2 border-[#C9490F] p-1 bg-white shadow-sm cursor-pointer overflow-hidden transition-all duration-200';
                } else {
                    thumb.className = 'shopee-thumb-btn aspect-square rounded-xl border border-slate-200 p-1 bg-slate-50 cursor-pointer overflow-hidden opacity-60 hover:opacity-100 transition-all duration-200';
                }
            });
        }
    </script>

</body>
</html>