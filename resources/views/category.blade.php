<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk - PT Agisa Nawasena Jaya</title>
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
            <li><a href="/category" class="text-red-700 border-b-2 border-red-700 pb-1">PRODUCTS</a></li>
            <li><a href="/" class="hover:text-red-700 transition">ABOUT</a></li>
            <li><a href="/contact" class="hover:text-red-700 transition">CONTACT</a></li>
        </ul>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 absolute w-full z-40 shadow-lg top-[69px] left-0">
        <ul class="flex flex-col px-8 py-4 space-y-4 text-sm font-semibold text-gray-600">
            <li><a href="/category" class="text-red-700 block">PRODUCTS</a></li>
            <li><a href="/" class="hover:text-red-700 transition block">ABOUT</a></li>
            <li><a href="/contact" class="hover:text-red-700 transition block">CONTACT</a></li>
        </ul>
    </div>

    <header class="bg-black text-white py-12 md:py-16 text-center border-b-4 border-red-700 px-4">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-widest mb-2 leading-snug">KATEGORI PRODUK</h1>
        <p class="text-[10px] sm:text-xs md:text-sm tracking-[0.2em] text-gray-400">PILIHAN LINI BISNIS UTAMA KAMI</p>
    </header>

    <main class="flex-grow max-w-6xl mx-auto px-8 py-16 w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <div class="relative group cursor-pointer overflow-hidden shadow-2xl border border-gray-200 h-[400px] bg-white" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.3">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel Energi" class="w-full h-2/3 object-cover transform group-hover:scale-105 transition duration-700 ease-in-out">
                <div class="p-6 h-1/3 flex flex-col justify-center items-center text-center bg-white">
                    <h3 class="text-2xl font-bold tracking-widest text-black mb-1">STERNO GEL</h3>
                    <p class="text-sm font-light text-gray-500 mb-4">Solusi Energi Panas Presisi</p>
                    <a href="#" class="inline-block text-xs font-bold bg-red-700 text-white px-6 py-2 hover:bg-red-800 transition shadow-md">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <div class="relative group cursor-pointer overflow-hidden shadow-2xl border border-gray-200 h-[400px] bg-white" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.3">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel Energi" class="w-full h-2/3 object-cover transform group-hover:scale-105 transition duration-700 ease-in-out">
                <div class="p-6 h-1/3 flex flex-col justify-center items-center text-center bg-white">
                    <h3 class="text-2xl font-bold tracking-widest text-black mb-1">STERNO GEL</h3>
                    <p class="text-sm font-light text-gray-500 mb-4">Solusi Energi Panas Presisi</p>
                    <a href="#" class="inline-block text-xs font-bold bg-red-700 text-white px-6 py-2 hover:bg-red-800 transition shadow-md">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            
           
        
        <div class="mt-16 bg-white p-8 border border-gray-200 shadow-sm text-center flex flex-col md:flex-row justify-between items-center">
            <div class="text-left mb-4 md:mb-0">
                <h4 class="text-lg font-bold text-red-700">Butuh spesifikasi khusus?</h4>
                <p class="text-sm text-gray-600">Tim kami siap membantu kebutuhan industri Anda dalam skala besar.</p>
            </div>
            <a href="/contact" class="border-2 border-black text-black font-bold py-2 px-8 hover:bg-black hover:text-white transition">
                HUBUNGI KAMI
            </a>
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