<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - PT Agisa Dimarta Perkasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Typography Sophisticated: Plus Jakarta Sans */
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Smooth Tilt Glare */
        .js-tilt-glare {
            border-radius: inherit;
        }

        /* Mobile Menu Transition */
        #mobile-menu {
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        #mobile-menu.open {
            max-height: 300px;
            opacity: 1;
        }
    </style>
</head>
<body class="text-slate-800 antialiased bg-[#D5DEEF] flex flex-col min-h-screen selection:bg-blue-600 selection:text-white overflow-x-hidden w-full">

    <nav class="fixed w-full top-0 z-50 bg-[#D5DEEF]/90 backdrop-blur-lg border-b border-slate-300 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-4 flex justify-between items-center">
            <div class="text-xl md:text-2xl font-extrabold text-blue-700 tracking-tighter">
                <a href="/">STERNO<span class="text-slate-900 ml-1">GEL.</span></a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden text-slate-800 hover:text-blue-700 focus:outline-none transition-colors">
                <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7 block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <ul class="hidden md:flex space-x-10 text-sm font-semibold text-slate-600 tracking-wide">
               <li><a href="/" class="hover:text-blue-700 transition-colors duration-300 relative group">TENTANG KAMI<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 transition-all group-hover:w-full"></span></a></li>
                <li><a href="/" class="hover:text-blue-700 transition-colors duration-300 relative group">KONTAK<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 transition-all group-hover:w-full"></span></a></li>
            </ul>
        </div>

       <div id="mobile-menu" class="md:hidden bg-[#D5DEEF] border-b border-slate-300 shadow-xl absolute w-full left-0 mt-[1px]">
            <ul class="flex flex-col px-5 py-4 space-y-4 text-sm font-semibold text-slate-700">
                <li><a href="/" class="text-blue-700 block pl-3 border-l-4 border-blue-700 bg-blue-100/50 py-1">TENTANG KAMI</a></li>
                <li><a href="/" class="hover:text-blue-700 transition-colors block">KONTAK</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-[#D5DEEF] text-slate-900 py-16 md:py-32 mt-14 md:mt-16 text-center overflow-hidden w-full">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-white via-[#D5DEEF] to-[#b9c7df] opacity-90 z-0"></div>
        <div class="relative z-10 px-5 max-w-5xl mx-auto flex flex-col items-center">
            <span class="text-blue-700 font-bold tracking-wider md:tracking-[0.2em] text-[10px] md:text-xs mb-3 md:mb-4 uppercase border border-blue-300 px-4 py-1.5 rounded-full bg-blue-100/50 inline-block">KEMITRAAN</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mt-4 md:mt-6 mb-3 md:mb-4">
                HUBUNGI <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-slate-700">KAMI</span>
            </h1>
            <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-lg font-medium px-2 leading-relaxed mt-2">Mari jalin kerja sama. Tim ahli kami siap membantu memberikan solusi energi dan garam industri terbaik untuk bisnis Anda.</p>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto px-5 md:px-8 py-12 md:py-20 w-full relative z-10 overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 md:gap-16 items-start">
            
            <div class="lg:col-span-2 space-y-5 md:space-y-6">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3 md:mb-4 tracking-tight">Informasi Kontak</h2>
                    <p class="text-sm md:text-base text-slate-500 font-medium leading-relaxed mb-6 md:mb-8">
                        Tim logistik dan penjualan industri kami siap membantu memenuhi kebutuhan energi dan garam industri Anda. Silakan hubungi kami melalui detail di bawah ini atau isi formulir yang tersedia.
                    </p>
                </div>

                <div class="group bg-white p-5 md:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 flex items-start gap-4 md:gap-5 cursor-default" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-blue-50 border border-blue-100 text-blue-700 rounded-xl flex items-center justify-center text-xl md:text-2xl flex-shrink-0 group-hover:bg-blue-700 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-slate-900 mb-1 text-[15px] md:text-base">Kantor Pusat</h3>
                        <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-medium">Jl. Majapahit no 2 sunten Jomblangan Banguntapan Bantul Yogyakarta</p>
                    </div>
                </div>

                <div class="group bg-white p-5 md:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 flex items-start gap-4 md:gap-5 cursor-default" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-blue-50 border border-blue-100 text-blue-700 rounded-xl flex items-center justify-center text-xl md:text-2xl flex-shrink-0 group-hover:bg-blue-700 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-slate-900 mb-1 text-[15px] md:text-base">Telepon & WhatsApp</h3>
                        <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-medium">+62 813-2560-6286</p>
                    </div>
                </div>

                <div class="group bg-white p-5 md:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 flex items-start gap-4 md:gap-5 cursor-default" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-blue-50 border border-blue-100 text-blue-700 rounded-xl flex items-center justify-center text-xl md:text-2xl flex-shrink-0 group-hover:bg-blue-700 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-slate-900 mb-1 text-[15px] md:text-base">Email</h3>
                        <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-medium">info@agisanawasena.com</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 bg-white p-6 md:p-10 rounded-3xl border border-slate-200 shadow-[0_8px_30px_rgb(0,0,0,0.04)] relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-blue-600"></div>
                <h3 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-6 md:mb-8 tracking-wide">Kirim Pesan</h3>
                
                @if(session('success'))
                    <div class="mb-6 md:mb-8 bg-green-50 border border-green-200 rounded-xl p-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-check text-green-600 text-sm md:text-lg"></i>
                            </div>
                            <div class="ml-3 md:ml-4">
                                <p class="text-xs md:text-sm text-green-800 font-semibold">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5 md:space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">
                        <div>
                            <label class="block text-[10px] md:text-xs font-bold text-slate-700 tracking-widest mb-1.5 md:mb-2 uppercase">Nama Lengkap</label>
                            <input type="text" name="nama" class="w-full px-4 py-3 md:px-5 md:py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-600/10 transition-all text-xs md:text-sm font-medium" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div>
                            <label class="block text-[10px] md:text-xs font-bold text-slate-700 tracking-widest mb-1.5 md:mb-2 uppercase">Nama Perusahaan</label>
                            <input type="text" name="perusahaan" class="w-full px-4 py-3 md:px-5 md:py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-600/10 transition-all text-xs md:text-sm font-medium" placeholder="PT Contoh Industri">
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] md:text-xs font-bold text-slate-700 tracking-widest mb-1.5 md:mb-2 uppercase">Alamat Email</label>
                        <input type="email" name="email" class="w-full px-4 py-3 md:px-5 md:py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-600/10 transition-all text-xs md:text-sm font-medium" placeholder="email@perusahaan.com" required>
                    </div>

                    <div>
                        <label class="block text-[10px] md:text-xs font-bold text-slate-700 tracking-widest mb-1.5 md:mb-2 uppercase">Kebutuhan</label>
                        <div class="relative">
                            <select name="kebutuhan" class="w-full px-4 py-3 md:px-5 md:py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-600/10 transition-all text-xs md:text-sm text-slate-600 font-medium appearance-none cursor-pointer" required>
                                <option value="">-- Pilih Kebutuhan --</option>
                                <option value="Sterno Gel (Energi)">Sterno Gel 190G</option>
                                <option value="Garam Industri">Sterno Gel Refill 1L</option>
                                <option value="Lainnya">Pertanyaan Umum / Lainnya</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 md:px-5 text-slate-400">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] md:text-xs font-bold text-slate-700 tracking-widest mb-1.5 md:mb-2 uppercase">Pesan Detail</label>
                        <textarea name="pesan" rows="4" class="w-full px-4 py-3 md:px-5 md:py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-600 focus:bg-white focus:ring-4 focus:ring-blue-600/10 transition-all text-xs md:text-sm font-medium resize-none" placeholder="Jelaskan kebutuhan spesifikasi, estimasi volume, atau pertanyaan Anda..." required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-slate-900 text-white text-xs md:text-sm font-bold tracking-widest py-3.5 md:py-4 rounded-xl hover:bg-blue-700 transition-colors duration-300 shadow-[0_8px_20px_rgb(0,0,0,0.08)] mt-2 flex justify-center items-center gap-2 md:gap-3">
                        KIRIM PESAN SEKARANG <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>

        </div>
    </main>

    <footer class="bg-[#D5DEEF] text-slate-500 text-sm py-10 px-5 md:px-8 border-t border-slate-200 mt-auto w-full">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-extrabold text-slate-900 text-xl tracking-tighter text-center md:text-left">
                STERNO<span class="text-blue-600">GEL.</span>
            </div>
            <div class="text-center text-[10px] md:text-xs font-semibold text-slate-400">
                &copy; 2026 PT AGISA NAWASENA JAYA. ALL RIGHTS RESERVED. <br class="hidden md:block">
                SOLUSI ENERGI & GARAM INDUSTRI.
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-6 text-[10px] md:text-xs font-bold uppercase tracking-widest text-slate-400">
                <a href="#" class="hover:text-blue-600 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Tech Specs</a>
                <a href="#" class="hover:text-blue-600 transition-colors">MSDS</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Distributors</a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    
    <script>
        // Script Mobile Menu Terbaru untuk SVG
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        if(btn && menu && iconOpen && iconClose) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('open');
                
                if(menu.classList.contains('open')){
                    iconOpen.classList.remove('block');
                    iconOpen.classList.add('hidden');
                    iconClose.classList.remove('hidden');
                    iconClose.classList.add('block');
                } else {
                    iconClose.classList.remove('block');
                    iconClose.classList.add('hidden');
                    iconOpen.classList.remove('hidden');
                    iconOpen.classList.add('block');
                }
            });
        }
    </script>
</body>
</html>