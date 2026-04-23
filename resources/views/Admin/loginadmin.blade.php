<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Nusa Geospatial Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#043978',
                        secondary: '#5AAC41',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-login { background: radial-gradient(circle at top right, #043978 0%, #0F172A 100%); }
    </style>
</head>
<body class="bg-login min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full">
        <div class="text-center mb-10">
            <img src="img/NGS.png" alt="Logo" class="h-12 mx-auto mb-4 brightness-0 invert">
            <p class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">Administration System</p>
        </div>

        <div class="bg-white rounded-[2.5rem] p-10 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-secondary"></div>
            
            <div class="mb-8">
                <h2 class="text-2xl font-extrabold text-slate-900">Selamat Datang</h2>
                <p class="text-sm text-slate-500 font-medium">Masuk untuk mengelola inventaris & layanan.</p>
            </div>

            <form action="/admin/dashboard" class="space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 px-1">Username</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <i class="fa-solid fa-user text-xs"></i>
                        </span>
                        <input type="text" required 
                            class="w-full bg-slate-50 border border-slate-100 rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-primary focus:bg-white outline-none transition-all font-semibold text-sm" 
                            placeholder="admin_ngs">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 px-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <i class="fa-solid fa-lock text-xs"></i>
                        </span>
                        <input type="password" required 
                            class="w-full bg-slate-50 border border-slate-100 rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-primary focus:bg-white outline-none transition-all font-semibold text-sm" 
                            placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="w-full bg-primary text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-slate-900 transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3">
                    Sign In <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </form>

            <div class="mt-8 pt-8 border-t border-slate-50 text-center">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Nusa Geospatial Solution v1.0</p>
            </div>
        </div>
    </div>

</body>
</html>