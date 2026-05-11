<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - PT Agisa Nawasena Jaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }

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
<body class="text-gray-800 antialiased bg-gray-50 flex flex-col min-h-screen selection:bg-red-700 selection:text-white">

    <nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-lg border-b border-gray-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-2xl font-extrabold text-red-700 tracking-tighter">
                <a href="/">STERNO<span class="text-black ml-1">GEL.</span></a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden text-gray-800 hover:text-red-700 focus:outline-none transition-colors">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>

            <ul class="hidden md:flex space-x-10 text-sm font-semibold text-gray-900 tracking-wide">
                <li><a href="/category" class="hover:text-red-700 transition-colors duration-300 relative group">PRODUCTS<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
                <li><a href="/" class="hover:text-red-700 transition-colors duration-300 relative group">ABOUT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
                <li><a href="/contact" class="text-red-700 relative">CONTACT<span class="absolute -bottom-1 left-0 w-full h-0.5 bg-red-700"></span></a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="md:hidden bg-white border-b border-gray-100 shadow-xl absolute w-full left-0 mt-[1px]">
            <ul class="flex flex-col px-6 py-6 space-y-5 text-base font-semibold text-gray-800">
                <li><a href="/category" class="hover:text-red-700 transition-colors block">PRODUCTS</a></li>
                <li><a href="/" class="hover:text-red-700 transition-colors block">ABOUT</a></li>
                <li><a href="/contact" class="text-red-700 block pl-2 border-l-4 border-red-700">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-black text-white py-24 md:py-32 mt-16 text-center overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-800 via-black to-black opacity-80 z-0"></div>
        <div class="relative z-10 px-4">
            <span class="text-red-600 font-bold tracking-[0.3em] text-xs sm:text-sm mb-4 uppercase border border-red-600/30 px-4 py-1.5 rounded-full bg-red-600/10 inline-block">KEMITRAAN</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mt-6 mb-4">
                HUBUNGI <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">KAMI</span>
            </h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base font-light">Mari jalin kerja sama. Tim ahli kami siap membantu memberikan solusi energi dan garam industri terbaik untuk bisnis Anda.</p>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto px-6 lg:px-8 py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16 items-start">
            
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <h2 class="text-3xl font-extrabold text-black mb-4 tracking-tight">Informasi Kontak</h2>
                    <p class="text-base text-gray-500 leading-relaxed mb-8">
                        Tim logistik dan penjualan industri kami siap membantu memenuhi kebutuhan energi dan garam industri Anda. Silakan hubungi kami melalui detail di bawah ini atau isi formulir yang tersedia.
                    </p>
                </div>

                <div class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-red-100 transition-all duration-300 flex items-start gap-5 cursor-default" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="w-14 h-14 bg-red-50 text-red-700 rounded-xl flex items-center justify-center text-2xl flex-shrink-0 group-hover:bg-red-700 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-black mb-1">Kantor Pusat</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Jl. Majapahit no 2 sunten Jomblangan Banguntapan Bantul Yogyakarta</p>
                    </div>
                </div>

                <div class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-red-100 transition-all duration-300 flex items-start gap-5 cursor-default" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="w-14 h-14 bg-red-50 text-red-700 rounded-xl flex items-center justify-center text-2xl flex-shrink-0 group-hover:bg-red-700 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-black mb-1">Telepon & WhatsApp</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">+62 813-2560-6286</p>
                    </div>
                </div>

                <div class="group bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-red-100 transition-all duration-300 flex items-start gap-5 cursor-default" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="w-14 h-14 bg-red-50 text-red-700 rounded-xl flex items-center justify-center text-2xl flex-shrink-0 group-hover:bg-red-700 group-hover:text-white transition-colors duration-300">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h3 class="font-extrabold text-black mb-1">Email</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">info@agisanawasena.com</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 bg-white p-8 md:p-10 rounded-2xl border border-gray-100 shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-red-700"></div>
                <h3 class="text-2xl font-extrabold text-black mb-8">Kirim Pesan</h3>
                
                @if(session('success'))
                    <div class="mb-8 bg-green-50 border border-green-200 rounded-xl p-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-check text-green-600 text-lg"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-green-800 font-semibold">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 tracking-widest mb-2 uppercase">Nama Lengkap</label>
                            <input type="text" name="nama" class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-red-700 focus:bg-white focus:ring-4 focus:ring-red-700/10 transition-all text-sm" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 tracking-widest mb-2 uppercase">Nama Perusahaan</label>
                            <input type="text" name="perusahaan" class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-red-700 focus:bg-white focus:ring-4 focus:ring-red-700/10 transition-all text-sm" placeholder="PT Contoh Industri">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 tracking-widest mb-2 uppercase">Alamat Email</label>
                        <input type="email" name="email" class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-red-700 focus:bg-white focus:ring-4 focus:ring-red-700/10 transition-all text-sm" placeholder="email@perusahaan.com" required>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 tracking-widest mb-2 uppercase">Kebutuhan</label>
                        <div class="relative">
                            <select name="kebutuhan" class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-red-700 focus:bg-white focus:ring-4 focus:ring-red-700/10 transition-all text-sm text-gray-600 appearance-none cursor-pointer" required>
                                <option value="">-- Pilih Kebutuhan --</option>
                                <option value="Sterno Gel (Energi)">Sterno Gel (Energi)</option>
                                <option value="Garam Industri">Garam Industri</option>
                                <option value="Lainnya">Pertanyaan Umum / Lainnya</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-gray-500">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 tracking-widest mb-2 uppercase">Pesan Detail</label>
                        <textarea name="pesan" rows="5" class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-red-700 focus:bg-white focus:ring-4 focus:ring-red-700/10 transition-all text-sm resize-none" placeholder="Jelaskan kebutuhan spesifikasi, estimasi volume, atau pertanyaan Anda..." required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-black text-white font-bold tracking-widest py-4 rounded-xl hover:bg-red-700 transition-colors duration-300 shadow-lg mt-2 flex justify-center items-center gap-3">
                        KIRIM PESAN SEKARANG <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>

        </div>
    </main>

    <footer class="bg-black text-gray-400 text-sm py-12 px-6 lg:px-8 border-t border-gray-800 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-extrabold text-white text-xl tracking-tighter text-center md:text-left">
                STERNO<span class="text-red-700">GEL.</span>
            </div>
            <div class="text-center text-xs text-gray-500">
                &copy; 2026 PT AGISA NAWASENA JAYA. ALL RIGHTS RESERVED. <br class="hidden md:block">
                SOLUSI ENERGI & GARAM INDUSTRI.
            </div>
            <div class="flex flex-wrap justify-center gap-6 text-xs font-semibold">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Tech Specs</a>
                <a href="#" class="hover:text-white transition-colors">MSDS</a>
                <a href="#" class="hover:text-white transition-colors">Distributors</a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = btn.querySelector('i');

        if(btn && menu && icon) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('open');
                
                if(menu.classList.contains('open')){
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });
        }
    </script>
</body>
</html>