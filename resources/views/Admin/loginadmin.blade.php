<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Admin Portal | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F8FAFC; }
        .admin-input {
            background-color: #F1F5F9; border: 1px solid #E2E8F0; transition: all 0.3s;
        }
        .admin-input:focus {
            background-color: #FFFFFF; border-color: #043978; outline: none;
            box-shadow: 0 0 0 4px rgba(4, 57, 120, 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

    <div class="absolute top-[-20%] right-[-10%] w-[600px] h-[600px] bg-blue-900/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-[-20%] left-[-10%] w-[500px] h-[500px] bg-slate-400/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10">
        <div class="text-center mb-10">
            <img src="{{ asset('img/NGS.png') }}" alt="NusaGeo Logo" class="h-12 mx-auto mb-4">
            <h1 class="text-2xl font-black text-slate-900 uppercase tracking-tight">System <span class="text-[#043978]">Administration</span></h1>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Restricted Access Only</p>
        </div>

        <div class="bg-white p-10 rounded-[2.5rem] shadow-2xl shadow-blue-900/5 border border-slate-100">
            
            @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-600 text-xs font-bold p-4 rounded-xl mb-6 flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ session('error') }}
            </div>
            @endif

            <form method="POST" action="{{ url('/loginadmin') }}" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978] ml-1">Email / Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="email" name="email" required class="admin-input w-full rounded-2xl py-4 pl-12 pr-4 text-sm font-bold" placeholder="admin@nusageo.com">
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center px-1">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-[#043978]">Password</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" required class="admin-input w-full rounded-2xl py-4 pl-12 pr-4 text-sm font-bold" placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="w-full bg-[#043978] text-white py-4 rounded-2xl font-black text-[11px] uppercase tracking-widest shadow-lg shadow-blue-900/20 hover:bg-slate-900 transition-colors mt-4 flex justify-center items-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i> Secure Login
                </button>
            </form>
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ url('/') }}" class="text-[10px] font-bold text-slate-400 uppercase tracking-widest hover:text-[#043978] transition-colors">
                <i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Website Publik
            </a>
        </div>
    </div>

</body>
</html>