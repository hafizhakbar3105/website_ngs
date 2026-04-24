<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHCNAV i93 Detail | Admin Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; scroll-behavior: smooth; }
        
        /* Smooth Transition untuk elemen publik */
        .public-transition { transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1); }

        .tech-card-dark { 
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25);
        }
        
        .spec-row { border-bottom: 1px solid rgba(226, 232, 240, 0.5); }
        .spec-row:last-child { border-bottom: none; }
        
        .img-main-container {
            background: radial-gradient(circle at center, #ffffff 0%, #f1f5f9 100%);
        }

        /* --- STYLES KHUSUS ADMIN --- */
        .admin-input {
            background-color: #F8FAFC; border: 1px solid #E2E8F0; transition: all 0.2s ease;
        }
        .admin-input:focus {
            background-color: #FFFFFF; border-color: #043978; outline: none;
            box-shadow: 0 0 0 4px rgba(4, 57, 120, 0.08);
        }
        .custom-scrollbar::-webkit-scrollbar { display: none; }
        .custom-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Tombol Admin Panel */
        .admin-btn {
            background-color: #043978; color: white; transition: all 0.3s ease;
        }
        .admin-btn:hover { background-color: #022047; }
    </style>
</head>
<body > 

    @include('nav')
<br>
    <header class="pt-32 pb-12 px-6 max-w-7xl mx-auto relative group">
        <div class="absolute top-20 right-6 z-50">
            <button onclick="openModal('detailModal')" class="admin-btn px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest flex items-center gap-2 shadow-lg border border-white/10">
                <i class="fa-solid fa-pen-to-square"></i> Edit Konten Utama
            </button>
        </div>

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-slate-100 pb-10">
            <div class="space-y-2">
                <span class="text-[#043978] font-bold text-xs uppercase tracking-widest">CHCNAV GNSS System</span>
                <h1 class="text-4xl md:text-6xl font-black text-slate-950 tracking-tighter leading-none">i93 Visual IMU RTK</h1>
            </div>
            <div class="flex gap-3">
                <div class="px-4 py-2 bg-slate-50 rounded-full border border-slate-100 text-[10px] font-bold text-slate-500 uppercase tracking-widest">In Stock</div>
                <div class="px-4 py-2 bg-blue-50 rounded-full border border-blue-100 text-[10px] font-bold text-[#043978] uppercase tracking-widest">New Technology</div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <div class="lg:col-span-7 space-y-8 relative">
                <div class="img-main-container aspect-[1.2/1] rounded-[3.5rem] flex items-center justify-center p-16 border border-slate-50 relative overflow-hidden group">
                    <img src="img/products/i93-large.png" alt="CHCNAV i93" class="w-4/5 h-4/5 object-contain drop-shadow-2xl public-transition group-hover:scale-105">
                </div>
                
                <div class="grid grid-cols-4 gap-6">
                    <div class="aspect-square rounded-3xl border-2 border-[#043978] p-3 bg-white shadow-sm cursor-pointer overflow-hidden"><img src="img/products/i93-1.png" class="w-full h-full object-contain"></div>
                    <div class="aspect-square rounded-3xl border border-slate-100 p-3 bg-slate-50 hover:bg-white public-transition cursor-pointer overflow-hidden opacity-60 hover:opacity-100"><img src="img/products/i93-2.png" class="w-full h-full object-contain"></div>
                    
                    <div class="aspect-square rounded-3xl border-2 border-dashed border-slate-200 bg-slate-50 hover:border-[#043978] flex flex-col items-center justify-center cursor-pointer transition-colors group">
                        <i class="fa-solid fa-plus text-xl text-slate-300 group-hover:text-[#043978] mb-2"></i>
                        <span class="text-[8px] font-black uppercase tracking-widest text-slate-400">Add Photo</span>
                    </div>
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
                        <div class="flex items-center gap-5 p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl public-transition">
                            <div class="w-12 h-12 rounded-2xl bg-[#043978] flex items-center justify-center text-white text-xl"><i class="fa-solid fa-camera"></i></div>
                            <div>
                                <h5 class="text-sm font-black text-slate-900 uppercase">Visual Assist 2.0</h5>
                                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">AR Powered Navigation</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-5 p-5 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl public-transition">
                            <div class="w-12 h-12 rounded-2xl bg-[#043978] flex items-center justify-center text-white text-xl"><i class="fa-solid fa-microchip"></i></div>
                            <div>
                                <h5 class="text-sm font-black text-slate-900 uppercase">Professional IMU</h5>
                                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">60° Tilt Compensation</p>
                            </div>
                            
                        </div>
                        <a href="#" class="flex items-center justify-center gap-3 bg-white border border-slate-200 text-slate-900 py-5 rounded-[2rem] font-black uppercase tracking-widest hover:bg-slate-50 transition-all">
        <i class="fa-solid fa-download text-xs"></i> Brosur Teknis
    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-32 space-y-12 relative border-t border-slate-100 pt-16">
            
            <div class="absolute top-16 right-0 z-50">
                <button onclick="openModal('specModal')" class="admin-btn px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest flex items-center gap-2 shadow-lg border border-white/10">
                    <i class="fa-solid fa-list-check"></i> Kelola Spesifikasi Data
                </button>
            </div>

            <div class="flex flex-col gap-4">
                <p class="text-[11px] font-black text-[#043978] uppercase tracking-[0.4em]">Inside Technology</p>
                <h2 class="text-3xl md:text-4xl font-black text-slate-950 tracking-tight">Spesifikasi Teknis</h2>
            </div>
            
            <div class="bg-white rounded-[3.5rem] border border-slate-100 p-8 md:p-12 shadow-sm relative">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-2" id="specContainer">
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


    <div id="detailModal" class="hidden fixed inset-0 z-[9999] bg-slate-900/85 backdrop-blur-sm items-center justify-center p-4 transition-all duration-300">
    <div class="absolute inset-0" onclick="closeModal('detailModal')"></div>
    
    <div class="relative bg-white w-full max-w-4xl rounded-[2.5rem] shadow-2xl flex flex-col max-h-[90vh] overflow-hidden border border-slate-200 mx-auto animate-in zoom-in-95 duration-300">
        
        <div class="bg-slate-50 px-8 py-6 border-b border-slate-200 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md"><i class="fa-solid fa-pen-to-square"></i></div>
                <div>
                    <h3 class="text-xl font-black text-slate-900 uppercase tracking-tight">Edit Konten Utama</h3>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Visual, General Information & Advantages</p>
                </div>
            </div>
            <button onclick="closeModal('detailModal')" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center"><i class="fa-solid fa-xmark text-lg"></i></button>
        </div>

        <div class="p-8 overflow-y-auto custom-scrollbar bg-white">
            <form class="space-y-10">
                
                <div class="space-y-4 bg-slate-50/50 p-6 rounded-3xl border border-slate-100">
                    <div class="flex justify-between items-center border-b border-slate-200 pb-3">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1"><i class="fa-solid fa-images mr-2"></i> Manajemen Galeri Visual</label>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        
                        <div class="relative group aspect-square bg-white border border-slate-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm">
                            <span class="absolute top-2 left-2 bg-[#043978] text-white text-[8px] font-black px-2 py-1 rounded-md uppercase tracking-widest z-10 shadow-sm">Main Photo</span>
                            <img src="img/products/i93-large.png" class="w-full h-full object-contain p-4">
                            
                            <div class="absolute inset-0 bg-slate-900/70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm z-20">
                                <label class="w-10 h-10 rounded-xl bg-white text-[#043978] hover:bg-slate-200 flex items-center justify-center shadow-lg cursor-pointer transition-transform hover:scale-110" title="Ganti Foto Utama">
                                    <i class="fa-solid fa-camera-rotate text-sm"></i>
                                    <input type="file" class="hidden" accept="image/*">
                                </label>
                            </div>
                        </div>

                        <div class="relative group aspect-square bg-white border border-slate-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm">
                            <img src="img/products/i93-1.png" class="w-full h-full object-contain p-4">
                            
                            <div class="absolute inset-0 bg-slate-900/70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3 backdrop-blur-sm z-20">
                                <label class="w-9 h-9 rounded-xl bg-white text-[#043978] hover:bg-slate-200 flex items-center justify-center shadow-lg cursor-pointer transition-transform hover:scale-110" title="Ganti Foto">
                                    <i class="fa-solid fa-camera-rotate text-xs"></i>
                                    <input type="file" class="hidden" accept="image/*">
                                </label>
                                <button type="button" class="w-9 h-9 rounded-xl bg-red-500 text-white hover:bg-red-600 flex items-center justify-center shadow-lg transition-transform hover:scale-110" title="Hapus Foto">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>

                        <div class="relative group aspect-square bg-white border border-slate-200 rounded-2xl flex items-center justify-center overflow-hidden shadow-sm">
                            <img src="img/products/i93-2.png" class="w-full h-full object-contain p-4">
                            
                            <div class="absolute inset-0 bg-slate-900/70 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3 backdrop-blur-sm z-20">
                                <label class="w-9 h-9 rounded-xl bg-white text-[#043978] hover:bg-slate-200 flex items-center justify-center shadow-lg cursor-pointer transition-transform hover:scale-110" title="Ganti Foto">
                                    <i class="fa-solid fa-camera-rotate text-xs"></i>
                                    <input type="file" class="hidden" accept="image/*">
                                </label>
                                <button type="button" class="w-9 h-9 rounded-xl bg-red-500 text-white hover:bg-red-600 flex items-center justify-center shadow-lg transition-transform hover:scale-110" title="Hapus Foto">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>

                        <label class="aspect-square bg-white border-2 border-dashed border-slate-300 rounded-2xl flex flex-col items-center justify-center cursor-pointer hover:border-[#043978] hover:bg-blue-50/30 transition-all group">
                            <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-[#043978] mb-3 transition-colors"></i>
                            <span class="text-[9px] font-black uppercase tracking-widest text-slate-400 group-hover:text-[#043978]">Tambah Foto</span>
                            <input type="file" class="hidden" accept="image/*">
                        </label>
                    </div>
                    <p class="text-[9px] font-bold text-slate-400 italic pt-1">* Gunakan format PNG transparan dengan resolusi minimal 800x800px untuk hasil terbaik.</p>
                </div>

                <div class="space-y-6 pt-4">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Sub-Judul (Kategori)</label>
                            <input type="text" class="admin-input w-full rounded-xl p-4 text-sm font-bold" value="CHCNAV GNSS System">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Nama Produk Utama</label>
                            <input type="text" class="admin-input w-full rounded-xl p-4 text-sm font-bold" value="i93 Visual IMU RTK">
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Deskripsi Utama (Field Application)</label>
                        <textarea rows="4" class="admin-input w-full rounded-xl p-4 text-sm font-medium resize-none leading-relaxed">"Optimasi pekerjaan survei di area dengan gangguan sinyal tinggi. Teknologi Visual Stakeout AR kami memungkinkan navigasi titik 50% lebih cepat dengan akurasi sub-sentimeter yang konsisten."</textarea>
                    </div>

                    <div class="space-y-2 pt-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Brosur Teknis (PDF)</label>
                        <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="w-12 h-12 bg-red-50 text-red-500 border border-red-100 rounded-xl flex items-center justify-center text-xl shrink-0 shadow-sm">
                                <i class="fa-solid fa-file-pdf"></i>
                            </div>
                            <div class="flex-grow">
                                <p class="text-sm font-bold text-slate-900">brosur-spesifikasi-i93.pdf</p>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Ukuran: 2.4 MB</p>
                            </div>
                            <div class="flex gap-2">
                                <label class="w-10 h-10 bg-white border border-slate-200 text-slate-500 rounded-xl hover:text-[#043978] hover:border-[#043978] transition-colors flex items-center justify-center cursor-pointer shadow-sm" title="Upload / Ganti Brosur">
                                    <i class="fa-solid fa-upload text-sm"></i>
                                    <input type="file" accept=".pdf" class="hidden">
                                </label>
                                <button type="button" class="w-10 h-10 bg-white border border-slate-200 text-red-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shadow-sm" title="Hapus Brosur">
                                    <i class="fa-solid fa-trash text-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100">
                    <div class="flex justify-between items-center mb-5 border-b border-slate-100 pb-3">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1"><i class="fa-solid fa-star mr-2"></i> Key Advantages (Keunggulan)</label>
                        <button type="button" class="text-[9px] font-black text-[#043978] bg-blue-50 px-4 py-2 rounded-lg uppercase tracking-widest hover:bg-[#043978] hover:text-white transition-colors border border-blue-100"><i class="fa-solid fa-plus mr-1"></i> Tambah Blok Fitur</button>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex gap-4 items-center bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="space-y-1 w-1/4">
                                <label class="text-[8px] font-black uppercase text-slate-400">Icon (Class)</label>
                                <input type="text" class="admin-input w-full rounded-xl p-3 text-xs" value="fa-camera" placeholder="Ex: fa-camera">
                            </div>
                            <div class="space-y-1 w-full">
                                <label class="text-[8px] font-black uppercase text-slate-400">Judul Fitur</label>
                                <input type="text" class="admin-input w-full rounded-xl p-3 text-xs font-bold" value="Visual Assist 2.0" placeholder="Ex: Visual Assist">
                            </div>
                            <div class="space-y-1 w-full">
                                <label class="text-[8px] font-black uppercase text-slate-400">Deskripsi Pendek</label>
                                <input type="text" class="admin-input w-full rounded-xl p-3 text-xs" value="AR Powered Navigation" placeholder="Ex: Deskripsi fitur...">
                            </div>
                            <div class="pt-4">
                                <button type="button" class="w-11 h-11 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white hover:border-red-500 transition-colors flex items-center justify-center shrink-0 shadow-sm" title="Hapus Fitur"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>

                        <div class="flex gap-4 items-center bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <div class="space-y-1 w-1/4">
                                <label class="text-[8px] font-black uppercase text-slate-400">Icon (Class)</label>
                                <input type="text" class="admin-input w-full rounded-xl p-3 text-xs" value="fa-microchip" placeholder="Ex: fa-microchip">
                            </div>
                            <div class="space-y-1 w-full">
                                <label class="text-[8px] font-black uppercase text-slate-400">Judul Fitur</label>
                                <input type="text" class="admin-input w-full rounded-xl p-3 text-xs font-bold" value="Professional IMU" placeholder="Ex: IMU Canggih">
                            </div>
                            <div class="space-y-1 w-full">
                                <label class="text-[8px] font-black uppercase text-slate-400">Deskripsi Pendek</label>
                                <input type="text" class="admin-input w-full rounded-xl p-3 text-xs" value="60° Tilt Compensation" placeholder="Ex: Kompensasi 60 derajat">
                            </div>
                            <div class="pt-4">
                                <button type="button" class="w-11 h-11 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white hover:border-red-500 transition-colors flex items-center justify-center shrink-0 shadow-sm" title="Hapus Fitur"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-slate-50 px-10 py-6 border-t border-slate-200 flex justify-end gap-3 rounded-b-[2.5rem]">
            <button type="button" onclick="closeModal('detailModal')" class="px-8 py-3.5 rounded-xl font-black text-[10px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
            <button type="button" onclick="saveData('detailModal')" class="px-10 py-3.5 bg-[#043978] text-white rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-blue-900/20 flex items-center gap-2 hover:bg-slate-900 transition-colors"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan Utama</button>
        </div>
    </div>
</div>

        <div class="bg-slate-50 px-10 py-6 border-t border-slate-200 flex justify-end gap-3 rounded-b-[2.5rem]">
            <button type="button" onclick="closeModal('detailModal')" class="px-8 py-3.5 rounded-xl font-black text-[10px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
            <button type="button" onclick="saveData('detailModal')" class="px-10 py-3.5 admin-btn rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-blue-900/20 flex items-center gap-2"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan Utama</button>
        </div>
    </div>
</div>


    <div id="specModal" class="hidden fixed inset-0 z-[9999] bg-slate-900/85 backdrop-blur-sm items-center justify-center p-4 transition-all duration-300">
        <div class="absolute inset-0" onclick="closeModal('specModal')"></div>
        
        <div class="relative bg-white w-full max-w-3xl rounded-[2.5rem] shadow-2xl flex flex-col max-h-[90vh] overflow-hidden border border-slate-200 mx-auto animate-in zoom-in-95 duration-300">
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-200 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md"><i class="fa-solid fa-list-check"></i></div>
                    <div>
                        <h3 class="text-xl font-black text-slate-900 uppercase tracking-tight">Tabel Spesifikasi</h3>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Tambah/Hapus parameter teknis</p>
                    </div>
                </div>
                <button onclick="closeModal('specModal')" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div class="p-8 overflow-y-auto custom-scrollbar">
                <div class="space-y-3" id="specListAdmin">
                    <div class="flex gap-4 items-center">
                        <input type="text" class="admin-input w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" value="Total Saluran" placeholder="Label Spesifikasi">
                        <input type="text" class="admin-input w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" value="1408 Channels" placeholder="Nilai Spesifikasi">
                        <button type="button" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <div class="flex gap-4 items-center">
                        <input type="text" class="admin-input w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" value="Akurasi Kinematik" placeholder="Label Spesifikasi">
                        <input type="text" class="admin-input w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" value="8mm + 1ppm (RMS)" placeholder="Nilai Spesifikasi">
                        <button type="button" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <div class="flex gap-4 items-center">
                        <input type="text" class="admin-input w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" value="Daya Tahan Baterai" placeholder="Label Spesifikasi">
                        <input type="text" class="admin-input w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" value="15 Jam Operasional" placeholder="Nilai Spesifikasi">
                        <button type="button" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>

                <button type="button" onclick="addSpecRow()" class="mt-6 w-full py-4 border-2 border-dashed border-slate-300 rounded-xl text-[10px] font-black uppercase tracking-widest text-slate-400 hover:border-[#043978] hover:text-[#043978] transition-colors flex items-center justify-center gap-2 bg-slate-50">
                    <i class="fa-solid fa-plus"></i> Tambah Baris Spesifikasi
                </button>
            </div>

            <div class="bg-slate-50 px-8 py-5 border-t border-slate-200 flex justify-end gap-3">
                <button type="button" onclick="closeModal('specModal')" class="px-6 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
                <button type="button" onclick="saveData('specModal')" class="px-8 py-3 admin-btn rounded-xl font-black text-[10px] uppercase tracking-widest shadow-lg flex items-center gap-2"><i class="fa-solid fa-check"></i> Simpan Spesifikasi</button>
            </div>
        </div>
    </div>

    <script>
        // Fungsi Buka Modal Universal
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Kunci scroll belakang
        }

        // Fungsi Tutup Modal Universal
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Buka scroll belakang
        }

        // Fungsi Simpan Data
        function saveData(modalId) {
            alert("Perubahan berhasil disimpan ke database!");
            closeModal(modalId);
        }

        // Fungsi Tambah Baris Spesifikasi Dinamis (UI Only)
        function addSpecRow() {
            const container = document.getElementById('specListAdmin');
            const row = document.createElement('div');
            row.className = 'flex gap-4 items-center animate-in fade-in duration-300';
            row.innerHTML = `
                <input type="text" class="admin-input w-1/3 rounded-xl p-3.5 text-xs font-bold text-slate-500 uppercase tracking-widest" placeholder="Label (ex: Berat)">
                <input type="text" class="admin-input w-full rounded-xl p-3.5 text-sm font-bold text-slate-900" placeholder="Nilai (ex: 1.5 Kg)">
                <button type="button" onclick="this.parentElement.remove()" class="w-12 h-12 bg-white border border-slate-200 text-slate-400 rounded-xl hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shrink-0"><i class="fa-solid fa-trash"></i></button>
            `;
            container.appendChild(row);
        }
    </script>
</body>
</html>