<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Katalog | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        
        /* Menjaga stabilitas tinggi kartu */
        .tech-card { min-height: 280px; }
        .description-clamp { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
        
        /* Admin Input Style */
        .admin-input { background-color: #F8FAFC; border: 1px solid #E2E8F0; transition: all 0.2s ease; }
        .admin-input:focus { background-color: #FFFFFF; border-color: #043978; outline: none; box-shadow: 0 0 0 4px rgba(4, 57, 120, 0.08); }
        .custom-scrollbar::-webkit-scrollbar { display: none; }
        .custom-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="text-slate-900 pt-16">

    @include('nav')

    <main class="max-w-7xl mx-auto px-6 py-12 flex flex-col lg:flex-row gap-10">
            
        <aside class="lg:w-72 space-y-8 flex-shrink-0">
            <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm sticky top-24">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-[11px] font-black uppercase tracking-[0.2em] text-[#043978]">Filter Kategori</h3>
                    <button title="Kelola Kategori Master" class="text-slate-400 hover:text-[#043978] transition-colors"><i class="fa-solid fa-gear"></i></button>
                </div>
                <nav class="space-y-2">
                    <a href="#" class="group flex items-center justify-between p-4 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm transition-all text-[#043978]">
                        <span class="text-xs font-black uppercase tracking-widest">Semua Alat</span>
                        <span class="text-[10px] font-bold bg-[#043978] text-white px-2 py-0.5 rounded-md">15</span>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-4 rounded-2xl hover:bg-slate-50 text-slate-500 hover:text-[#043978] border border-transparent transition-all">
                        <span class="text-xs font-bold uppercase tracking-widest">GNSS RTK</span>
                        <span class="text-[10px] font-bold bg-slate-100 text-slate-500 px-2 py-0.5 rounded-md group-hover:bg-blue-100 group-hover:text-[#043978]">4</span>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-4 rounded-2xl hover:bg-slate-50 text-slate-500 hover:text-[#043978] border border-transparent transition-all">
                        <span class="text-xs font-bold uppercase tracking-widest">Total Station</span>
                        <span class="text-[10px] font-bold bg-slate-100 text-slate-500 px-2 py-0.5 rounded-md group-hover:bg-blue-100 group-hover:text-[#043978]">3</span>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-4 rounded-2xl hover:bg-slate-50 text-slate-500 hover:text-[#043978] border border-transparent transition-all">
                        <span class="text-xs font-bold uppercase tracking-widest">LiDAR SLAM</span>
                        <span class="text-[10px] font-bold bg-slate-100 text-slate-500 px-2 py-0.5 rounded-md group-hover:bg-blue-100 group-hover:text-[#043978]">5</span>
                    </a>
                    <a href="#" class="group flex items-center justify-between p-4 rounded-2xl hover:bg-slate-50 text-slate-500 hover:text-[#043978] border border-transparent transition-all">
                        <span class="text-xs font-bold uppercase tracking-widest">USV & Marine</span>
                        <span class="text-[10px] font-bold bg-slate-100 text-slate-500 px-2 py-0.5 rounded-md group-hover:bg-blue-100 group-hover:text-[#043978]">3</span>
                    </a>
                </nav>
            </div>
        </aside>

        <section class="flex-1 space-y-6">
            
            <div class="bg-[#043978] p-8 rounded-[2rem] text-white flex flex-col md:flex-row justify-between items-center gap-6 shadow-lg shadow-blue-900/10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-white/5 rounded-full blur-2xl -mr-10 -mt-10"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl font-black uppercase tracking-tight">Database <span class="text-[#E7D532]">Instrumen</span></h2>
                    <p class="text-sm font-medium text-blue-200 mt-1">Sistem manajemen inventaris katalog website.</p>
                </div>
                <button onclick="openCatalogModal('add')" class="relative z-10 w-full md:w-auto bg-[#E7D532] text-[#043978] px-6 py-3.5 rounded-xl font-black text-[11px] uppercase tracking-widest hover:bg-white transition-colors flex items-center justify-center gap-2 shadow-md">
                    <i class="fa-solid fa-plus"></i> Registrasi Alat Baru
                </button>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                
                <div class="tech-card flex flex-col md:flex-row bg-white rounded-[2rem] p-4 border border-slate-200 hover:border-[#043978] transition-colors duration-300 h-full relative shadow-sm">
                    <div class="absolute top-4 right-4 z-30 flex gap-2">
                        <button onclick="openCatalogModal('edit', 'i93 Visual IMU RTK')" class="w-8 h-8 bg-[#043978] text-white rounded-lg shadow-md flex items-center justify-center hover:bg-slate-900 transition-colors"><i class="fa-solid fa-pen text-[10px]"></i></button>
                        <button onclick="deleteCatalogItem('i93 Visual IMU RTK')" class="w-8 h-8 bg-white text-red-600 border border-slate-200 rounded-lg shadow-md flex items-center justify-center hover:bg-red-50 transition-colors"><i class="fa-solid fa-trash text-[10px]"></i></button>
                    </div>

                    <div class="md:w-2/5 relative aspect-square md:aspect-auto bg-slate-50 rounded-[1.5rem] overflow-hidden flex items-center justify-center p-6 flex-shrink-0 border border-slate-100">
                        <div class="absolute top-3 left-3 z-20">
                            <span class="px-2 py-1 bg-green-100 text-green-700 border border-green-200 text-[8px] font-black uppercase tracking-widest rounded-md shadow-sm">Publik</span>
                        </div>
                        <img src="img/products/i93.png" alt="i93" class="w-full h-full object-contain">
                    </div>
                    
                    <div class="p-5 flex flex-col flex-grow justify-between pr-16 md:pr-4">
                        <div class="space-y-1 mt-2 md:mt-0">
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em]">GNSS RTK / CHCNAV</p>
                            <h3 class="text-base font-black text-slate-900 leading-tight uppercase">i93 Visual IMU RTK</h3>
                            <p class="text-[11px] text-slate-500 leading-relaxed description-clamp mt-2">Solusi GNSS premium dengan visual stakeout dan dual-camera untuk akurasi tanpa kompromi di setiap medan.</p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-50">
                            <div class="flex gap-2">
                                <a href="{{ url('detailprodukadmin') }}" class="flex-1 bg-slate-100 text-slate-600 text-center py-2.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-[#043978] hover:text-white transition-colors">
                                    Detail Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tech-card flex flex-col md:flex-row bg-white rounded-[2rem] p-4 border border-slate-200 hover:border-[#043978] transition-colors duration-300 h-full relative shadow-sm">
                    <div class="absolute top-4 right-4 z-30 flex gap-2">
                        <button onclick="openCatalogModal('edit', 'MVP S1 Scanner')" class="w-8 h-8 bg-[#043978] text-white rounded-lg shadow-md flex items-center justify-center hover:bg-slate-900 transition-colors"><i class="fa-solid fa-pen text-[10px]"></i></button>
                        <button onclick="deleteCatalogItem('MVP S1 Scanner')" class="w-8 h-8 bg-white text-red-600 border border-slate-200 rounded-lg shadow-md flex items-center justify-center hover:bg-red-50 transition-colors"><i class="fa-solid fa-trash text-[10px]"></i></button>
                    </div>

                    <div class="md:w-2/5 relative aspect-square md:aspect-auto bg-slate-50 rounded-[1.5rem] overflow-hidden flex items-center justify-center p-6 flex-shrink-0 border border-slate-100">
                        <div class="absolute top-3 left-3 z-20">
                            <span class="px-2 py-1 bg-slate-200 text-slate-600 border border-slate-300 text-[8px] font-black uppercase tracking-widest rounded-md shadow-sm">Draft</span>
                        </div>
                        <img src="img/products/mvps1.png" alt="MVP S1" class="w-full h-full object-contain">
                    </div>
                    
                    <div class="p-5 flex flex-col flex-grow justify-between pr-16 md:pr-4">
                        <div class="space-y-1 mt-2 md:mt-0">
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em]">LiDAR SLAM / TERSUS</p>
                            <h3 class="text-base font-black text-slate-900 leading-tight uppercase">MVP S1 Scanner</h3>
                            <p class="text-[11px] text-slate-500 leading-relaxed description-clamp mt-2">Sistem handheld mobile mapping untuk akuisisi data 3D real-time dengan point cloud berwarna secara instan.</p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-50">
                            <div class="flex gap-2">
                                <a href="{{ url('detailprodukadmin') }}" class="flex-1 bg-slate-100 text-slate-600 text-center py-2.5 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-[#043978] hover:text-white transition-colors">
                                    Detail Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>


    <div id="catalogModal" class="hidden fixed inset-0 z-[9999] bg-slate-900/85 backdrop-blur-sm items-center justify-center p-4 md:p-6 transition-all duration-300">
        <div class="absolute inset-0" onclick="closeCatalogModal()"></div>
        
        <div class="relative bg-white w-full max-w-4xl rounded-[2.5rem] shadow-2xl flex flex-col max-h-[90vh] overflow-hidden border border-slate-200 mx-auto animate-in zoom-in-95 duration-300">
            <div class="bg-slate-50 px-8 py-6 border-b border-slate-200 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#043978] text-white rounded-xl flex items-center justify-center shadow-md"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <div>
                        <h3 id="catalogModalTitle" class="text-xl font-black text-slate-900 uppercase tracking-tight">Formulir Database</h3>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Update inventaris alat ke dalam katalog</p>
                    </div>
                </div>
                <button onclick="closeCatalogModal()" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-500 hover:text-white transition-colors flex items-center justify-center shadow-sm">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <div class="p-8 overflow-y-auto custom-scrollbar bg-white">
                <form id="catalogForm" class="grid grid-cols-1 md:grid-cols-12 gap-8">
                    
                    <div class="md:col-span-5 space-y-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Foto Resolusi Tinggi (PNG)</label>
                            <div class="aspect-square rounded-3xl border-2 border-dashed border-slate-300 bg-slate-50 hover:border-[#043978] transition-colors cursor-pointer flex flex-col items-center justify-center p-6 relative group">
                                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" id="catImageInput" onchange="previewCatalogImg(event)">
                                <div id="catUploadPlaceholder" class="text-center flex flex-col items-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-4xl text-slate-300 group-hover:text-[#043978] mb-3 transition-colors"></i>
                                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Klik / Drop Foto</p>
                                </div>
                                <img id="catImagePreview" src="" class="absolute inset-0 w-full h-full object-contain p-4 hidden">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Status Visibilitas</label>
                            <select class="admin-input w-full rounded-xl p-4 text-sm font-bold appearance-none">
                                <option value="1">Ditayangkan (Publik)</option>
                                <option value="0">Sembunyikan (Draft)</option>
                            </select>
                        </div>
                    </div>

                    <div class="md:col-span-7 space-y-6">
                        <div class="space-y-2 bg-blue-50/50 p-4 rounded-2xl border border-blue-100">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Klasifikasi Kategori</label>
                            <select class="admin-input w-full rounded-xl p-4 text-sm font-bold appearance-none bg-white border-blue-200">
                                <option value="" disabled selected>-- Pilih Kategori Utama --</option>
                                <option value="gnss">GNSS RTK</option>
                                <option value="ts">Total Station</option>
                                <option value="lidar">LiDAR SLAM</option>
                                <option value="usv">USV & Marine</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Merk / Brand</label>
                                <input type="text" class="admin-input w-full rounded-xl p-4 text-sm font-bold" placeholder="Contoh: CHCNAV">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Fitur Utama (Label)</label>
                                <input type="text" class="admin-input w-full rounded-xl p-4 text-sm font-bold" placeholder="Contoh: Visual AR">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Nama Lengkap Alat</label>
                            <input type="text" id="catNameInput" class="admin-input w-full rounded-xl p-4 text-sm font-bold" placeholder="Contoh: i93 Visual IMU RTK">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Deskripsi Katalog</label>
                            <textarea rows="4" class="admin-input w-full rounded-xl p-4 text-sm font-medium resize-none" placeholder="Tulis deskripsi detail..."></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="bg-slate-50 px-10 py-6 border-t border-slate-200 flex justify-end gap-4">
                <button type="button" onclick="closeCatalogModal()" class="px-8 py-3 rounded-xl font-black text-[11px] uppercase tracking-widest text-slate-500 hover:bg-slate-200 transition-colors">Batal</button>
                <button type="button" onclick="saveCatalogItem()" class="px-10 py-3 bg-[#043978] text-white rounded-xl font-black text-[11px] uppercase tracking-widest shadow-lg hover:bg-slate-900 transition-colors flex items-center gap-3"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            </div>
        </div>
    </div>

    @include('footer')

    <script>
        const catModal = document.getElementById('catalogModal');
        const catModalTitle = document.getElementById('catalogModalTitle');
        const catNameInput = document.getElementById('catNameInput');
        const catForm = document.getElementById('catalogForm');
        
        function openCatalogModal(action, productName = '') {
            catModal.classList.remove('hidden');
            catModal.classList.add('flex');
            document.body.style.overflow = 'hidden'; 
            
            if(action === 'edit') {
                catModalTitle.innerHTML = `Edit <span class="text-[#043978]">Data Alat</span>`;
                catNameInput.value = productName;
            } else {
                catModalTitle.innerHTML = `Tambah <span class="text-[#043978]">Alat Baru</span>`;
                catForm.reset(); 
                document.getElementById('catImagePreview').classList.add('hidden');
                document.getElementById('catUploadPlaceholder').classList.remove('hidden');
            }
        }

        function closeCatalogModal() {
            catModal.classList.add('hidden');
            catModal.classList.remove('flex');
            document.body.style.overflow = 'auto'; 
        }

        function deleteCatalogItem(productName) {
            if(confirm(`SISTEM DATABASE: \n\nAnda yakin ingin menghapus "${productName}" dari katalog?\nData ini juga akan hilang dari kategori terkait.`)) {
                alert(`Produk "${productName}" berhasil dihapus.`);
            }
        }

        function previewCatalogImg(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('catImagePreview');
                const placeholder = document.getElementById('catUploadPlaceholder');
                preview.src = reader.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            if(event.target.files[0]) reader.readAsDataURL(event.target.files[0]);
        }

        function saveCatalogItem() {
            alert("Data perangkat berhasil disimpan dan dikategorikan!");
            closeCatalogModal();
        }
    </script>
</body>
</html>