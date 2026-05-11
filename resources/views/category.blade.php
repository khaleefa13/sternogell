<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk - PT Agisa Nawasena Jaya</title>
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
                <li><a href="/category" class="text-red-700 relative">PRODUCTS<span class="absolute -bottom-1 left-0 w-full h-0.5 bg-red-700"></span></a></li>
                <li><a href="/" class="hover:text-red-700 transition-colors duration-300 relative group">ABOUT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
                <li><a href="/contact" class="hover:text-red-700 transition-colors duration-300 relative group">CONTACT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="md:hidden bg-white border-b border-gray-100 shadow-xl absolute w-full left-0 mt-[1px]">
            <ul class="flex flex-col px-6 py-6 space-y-5 text-base font-semibold text-gray-800">
                <li><a href="/category" class="text-red-700 block pl-2 border-l-4 border-red-700">PRODUCTS</a></li>
                <li><a href="/" class="hover:text-red-700 transition-colors block">ABOUT</a></li>
                <li><a href="/contact" class="hover:text-red-700 transition-colors block">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-black text-white py-24 md:py-32 mt-16 text-center overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-800 via-black to-black opacity-80 z-0"></div>
        <div class="relative z-10 px-4">
            <span class="text-red-600 font-bold tracking-[0.3em] text-xs sm:text-sm mb-4 uppercase border border-red-600/30 px-4 py-1.5 rounded-full bg-red-600/10 inline-block">LINI BISNIS UTAMA</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mt-6 mb-4">
                KATEGORI <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">PRODUK</span>
            </h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base font-light">Eksplorasi rangkaian produk Sterno Gel berkualitas tinggi yang dirancang khusus untuk efisiensi energi industri dan komersial.</p>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto px-6 lg:px-8 py-20 w-full">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-64 overflow-hidden relative bg-gray-100">
                    <div class="absolute top-4 right-4 bg-red-700 text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-lg">190G</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel 190" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                </div>
                <div class="p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-2xl font-extrabold text-black mb-2 tracking-tight">STERNO GEL 190</h3>
                    <p class="text-sm font-light text-gray-500 mb-6 line-clamp-2">Solusi energi panas presisi untuk kebutuhan katering standar dengan durasi bakar optimal.</p>
                    <a href="#" class="inline-flex items-center justify-center text-xs font-bold bg-white text-black border-2 border-black px-6 py-3 rounded-full hover:bg-black hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-64 overflow-hidden relative bg-gray-100">
                    <div class="absolute top-4 right-4 bg-red-700 text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-lg">250G</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel 250" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                </div>
                <div class="p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-2xl font-extrabold text-black mb-2 tracking-tight">STERNO GEL 250</h3>
                    <p class="text-sm font-light text-gray-500 mb-6 line-clamp-2">Formula tahan lama untuk lingkungan yang lebih menuntut dan pemanasan ekstra.</p>
                    <a href="#" class="inline-flex items-center justify-center text-xs font-bold bg-white text-black border-2 border-black px-6 py-3 rounded-full hover:bg-black hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-64 overflow-hidden relative bg-gray-100">
                    <div class="absolute top-4 right-4 bg-black text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-lg">400G MAX</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel 400" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                </div>
                <div class="p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-2xl font-extrabold text-black mb-2 tracking-tight">STERNO GEL 400 MAX</h3>
                    <p class="text-sm font-light text-gray-500 mb-6 line-clamp-2">Output panas maksimal untuk kebutuhan industri dan prasmanan skala besar.</p>
                    <a href="#" class="inline-flex items-center justify-center text-xs font-bold bg-white text-black border-2 border-black px-6 py-3 rounded-full hover:bg-black hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-64 overflow-hidden relative bg-gray-100">
                    <div class="absolute top-4 right-4 bg-gray-200 text-black text-xs font-bold px-3 py-1 rounded-full z-10 shadow-lg">REFILL</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel Bulk" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out grayscale group-hover:grayscale-0">
                </div>
                <div class="p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-2xl font-extrabold text-black mb-2 tracking-tight">BULK / REFILL</h3>
                    <p class="text-sm font-light text-gray-500 mb-6 line-clamp-2">Pilihan hemat dalam kemasan bulk untuk efisiensi operasional bisnis jangka panjang.</p>
                    <a href="#" class="inline-flex items-center justify-center text-xs font-bold bg-white text-black border-2 border-black px-6 py-3 rounded-full hover:bg-black hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

        </div> 

        <div class="mt-20 bg-black rounded-3xl p-8 md:p-12 shadow-2xl flex flex-col md:flex-row justify-between items-center relative overflow-hidden">
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-red-700 rounded-full blur-3xl opacity-50"></div>
            <div class="text-center md:text-left mb-8 md:mb-0 relative z-10">
                <h4 class="text-2xl md:text-3xl font-extrabold text-white mb-2">Butuh spesifikasi khusus?</h4>
                <p class="text-sm md:text-base text-gray-400 font-light">Tim kami siap membantu kebutuhan industri Anda dalam skala besar.</p>
            </div>
            <a href="/contact" class="relative z-10 bg-red-700 text-white font-bold py-4 px-8 rounded-full hover:bg-red-600 transition-colors shadow-[0_0_20px_rgba(185,28,28,0.4)] hover:shadow-[0_0_25px_rgba(185,28,28,0.6)] whitespace-nowrap">
                HUBUNGI KAMI SEKARANG
            </a>
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