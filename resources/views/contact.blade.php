<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - PT Agisa Nawasena Jaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .js-tilt-glare { border-radius: inherit; }
    </style>
</head>
<body class="text-gray-800 antialiased bg-gray-50 flex flex-col min-h-screen">

    <nav class="flex justify-between items-center px-8 py-4 bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="text-xl font-bold text-red-700 tracking-wider">
            <a href="/">STERNO <span class="text-black">GEL</span></a>
        </div>
        
        <button id="mobile-menu-btn" class="md:hidden text-gray-800 focus:outline-none absolute right-8">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>

        <ul class="hidden md:flex space-x-8 text-sm font-semibold text-gray-600">
            <li><a href="/category" class="hover:text-red-700 transition">PRODUCTS</a></li>
            <li><a href="/" class="hover:text-red-700 transition">ABOUT</a></li>
            <li><a href="/contact" class="text-red-700 border-b-2 border-red-700 pb-1">CONTACT</a></li>
        </ul>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 absolute w-full z-40 shadow-lg top-[69px] left-0">
        <ul class="flex flex-col px-8 py-4 space-y-4 text-sm font-semibold text-gray-600">
            <li><a href="/category" class="hover:text-red-700 transition block">PRODUCTS</a></li>
            <li><a href="/" class="hover:text-red-700 transition block">ABOUT</a></li>
            <li><a href="/contact" class="text-red-700 block">CONTACT</a></li>
        </ul>
    </div>

    <header class="bg-black text-white py-12 md:py-16 text-center border-b-4 border-red-700 px-4">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-widest mb-2 leading-snug">HUBUNGI KAMI</h1>
        <p class="text-[10px] sm:text-xs md:text-sm tracking-[0.2em] text-gray-400">MARI JALIN KERJA SAMA DENGAN KAMI</p>
    </header>

    <main class="flex-grow max-w-6xl mx-auto px-8 py-16 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-black mb-4">Informasi Kontak</h2>
                    <p class="text-sm text-gray-600 leading-relaxed mb-8">
                        Tim logistik dan penjualan industri kami siap membantu memenuhi kebutuhan energi dan garam industri Anda. Silakan hubungi kami melalui detail di bawah ini atau isi formulir yang tersedia.
                    </p>
                </div>

                <div class="bg-white p-6 border border-gray-200 shadow-sm flex items-start gap-4 cursor-default" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.1">
                    <div class="w-12 h-12 bg-red-700 text-white rounded-full flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-black mb-1">Kantor Pusat</h3>
                        <p class="text-sm text-gray-600">Jl. Majapahit no 2 sunten Jomblangan Banguntapan Bantul Yogyakarta</p>
                    </div>
                </div>

                <div class="bg-white p-6 border border-gray-200 shadow-sm flex items-start gap-4 cursor-default" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.1">
                    <div class="w-12 h-12 bg-red-700 text-white rounded-full flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-black mb-1">Telepon & WhatsApp</h3>
                        <p class="text-sm text-gray-600">+62 813-2560-6286</p>
                    </div>
                </div>

                <div class="bg-white p-6 border border-gray-200 shadow-sm flex items-start gap-4 cursor-default" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.1">
                    <div class="w-12 h-12 bg-red-700 text-white rounded-full flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-black mb-1">Email</h3>
                        <p class="text-sm text-gray-600">info@agisanawasena.com</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 border border-gray-200 shadow-xl relative">
                <div class="absolute top-0 left-0 w-full h-1 bg-red-700"></div>
                <h3 class="text-xl font-bold text-black mb-6">Kirim Pesan</h3>
                
                @if(session('success'))
                    <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fa-solid fa-circle-check text-green-500"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700 font-semibold">
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
                            <label class="block text-xs font-bold text-gray-700 tracking-wide mb-2">NAMA LENGKAP</label>
                            <input type="text" name="nama" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-red-700 focus:ring-1 focus:ring-red-700 transition" placeholder="John Doe" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 tracking-wide mb-2">NAMA PERUSAHAAN</label>
                            <input type="text" name="perusahaan" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-red-700 focus:ring-1 focus:ring-red-700 transition" placeholder="PT Contoh Industri">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 tracking-wide mb-2">ALAMAT EMAIL</label>
                        <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-red-700 focus:ring-1 focus:ring-red-700 transition" placeholder="john@example.com" required>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 tracking-wide mb-2">KEBUTUHAN</label>
                        <select name="kebutuhan" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-red-700 focus:ring-1 focus:ring-red-700 transition bg-white text-gray-600" required>
                            <option value="">-- Pilih Kebutuhan --</option>
                            <option value="Sterno Gel (Energi)">Sterno Gel (Energi)</option>
                            <option value="Garam Industri">Garam Industri</option>
                            <option value="Lainnya">Pertanyaan Umum / Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 tracking-wide mb-2">PESAN DETAIL</label>
                        <textarea name="pesan" rows="4" class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-red-700 focus:ring-1 focus:ring-red-700 transition" placeholder="Jelaskan kebutuhan spesifikasi, estimasi volume, atau pertanyaan Anda..." required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-black text-white font-bold tracking-widest py-4 hover:bg-red-700 transition duration-300 shadow-md">
                        KIRIM PESAN SEKARANG
                    </button>
                </form>
            </div>

        </div>
    </main>

    <footer class="bg-black text-gray-400 text-xs py-8 px-8 border-t border-gray-800 mt-auto">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="font-bold text-white mb-4 md:mb-0 text-center md:text-left">
                STERNO <br> GEL
            </div>
            <div class="text-center mb-4 md:mb-0">
                &copy; 2026 AGISA NAWASENA JAYA. ALL RIGHTS RESERVED. <br>
                SOLUSI ENERGI & GARAM INDUSTRI.
            </div>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Technical Specifications</a>
                <a href="#" class="hover:text-white transition">MSDS Sheets</a>
                <a href="#" class="hover:text-white transition">Distributors</a>
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
                menu.classList.toggle('hidden');
                
                if(menu.classList.contains('hidden')){
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }
            });
        }
    </script>
</body>
</html>