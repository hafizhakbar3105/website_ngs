<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Admin Portal | K Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0F172A; }
        .admin-input {
            background-color: #1E293B; border: 1px solid #334155; color: #F8FAFC; transition: all 0.3s;
        }
        .admin-input::placeholder { color: #64748B; }
        .admin-input:focus {
            background-color: #0F172A; border-color: #FF6000; outline: none; color: #FFFFFF;
            box-shadow: 0 0 0 4px rgba(255, 96, 0, 0.15);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative overflow-hidden bg-slate-950">

    <!-- ANIMASI BACKGROUND BARU: CYBER SECURITY MATRIX & HEXAGON LOCK (KHUSUS HALAMAN ADMIN) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden -z-10">
        <!-- 1. Encryption Security Lock Ring (Lingkaran Kunci Enkripsi Berputar) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] border border-orange-500/10 rounded-full animate-[spin_50s_linear_infinite]">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-4 h-4 border-t-2 border-l-2 border-orange-500/40"></div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4 h-4 border-b-2 border-r-2 border-orange-500/40"></div>
            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-4 h-4 border-b-2 border-l-2 border-orange-500/40"></div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-4 h-4 border-t-2 border-r-2 border-orange-500/40"></div>
            <div class="absolute inset-20 border border-dashed border-amber-400/15 rounded-full"></div>
        </div>

        <!-- 2. Dual Security Glow Ambience (Pendaran Cahaya Proteksi) -->
        <div class="absolute top-[-10%] right-[-10%] w-[600px] h-[600px] bg-gradient-to-br from-orange-600/20 via-amber-500/10 to-transparent rounded-full blur-[140px] animate-[pulse_6s_ease-in-out_infinite]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-gradient-to-tr from-orange-500/15 via-amber-400/5 to-transparent rounded-full blur-[120px]"></div>

        <!-- 3. Security Node Indicator -->
        <div class="absolute top-8 left-8 flex items-center gap-2.5 opacity-40">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            <span class="text-[9px] font-mono font-bold text-slate-400 uppercase tracking-widest">SYS_AUTH // ENCRYPTED_SSL</span>
        </div>
    </div>

    <div class="w-full max-w-md relative z-10">
        <!-- LOGO & TITLE -->
        <div class="text-center mb-10">
            <img src="{{ asset('img/logo.png') }}" alt="K Survey Logo" class="h-12 mx-auto mb-4 drop-shadow-xl">
            <h1 class="text-2xl font-black text-white uppercase tracking-tight">System <span class="text-[#FF6000]">Administration</span></h1>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Restricted Access Only</p>
        </div>

        <!-- CARD FORM ADMIN -->
        <div class="bg-slate-900/90 backdrop-blur-xl p-10 rounded-[2.5rem] shadow-2xl shadow-orange-500/10 border border-slate-800 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-orange-600 via-amber-400 to-orange-600"></div>
            
            @if(session('error'))
            <div class="bg-red-950/80 border border-red-800 text-red-300 text-xs font-bold p-4 rounded-2xl mb-6 flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation text-red-400"></i> {{ session('error') }}
            </div>
            @endif

            <form method="POST" action="{{ url('/loginadmin') }}" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#FF6000] ml-1">Email / Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="email" name="email" required class="admin-input w-full rounded-2xl py-4 pl-12 pr-4 text-sm font-bold" placeholder="admin@ksurvey.id">
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center px-1">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#FF6000]">Password</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" required class="admin-input w-full rounded-2xl py-4 pl-12 pr-4 text-sm font-bold" placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-orange-600 to-orange-500 text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-widest shadow-lg shadow-orange-500/30 hover:brightness-110 transition-all mt-4 flex justify-center items-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i> Secure Login
                </button>
            </form>
        </div>
        
        <!-- BACK LINK -->
        <div class="text-center mt-8">
            <a href="{{ url('/') }}" class="text-[10px] font-bold text-slate-400 uppercase tracking-widest hover:text-[#FF6000] transition-colors">
                <i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Website Publik
            </a>
        </div>
    </div>

</body>
</html>