<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk - PT Agisa Dimarta Perkasa</title>
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
<body class="text-slate-800 antialiased bg-slate-100 flex flex-col min-h-screen selection:bg-red-600 selection:text-white">

    <nav class="fixed w-full top-0 z-50 bg-slate-100/85 backdrop-blur-lg border-b border-slate-200 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-4 md:py-5 flex justify-between items-center">
            <div class="text-xl md:text-2xl font-extrabold text-red-700 tracking-tighter">
                <a href="/">STERNO<span class="text-slate-900 ml-1">GEL.</span></a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden text-slate-800 hover:text-red-700 focus:outline-none transition-colors">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>

            <ul class="hidden md:flex space-x-10 text-sm font-semibold text-slate-600 tracking-wide">
                <li><a href="/category" class="text-red-700 relative">PRODUCTS<span class="absolute -bottom-1 left-0 w-full h-0.5 bg-red-700"></span></a></li>
                <li><a href="/" class="hover:text-red-700 transition-colors duration-300 relative group">ABOUT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
                <li><a href="/contact" class="hover:text-red-700 transition-colors duration-300 relative group">CONTACT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="md:hidden bg-slate-100 border-b border-slate-200 shadow-xl absolute w-full left-0 mt-[1px]">
            <ul class="flex flex-col px-5 py-6 space-y-5 text-sm font-semibold text-slate-700">
                <li><a href="/category" class="text-red-700 block pl-3 border-l-4 border-red-700 bg-red-50/50 py-1">PRODUCTS</a></li>
                <li><a href="/" class="hover:text-red-700 transition-colors block">ABOUT</a></li>
                <li><a href="/contact" class="hover:text-red-700 transition-colors block">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-slate-100 text-slate-900 py-16 md:py-32 mt-14 md:mt-16 text-center overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-50 via-slate-100 to-slate-200 opacity-90 z-0"></div>
        <div class="relative z-10 px-4 max-w-5xl mx-auto flex flex-col items-center">
            <span class="text-red-600 font-bold tracking-[0.2em] text-[10px] md:text-sm mb-3 md:mb-4 uppercase border border-red-200 px-4 py-1.5 rounded-full bg-red-50 inline-block">LINI BISNIS UTAMA</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mt-4 md:mt-6 mb-3 md:mb-4">
                KATEGORI <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800">PRODUK</span>
            </h1>
            <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-lg font-medium px-2 leading-relaxed mt-2">Eksplorasi rangkaian produk Sterno Gel berkualitas tinggi yang dirancang khusus untuk efisiensi energi industri dan komersial.</p>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto px-5 lg:px-8 py-12 md:py-20 w-full relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
            
            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-slate-200/60 hover:border-slate-300 transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-40 md:h-64 overflow-hidden relative bg-slate-50 p-4 flex items-center justify-center">
                    <div class="absolute top-3 right-3 md:top-4 md:right-4 bg-red-700 text-white text-[10px] md:text-xs font-bold px-2.5 py-1 rounded-full z-10 shadow-lg">190G</div>
                    <img src="Sterno 190.jpg" alt="Sterno Gel 190" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                </div>
                <div class="p-6 md:p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-2 tracking-tight">STERNO GEL 190</h3>
                    <p class="text-xs md:text-sm font-medium text-slate-500 mb-5 md:mb-6 line-clamp-2">Solusi energi panas presisi untuk kebutuhan katering standar dengan durasi bakar optimal.</p>
                    <a href="#" class="inline-flex items-center justify-center text-[10px] md:text-xs font-bold bg-white text-slate-900 border-2 border-slate-900 px-5 py-2.5 md:px-6 md:py-3 rounded-full hover:bg-slate-900 hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-slate-200/60 hover:border-slate-300 transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-40 md:h-64 overflow-hidden relative bg-slate-50 p-4 flex items-center justify-center">
                    <div class="absolute top-3 right-3 md:top-4 md:right-4 bg-red-700 text-white text-[10px] md:text-xs font-bold px-2.5 py-1 rounded-full z-10 shadow-lg">250G</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel 250" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                </div>
                <div class="p-6 md:p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-2 tracking-tight">STERNO GEL 250</h3>
                    <p class="text-xs md:text-sm font-medium text-slate-500 mb-5 md:mb-6 line-clamp-2">Formula tahan lama untuk lingkungan yang lebih menuntut dan pemanasan ekstra.</p>
                    <a href="#" class="inline-flex items-center justify-center text-[10px] md:text-xs font-bold bg-white text-slate-900 border-2 border-slate-900 px-5 py-2.5 md:px-6 md:py-3 rounded-full hover:bg-slate-900 hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-slate-200/60 hover:border-slate-300 transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-40 md:h-64 overflow-hidden relative bg-slate-50 p-4 flex items-center justify-center">
                    <div class="absolute top-3 right-3 md:top-4 md:right-4 bg-slate-900 text-white text-[10px] md:text-xs font-bold px-2.5 py-1 rounded-full z-10 shadow-lg">400G MAX</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel 400" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                </div>
                <div class="p-6 md:p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-2 tracking-tight">STERNO GEL 400 MAX</h3>
                    <p class="text-xs md:text-sm font-medium text-slate-500 mb-5 md:mb-6 line-clamp-2">Output panas maksimal untuk kebutuhan industri dan prasmanan skala besar.</p>
                    <a href="#" class="inline-flex items-center justify-center text-[10px] md:text-xs font-bold bg-white text-slate-900 border-2 border-slate-900 px-5 py-2.5 md:px-6 md:py-3 rounded-full hover:bg-slate-900 hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-slate-200/60 hover:border-slate-300 transition-all duration-300 overflow-hidden cursor-pointer flex flex-col" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <div class="h-40 md:h-64 overflow-hidden relative bg-slate-50 p-4 flex items-center justify-center">
                    <div class="absolute top-3 right-3 md:top-4 md:right-4 bg-slate-200 text-slate-900 text-[10px] md:text-xs font-bold px-2.5 py-1 rounded-full z-10 shadow-lg">REFILL</div>
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&q=80&w=800" alt="Sterno Gel Bulk" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out grayscale group-hover:grayscale-0">
                </div>
                <div class="p-6 md:p-8 flex-grow flex flex-col justify-center items-center text-center">
                    <h3 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-2 tracking-tight">BULK / REFILL</h3>
                    <p class="text-xs md:text-sm font-medium text-slate-500 mb-5 md:mb-6 line-clamp-2">Pilihan hemat dalam kemasan bulk untuk efisiensi operasional bisnis jangka panjang.</p>
                    <a href="#" class="inline-flex items-center justify-center text-[10px] md:text-xs font-bold bg-white text-slate-900 border-2 border-slate-900 px-5 py-2.5 md:px-6 md:py-3 rounded-full hover:bg-slate-900 hover:text-white transition-colors duration-300 shadow-md w-full sm:w-auto">
                        LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

        </div> 

        <div class="mt-12 md:mt-20 bg-white border border-slate-200 rounded-3xl p-6 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col md:flex-row justify-between items-center relative overflow-hidden">
            <div class="absolute -right-10 -top-10 w-32 h-32 md:w-40 md:h-40 bg-red-100 rounded-full blur-3xl opacity-50"></div>
            <div class="text-center md:text-left mb-6 md:mb-0 relative z-10">
                <h4 class="text-xl md:text-3xl font-extrabold text-slate-900 mb-2">Butuh spesifikasi khusus?</h4>
                <p class="text-xs md:text-base text-slate-600 font-medium">Tim kami siap membantu kebutuhan industri Anda dalam skala besar.</p>
            </div>
            <a href="/contact" class="relative z-10 bg-red-700 text-white font-bold py-3 px-6 md:py-4 md:px-8 rounded-full hover:bg-red-800 transition-colors shadow-[0_0_20px_rgba(185,28,28,0.3)] hover:shadow-[0_0_25px_rgba(185,28,28,0.5)] whitespace-nowrap text-xs md:text-base">
                HUBUNGI KAMI SEKARANG
            </a>
        </div>
    </main>

    <footer class="bg-slate-100 text-slate-500 text-sm py-10 px-5 lg:px-8 border-t border-slate-200 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-extrabold text-slate-900 text-xl tracking-tighter text-center md:text-left">
                STERNO<span class="text-red-600">GEL.</span>
            </div>
            <div class="text-center text-[10px] md:text-xs font-semibold text-slate-400">
                &copy; 2026 PT AGISA NAWASENA JAYA. ALL RIGHTS RESERVED. <br class="hidden md:block">
                SOLUSI ENERGI & GARAM INDUSTRI.
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-6 text-[10px] md:text-xs font-bold uppercase tracking-widest text-slate-400">
                <a href="#" class="hover:text-red-600 transition-colors">Privacy</a>
                <a href="#" class="hover:text-red-600 transition-colors">Specs</a>
                <a href="#" class="hover:text-red-600 transition-colors">MSDS</a>
                <a href="#" class="hover:text-red-600 transition-colors">Distributors</a>
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