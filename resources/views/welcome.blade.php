<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Agisa Nawasena Jaya - Sterno Gel</title>
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
<body class="text-gray-800 antialiased bg-white selection:bg-red-700 selection:text-white">

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
                <li><a href="/" class="text-red-700 relative">ABOUT<span class="absolute -bottom-1 left-0 w-full h-0.5 bg-red-700"></span></a></li>
                <li><a href="/contact" class="hover:text-red-700 transition-colors duration-300 relative group">CONTACT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-700 transition-all group-hover:w-full"></span></a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="md:hidden bg-white border-b border-gray-100 shadow-xl absolute w-full left-0">
            <ul class="flex flex-col px-6 py-6 space-y-5 text-base font-semibold text-gray-800">
                <li><a href="/category" class="hover:text-red-700 transition-colors block">PRODUCTS</a></li>
                <li><a href="/" class="text-red-700 block pl-2 border-l-4 border-red-700">ABOUT</a></li>
                <li><a href="/contact" class="hover:text-red-700 transition-colors block">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-black text-white min-h-[80vh] flex flex-col justify-center items-center text-center px-4 pt-20 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-800 via-black to-black opacity-60 z-0"></div>
        <div class="relative z-10 w-full max-w-5xl mx-auto px-4 flex flex-col items-center">
            <span class="text-red-600 font-bold tracking-[0.3em] text-xs sm:text-sm mb-6 uppercase border border-red-600/30 px-4 py-1.5 rounded-full bg-red-600/10">Solusi Energi Terpercaya</span>
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                PT AGISA DIMARTA <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">PERKASA</span>
            </h1>
            <p class="text-sm md:text-lg text-gray-400 max-w-2xl mt-4 font-light leading-relaxed">
                Menghadirkan inovasi dan efisiensi melalui produk Sterno Gel berkualitas tinggi untuk kebutuhan industri dan komersial Anda.
            </p>
            <a href="#about" class="mt-12 text-gray-400 hover:text-white transition-colors animate-bounce">
                <i class="fa-solid fa-arrow-down text-2xl"></i>
            </a>
        </div>
    </header>

    <section id="about" class="max-w-7xl mx-auto px-6 lg:px-8 py-24 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div class="order-2 md:order-1 relative">
            <div class="absolute inset-0 bg-red-700 transform translate-x-4 translate-y-4 rounded-2xl z-0"></div>
            <div class="relative z-10 bg-white rounded-2xl overflow-hidden shadow-2xl" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <img src="https://images.unsplash.com/photo-1574329668383-056346b08058?auto=format&fit=crop&q=80&w=800" alt="Garam Industri" class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700">
            </div>
        </div>
        <div class="order-1 md:order-2">
            <h2 class="text-3xl md:text-4xl font-extrabold text-black mb-6 tracking-tight">TENTANG <span class="text-red-700">KAMI</span></h2>
            <div class="w-20 h-1.5 bg-red-700 mb-8 rounded-full"></div>
            <p class="text-gray-600 mb-6 text-base md:text-lg leading-relaxed">
                <strong class="text-black font-semibold">PT Agisa Nawasena Jaya</strong> adalah perusahaan distributor garam industri yang berdedikasi untuk menyediakan solusi berkualitas tinggi kepada pelanggan di berbagai sektor.
            </p>
            <p class="text-gray-600 text-base leading-relaxed">
                Berdiri sejak tahun 2017 dengan nama CV Agisa Jaya, perusahaan ini berkembang pesat dan pada tahun 2023 resmi berganti nama menjadi PT Agisa Nawasena Jaya. Dengan pengalaman yang solid dan komitmen terhadap keunggulan, kami telah menjadi mitra terpercaya di seluruh Indonesia.
            </p>
        </div>
    </section>

    <section class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-sm text-red-600 font-bold tracking-[0.2em] mb-2 uppercase">Precision Packaging Fuel</p>
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-black">STERNO GEL SERIES</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden cursor-pointer" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="h-56 bg-gray-100 flex items-center justify-center p-8 overflow-hidden">
                        <img src="https://via.placeholder.com/300x200/EEEEEE/000000?text=Sterno+190" alt="SG-190" class="h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-xl">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-extrabold text-xl text-black">Sterno 190</h3>
                            <span class="bg-red-100 text-red-700 text-xs font-bold px-3 py-1 rounded-full">190G</span>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed">Standard burn time for typical catering and hospitality applications.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl border-2 border-red-700 shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden cursor-pointer relative transform md:-translate-y-4" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="absolute top-0 right-0 bg-red-700 text-white text-xs font-bold px-4 py-1 rounded-bl-lg z-10">BEST SELLER</div>
                    <div class="h-56 bg-gray-100 flex items-center justify-center p-8 overflow-hidden">
                        <img src="https://via.placeholder.com/300x200/EEEEEE/000000?text=SG-250" alt="SG-250" class="h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-xl">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-extrabold text-xl text-black">SG-250</h3>
                            <span class="bg-red-100 text-red-700 text-xs font-bold px-3 py-1 rounded-full">250G</span>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed">Extended duration fuel cell for demanding environments.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden cursor-pointer" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="h-56 bg-gray-100 flex items-center justify-center p-8 overflow-hidden">
                        <img src="https://via.placeholder.com/300x200/EEEEEE/000000?text=SG-400+MAX" alt="SG-400 MAX" class="h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-xl">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-extrabold text-xl text-black">SG-400 MAX</h3>
                            <span class="bg-black text-white text-xs font-bold px-3 py-1 rounded-full">400G</span>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed">Maximum heat output and longevity for large-scale industrial heating.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100 hover:border-red-200 transition-colors relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-black group-hover:bg-red-700 transition-colors"></div>
                <div class="w-14 h-14 bg-red-50 text-red-700 rounded-xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 transition-transform duration-300">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-black mb-4 tracking-wide">VISI</h3>
                <p class="text-base text-gray-600 leading-relaxed">
                    Menjadi mitra unggulan dalam memenuhi kebutuhan garam industri, dikenal karena inovasi, kualitas, dan komitmen terhadap keberlanjutan.
                </p>
            </div>
            
            <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100 hover:border-red-200 transition-colors relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-red-700"></div>
                <div class="w-14 h-14 bg-red-50 text-red-700 rounded-xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 transition-transform duration-300">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-black mb-4 tracking-wide">MISI</h3>
                <ul class="text-base text-gray-600 leading-relaxed space-y-4">
                    <li class="flex items-start">
                        <span class="text-red-700 font-bold mr-3 mt-0.5"><i class="fa-solid fa-check"></i></span>
                        Menyediakan garam berkualitas tinggi yang memenuhi standar internasional.
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-700 font-bold mr-3 mt-0.5"><i class="fa-solid fa-check"></i></span>
                        Menjalin kemitraan yang berkelanjutan dengan pelanggan dan pemasok.
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-700 font-bold mr-3 mt-0.5"><i class="fa-solid fa-check"></i></span>
                        Mengedepankan inovasi untuk memenuhi tuntutan pasar yang dinamis.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-gray-900 text-white py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div>
                <h3 class="text-2xl font-extrabold mb-8 flex items-center">
                    <i class="fa-solid fa-chart-simple text-red-600 mr-3"></i> PERFORMANCE DATA
                </h3>
                <div class="overflow-x-auto bg-gray-800 rounded-xl shadow-2xl border border-gray-700">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs uppercase bg-black text-gray-400 border-b border-gray-700">
                            <tr>
                                <th class="px-6 py-4 font-bold tracking-wider">MODEL</th>
                                <th class="px-6 py-4 font-bold tracking-wider">BURN TIME</th>
                                <th class="px-6 py-4 font-bold tracking-wider">PEAK TEMP</th>
                                <th class="px-6 py-4 font-bold tracking-wider">WEIGHT</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <tr class="hover:bg-gray-700/50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-white">SG-200</td>
                                <td class="px-6 py-4 text-gray-300">2.0 HRS</td>
                                <td class="px-6 py-4 text-gray-300">185°F</td>
                                <td class="px-6 py-4 text-gray-300">200G</td>
                            </tr>
                            <tr class="hover:bg-gray-700/50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-white">SG-250</td>
                                <td class="px-6 py-4 text-gray-300">2.5 HRS</td>
                                <td class="px-6 py-4 text-gray-300">190°F</td>
                                <td class="px-6 py-4 text-gray-300">250G</td>
                            </tr>
                            <tr class="bg-red-900/20 hover:bg-red-900/40 transition-colors">
                                <td class="px-6 py-4 font-bold text-red-400">SG-400 MAX</td>
                                <td class="px-6 py-4 font-bold text-red-400">4.0 HRS</td>
                                <td class="px-6 py-4 font-bold text-red-400">200°F</td>
                                <td class="px-6 py-4 font-bold text-red-400">400G</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-extrabold mb-8 flex items-center">
                    <i class="fa-solid fa-shield-halved text-red-600 mr-3"></i> SAFETY STANDARDS
                </h3>
                <div class="space-y-4">
                    <div class="flex items-start bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-red-500/50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center shrink-0 mr-5 border border-gray-700">
                            <i class="fa-solid fa-droplet-slash text-red-500 text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-white mb-1">SPILL-RESISTANT GEL</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">High-viscosity formula prevents dangerous spills even when tipped.</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-red-500/50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center shrink-0 mr-5 border border-gray-700">
                            <i class="fa-solid fa-leaf text-red-500 text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-white mb-1">NON-TOXIC EMISSION</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">Clean burning ethanol blend produces zero harmful fumes.</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-red-500/50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-gray-900 flex items-center justify-center shrink-0 mr-5 border border-gray-700">
                            <i class="fa-solid fa-truck-fast text-red-500 text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-white mb-1">TRANSPORT APPROVED</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">Certified safe for standard industrial and commercial transport.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="relative bg-red-700 py-24 px-6 lg:px-8 overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10 mix-blend-overlay"></div>
        <div class="relative z-10 max-w-3xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-5xl font-extrabold mb-6 tracking-tight">READY FOR PRECISION POWER?</h2>
            <p class="mb-10 text-red-100 text-base md:text-lg font-light">Contact our industrial logistics team for bulk pricing, MSDS sheets, and technical consultation.</p>
            <a href="/contact" class="inline-flex items-center justify-center bg-black hover:bg-gray-900 text-white font-bold py-4 px-10 rounded-full transition-transform transform hover:scale-105 shadow-xl ring-4 ring-black/20">
                HUBUNGI KAMI SEKARANG <i class="fa-solid fa-arrow-right ml-3"></i>
            </a>
        </div>
    </section>

    <footer class="bg-black text-gray-400 text-sm py-12 px-6 lg:px-8 border-t border-gray-800">
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