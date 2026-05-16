<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Agisa Dimarta Perkasa - Sterno Gel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Typography Sophisticated: Plus Jakarta Sans */
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Smooth Tilt Glare */
        .js-tilt-glare { border-radius: inherit; }

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
<body class="text-slate-800 antialiased bg-[#D5DEEF] selection:bg-blue-600 selection:text-white overflow-x-hidden w-full">

    <nav class="fixed w-full top-0 z-50 bg-[#D5DEEF]/90 backdrop-blur-lg border-b border-slate-300 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-5 md:px-8 py-4 flex justify-between items-center">
            <div class="text-xl md:text-2xl font-extrabold text-blue-700 tracking-tighter">
                <a href="/">STERNO<span class="text-slate-800 ml-1">GEL.</span></a>
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
                <li><a href="/contact" class="hover:text-blue-700 transition-colors duration-300 relative group">KONTAK<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 transition-all group-hover:w-full"></span></a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="md:hidden bg-[#D5DEEF] border-b border-slate-300 shadow-xl absolute w-full left-0 mt-[1px]">
            <ul class="flex flex-col px-5 py-4 space-y-4 text-sm font-semibold text-slate-700">
                <li><a href="/" class="text-blue-700 block pl-3 border-l-4 border-blue-700 bg-blue-100/50 py-1">TENTANG KAMI</a></li>
                <li><a href="/contact" class="hover:text-blue-700 transition-colors block">KONTAK</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-[#D5DEEF] min-h-[75vh] lg:min-h-[85vh] flex items-center pt-24 pb-12 lg:pt-28 w-full overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#D5DEEF] to-[#b9c7df]/50 opacity-90 z-0"></div>
        
        <div class="relative z-10 w-full max-w-7xl mx-auto px-5 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div data-aos="fade-right" class="text-left">
                <span class="text-blue-700 font-bold tracking-wider md:tracking-[0.2em] text-[10px] md:text-xs mb-4 uppercase inline-block border border-blue-300 px-3 py-1.5 md:px-4 rounded-full bg-blue-100/50">
                    PT Agisa Dimarta Perkasa
                </span>
                
                <h1 class="text-[26px] min-[400px]:text-[28px] sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-4 md:mb-6 leading-[1.3] md:leading-tight text-slate-800">
                    Solusi Energi Terpercaya dan Sistem Bahan Bakar <br class="hidden lg:block">
                    <span class="text-blue-700">Berkualitas Global</span>
                </h1>
                
                <p class="text-sm md:text-base text-slate-600 max-w-xl mt-2 font-medium leading-relaxed mb-6 md:mb-10">
                    Menghadirkan inovasi dan efisiensi melalui produk Sterno Gel berkualitas tinggi yang terjamin awet, didukung oleh standar kontrol kualitas tak tertandingi untuk kebutuhan komersial Anda.
                </p>
                
                <div class="flex flex-wrap gap-3 md:gap-4">
                    <a href="/contact" class="bg-transparent border-2 border-blue-600 text-blue-700 hover:bg-blue-600 hover:text-white font-bold py-2.5 px-6 md:py-3 md:px-8 rounded-lg transition-all text-xs md:text-sm">
                        HUBUNGI KAMI
                    </a>
                </div>
            </div>

            <div data-aos="fade-left" class="hidden lg:block relative">
                <div class="absolute inset-0 bg-blue-600 transform translate-x-4 translate-y-4 rounded-2xl z-0 opacity-20"></div>
                <img src="gambar3.jpg" alt="Industrial Solution" class="relative z-10 w-full h-[350px] lg:h-[450px] object-cover rounded-2xl shadow-2xl grayscale-[20%]">
            </div>
        </div>
    </header>

    <section id="about" class="w-full max-w-7xl mx-auto px-5 md:px-8 py-16 md:py-20 lg:py-24 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 items-center bg-[#D5DEEF] overflow-hidden">
        <div data-aos="fade-right" class="relative order-2 md:order-1">
            <div class="relative z-10 bg-white rounded-xl overflow-hidden shadow-xl border border-slate-200" data-tilt data-tilt-max="2" data-tilt-speed="400">
                <img src="gambar2.png" alt="Garam Industri" onerror="this.src='https://images.unsplash.com/photo-1618090584126-129cd1f3f6c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'" class="w-full h-[250px] sm:h-[300px] md:h-[400px] object-cover hover:scale-105 transition-transform duration-700">
            </div>
        </div>
        <div data-aos="fade-left" class="order-1 md:order-2">
            <span class="text-blue-600 font-bold tracking-wider md:tracking-[0.2em] text-[10px] md:text-xs uppercase mb-2 block">Tentang Kami</span>
            <h2 class="text-[22px] min-[400px]:text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-800 mb-4 md:mb-6 tracking-tight leading-snug">PT Agisa Dimarta Perkasa</h2>
            <p class="text-slate-600 mb-4 md:mb-5 text-sm md:text-base leading-relaxed">
                Merupakan perusahaan yang bergerak dibidang produksi sterno gel, yaitu bahan bakar praktis berbentuk gel yang dirancang untuk memberikan kemudahan, keamanan, dan efisiensi dalam berbagai kebutuhan pemanasan. 
            </p>
            <p class="text-slate-600 mb-6 text-sm md:text-base leading-relaxed">
                Sterno gel sangat cocok digunakan untuk catering, restoran, hotel, barbeque, camping, hingga kebutuhan rumah tangga karena memiliki nyala api stabil, mudah digunakan, dan tidak menghasilkan banyak asap. Kami berkomitmen menyediakan solusi praktis yang efisien.
            </p>
        </div>
    </section>

    <section data-aos="fade-up" class="w-full pt-12 md:pt-20 pb-4 md:pb-8 bg-[#D5DEEF] overflow-hidden">
        <div class="max-w-4xl mx-auto px-5 md:px-8 text-center">
            <h2 class="text-[22px] min-[400px]:text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight leading-snug">
                Solusi Komprehensif untuk <br class="hidden md:block"> Kebutuhan Presisi dan Proses Anda
            </h2>
        </div>
    </section>

    <section id="produk" class="w-full bg-[#D5DEEF] pb-16 md:pb-24 pt-6 md:pt-8 overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-8">
                
                <div data-aos="fade-up" data-aos-delay="100" class="group bg-white rounded-xl border border-slate-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col">
                    <div class="h-48 md:h-64 flex items-center justify-center p-6 bg-slate-50 relative overflow-hidden">
                        <img src="Sterno 190.jpg" alt="SG-190" onerror="this.src='https://via.placeholder.com/400x300/EEEEEE/000000?text=SG-190'" class="h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
                    </div>
                    <div class="border-t border-slate-100 p-5 md:p-6 flex justify-between items-center bg-white group-hover:bg-blue-50 transition-colors">
                        <h3 class="font-bold text-[15px] md:text-lg text-slate-800">Sterno Gel SG-190 & SG-200</h3>
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-blue-600 transition-colors"></i>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="group bg-white rounded-xl border border-slate-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col">
                    <div class="h-48 md:h-64 flex items-center justify-center p-6 bg-slate-50 relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/EEEEEE/000000?text=SG-400" alt="SG-400" class="h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
                    </div>
                    <div class="border-t border-slate-100 p-5 md:p-6 flex justify-between items-center bg-white group-hover:bg-blue-50 transition-colors">
                        <h3 class="font-bold text-[15px] md:text-lg text-slate-800">Sterno Gel SG-400 MAX</h3>
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-blue-600 transition-colors"></i>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="group bg-white rounded-xl border border-slate-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col">
                    <div class="h-48 md:h-64 flex items-center justify-center p-6 bg-slate-50 relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/EEEEEE/000000?text=SG-250" alt="SG-250" class="h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
                    </div>
                    <div class="border-t border-slate-100 p-5 md:p-6 flex justify-between items-center bg-white group-hover:bg-blue-50 transition-colors">
                        <h3 class="font-bold text-[15px] md:text-lg text-slate-800">Sterno Gel SG-250</h3>
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-blue-600 transition-colors"></i>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400" class="group bg-white rounded-xl border border-slate-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden cursor-pointer flex flex-col">
                    <div class="h-48 md:h-64 flex items-center justify-center p-6 bg-slate-50 relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/EEEEEE/000000?text=Industrial+Pack" alt="Industrial Pack" class="h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
                    </div>
                    <div class="border-t border-slate-100 p-5 md:p-6 flex justify-between items-center bg-white group-hover:bg-blue-50 transition-colors">
                        <h3 class="font-bold text-[15px] md:text-lg text-slate-800">Sterno Gel Industrial Pack</h3>
                        <i class="fa-solid fa-arrow-right text-slate-400 group-hover:text-blue-600 transition-colors"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full py-16 md:py-20 lg:py-24 px-5 md:px-8 max-w-7xl mx-auto border-t border-slate-300 overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 lg:gap-12">
            <div data-aos="fade-right" class="bg-white p-6 md:p-10 rounded-2xl shadow-md border border-slate-200 hover:border-blue-300 transition-colors relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-slate-400 group-hover:bg-blue-600 transition-colors"></div>
                <h3 class="text-lg md:text-2xl font-extrabold text-slate-800 mb-4 tracking-wide">VISI</h3>
                <p class="text-sm md:text-base text-slate-600 leading-relaxed">
                    Menjadi mitra unggulan dalam memenuhi kebutuhan garam industri dan bahan bakar sterno, dikenal karena inovasi, kualitas, dan komitmen terhadap keberlanjutan.
                </p>
            </div>
            
            <div data-aos="fade-left" class="bg-white p-6 md:p-10 rounded-2xl shadow-md border border-slate-200 hover:border-blue-300 transition-colors relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-blue-600"></div>
                <h3 class="text-lg md:text-2xl font-extrabold text-slate-800 mb-4 tracking-wide">MISI</h3>
                <ul class="text-sm md:text-base text-slate-600 leading-relaxed space-y-3 font-medium">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-3 mt-0.5"><i class="fa-solid fa-check text-xs"></i></span>
                        Menyediakan produk berkualitas tinggi standar internasional.
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-3 mt-0.5"><i class="fa-solid fa-check text-xs"></i></span>
                        Menjalin kemitraan yang berkelanjutan.
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-3 mt-0.5"><i class="fa-solid fa-check text-xs"></i></span>
                        Mengedepankan inovasi pasar yang dinamis.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w-full bg-slate-900 py-12 md:py-20 px-5 md:px-8 text-white overflow-hidden">
        <div data-aos="zoom-in" class="max-w-3xl mx-auto text-center">
            <h2 class="text-xl min-[400px]:text-2xl md:text-3xl lg:text-4xl font-extrabold mb-4 leading-snug">
                Keunggulan Kompetitif dalam Kualitas dan Layanan <br class="hidden md:block"> berkolaborasi dengan PT Agisa Dimarta
            </h2>
            <p class="text-slate-400 text-xs md:text-sm mb-6 md:mb-8">Ketersediaan layanan purna jual, dan harga yang sangat kompetitif.</p>
            <a href="/contact" class="inline-block bg-white text-slate-900 hover:bg-blue-600 hover:text-white font-bold py-3 px-8 rounded-lg transition-all text-xs md:text-sm shadow-md">
                Hubungi Kami
            </a>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
        });

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