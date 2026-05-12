<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Agisa Dimarta Perkasa - Sterno Gel</title>
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
<body class="text-slate-800 antialiased bg-[#D5DEEF] selection:bg-blue-600 selection:text-white">

    <nav class="fixed w-full top-0 z-50 bg-[#D5DEEF]/85 backdrop-blur-lg border-b border-slate-200 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-4 md:py-5 flex justify-between items-center">
            <div class="text-xl md:text-2xl font-extrabold text-blue-700 tracking-tighter">
                <a href="/">STERNO<span class="text-slate-800 ml-1">GEL.</span></a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden text-slate-800 hover:text-blue-700 focus:outline-none transition-colors">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>

            <ul class="hidden md:flex space-x-10 text-sm font-semibold text-slate-600 tracking-wide">
                <li><a href="/category" class="hover:text-blue-700 transition-colors duration-300 relative group">PRODUCTS<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 transition-all group-hover:w-full"></span></a></li>
                <li><a href="/" class="text-blue-700 relative">ABOUT<span class="absolute -bottom-1 left-0 w-full h-0.5 bg-blue-700"></span></a></li>
                <li><a href="/contact" class="hover:text-blue-700 transition-colors duration-300 relative group">CONTACT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 transition-all group-hover:w-full"></span></a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="md:hidden bg-[#D5DEEF] border-b border-slate-200 shadow-xl absolute w-full left-0 mt-[1px]">
            <ul class="flex flex-col px-5 py-6 space-y-5 text-sm font-semibold text-slate-700">
                <li><a href="/category" class="hover:text-blue-700 transition-colors block">PRODUCTS</a></li>
                <li><a href="/" class="text-blue-700 block pl-3 border-l-4 border-blue-700 bg-blue-50/50 py-1">ABOUT</a></li>
                <li><a href="/contact" class="hover:text-blue-700 transition-colors block">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <header class="relative bg-[#D5DEEF] min-h-[75vh] md:min-h-[85vh] flex flex-col justify-center items-center text-center px-4 pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-white via-[#D5DEEF] to-[#b9c7df] opacity-90 z-0"></div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-4 flex flex-col items-center">
            <span class="text-blue-600 font-bold tracking-[0.2em] text-[10px] sm:text-xs md:text-sm mb-4 md:mb-6 uppercase border border-blue-200 px-4 py-1.5 rounded-full bg-blue-50/80">Solusi Energi Terpercaya</span>
            
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-4 md:mb-6 leading-snug md:leading-[1.15] text-slate-800">
                PT AGISA DIMARTA 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-slate-700 block md:inline mt-1 md:mt-0">PERKASA</span>
            </h1>
            
            <p class="text-sm md:text-lg text-slate-600 max-w-2xl mt-2 font-medium leading-relaxed px-4">
                Menghadirkan inovasi dan efisiensi melalui produk Sterno Gel berkualitas tinggi untuk kebutuhan industri dan komersial Anda.
            </p>
            
            <a href="#about" class="mt-8 md:mt-16 w-12 h-12 flex items-center justify-center rounded-full bg-white shadow-lg shadow-blue-900/5 text-slate-400 hover:text-blue-700 hover:-translate-y-1 transition-all duration-300">
                <i class="fa-solid fa-arrow-down text-lg"></i>
            </a>
        </div>
    </header>

    <section id="about" class="max-w-7xl mx-auto px-5 lg:px-8 py-16 md:py-24 grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
        <div class="order-2 md:order-1 relative">
            <div class="absolute inset-0 bg-blue-700 transform translate-x-3 translate-y-3 md:translate-x-4 md:translate-y-4 rounded-2xl z-0"></div>
            <div class="relative z-10 bg-white rounded-2xl overflow-hidden shadow-xl shadow-slate-300/40 border border-slate-100" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                <img src="https://images.unsplash.com/photo-1574329668383-056346b08058?auto=format&fit=crop&q=80&w=800" alt="Garam Industri" class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700">
            </div>
        </div>
        <div class="order-1 md:order-2">
            <h2 class="text-2xl md:text-4xl font-extrabold text-slate-800 mb-4 md:mb-6 tracking-tight">TENTANG <span class="text-blue-700">KAMI</span></h2>
            <div class="w-16 md:w-20 h-1.5 bg-blue-700 mb-6 md:mb-8 rounded-full"></div>
            <p class="text-slate-600 mb-4 md:mb-6 text-sm md:text-lg leading-relaxed">
                <strong class="text-slate-800 font-bold">PT Agisa Nawasena Jaya</strong> adalah perusahaan distributor garam industri yang berdedikasi untuk menyediakan solusi berkualitas tinggi kepada pelanggan di berbagai sektor.
            </p>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                Berdiri sejak tahun 2017 dengan nama CV Agisa Jaya, perusahaan ini berkembang pesat dan pada tahun 2023 resmi berganti nama menjadi PT Agisa Nawasena Jaya. Dengan pengalaman yang solid dan komitmen terhadap keunggulan, kami telah menjadi mitra terpercaya di seluruh Indonesia.
            </p>
        </div>
    </section>

    <section class="bg-[#D5DEEF] py-16 md:py-24 border-y border-[#b9c7df] shadow-[0_0_40px_rgba(0,0,0,0.01)]">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-12 md:mb-16">
                <p class="text-[10px] md:text-sm text-blue-600 font-bold tracking-[0.2em] mb-2 uppercase">Precision Packaging Fuel</p>
                <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight text-slate-800">STERNO GEL SERIES</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                
                <div class="group bg-slate-50 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 hover:border-blue-200 transition-all duration-300 overflow-hidden cursor-pointer" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="h-48 md:h-56 bg-white flex items-center justify-center p-6 md:p-8 overflow-hidden">
                        <img src="Sterno 190.jpg" alt="SG-190" class="h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-extrabold text-lg md:text-xl text-slate-800">SG-190</h3>
                            <span class="bg-blue-50 text-blue-700 text-[10px] md:text-xs font-bold px-2 md:px-3 py-1 rounded-full border border-blue-100">190G</span>
                        </div>
                        <p class="text-xs md:text-sm text-slate-500 leading-relaxed">Standard burn time for typical catering and hospitality applications.</p>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl border-2 border-blue-600 shadow-lg shadow-blue-100/50 hover:shadow-2xl hover:shadow-blue-200/50 transition-all duration-300 overflow-hidden cursor-pointer relative transform md:-translate-y-4" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white text-[10px] md:text-xs font-bold px-4 py-1.5 rounded-bl-lg z-10 tracking-wider">BEST SELLER</div>
                    <div class="h-48 md:h-56 bg-blue-50/30 flex items-center justify-center p-6 md:p-8 overflow-hidden">
                        <img src="https://via.placeholder.com/300x200/EEEEEE/000000?text=SG-250" alt="SG-250" class="h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-xl">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-extrabold text-lg md:text-xl text-slate-800">SG-250</h3>
                            <span class="bg-blue-100 text-blue-800 text-[10px] md:text-xs font-bold px-2 md:px-3 py-1 rounded-full border border-blue-200">250G</span>
                        </div>
                        <p class="text-xs md:text-sm text-slate-500 leading-relaxed">Extended duration fuel cell for demanding environments.</p>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 hover:border-blue-200 transition-all duration-300 overflow-hidden cursor-pointer" data-tilt data-tilt-max="3" data-tilt-speed="400">
                    <div class="h-48 md:h-56 bg-white flex items-center justify-center p-6 md:p-8 overflow-hidden">
                        <img src="https://via.placeholder.com/300x200/EEEEEE/000000?text=SG-400+MAX" alt="SG-400 MAX" class="h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="font-extrabold text-lg md:text-xl text-slate-800">SG-400 MAX</h3>
                            <span class="bg-slate-800 text-white text-[10px] md:text-xs font-bold px-2 md:px-3 py-1 rounded-full">400G</span>
                        </div>
                        <p class="text-xs md:text-sm text-slate-500 leading-relaxed">Maximum heat output and longevity for large-scale industrial heating.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 px-5 lg:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            
            <div class="bg-slate-50 p-6 md:p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100 hover:border-blue-200 transition-colors relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-slate-400 group-hover:bg-blue-600 transition-colors"></div>
                <div class="w-12 h-12 md:w-14 md:h-14 bg-white border border-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-6 md:mb-8 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-extrabold text-slate-800 mb-3 md:mb-4 tracking-wide">VISI</h3>
                <p class="text-sm md:text-base text-slate-600 leading-relaxed">
                    Menjadi mitra unggulan dalam memenuhi kebutuhan garam industri, dikenal karena inovasi, kualitas, dan komitmen terhadap keberlanjutan.
                </p>
            </div>
            
            <div class="bg-slate-50 p-6 md:p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100 hover:border-blue-200 transition-colors relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-blue-600"></div>
                <div class="w-12 h-12 md:w-14 md:h-14 bg-white border border-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-6 md:mb-8 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-extrabold text-slate-800 mb-3 md:mb-4 tracking-wide">MISI</h3>
                <ul class="text-sm md:text-base text-slate-600 leading-relaxed space-y-3 md:space-y-4 font-medium">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-3 mt-0.5"><i class="fa-solid fa-check text-sm"></i></span>
                        Menyediakan garam berkualitas tinggi yang memenuhi standar internasional.
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-3 mt-0.5"><i class="fa-solid fa-check text-sm"></i></span>
                        Menjalin kemitraan yang berkelanjutan dengan pelanggan dan pemasok.
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-3 mt-0.5"><i class="fa-solid fa-check text-sm"></i></span>
                        Mengedepankan inovasi untuk memenuhi tuntutan pasar yang dinamis.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-[#D5DEEF] py-16 md:py-24 border-y border-[#b9c7df]">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
            
            <div>
                <h3 class="text-xl md:text-2xl font-extrabold mb-6 md:mb-8 flex items-center tracking-tight text-slate-800">
                    <i class="fa-solid fa-chart-simple text-blue-600 mr-3"></i> PERFORMANCE DATA
                </h3>
                <div class="overflow-x-auto bg-slate-50 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-200">
                    <table class="w-full text-xs md:text-sm text-left">
                        <thead class="uppercase bg-slate-100 text-slate-600 border-b border-slate-200 font-extrabold text-[10px] md:text-xs tracking-wider">
                            <tr>
                                <th class="px-4 py-4 md:px-6 md:py-5">MODEL</th>
                                <th class="px-4 py-4 md:px-6 md:py-5">BURN TIME</th>
                                <th class="px-4 py-4 md:px-6 md:py-5">PEAK TEMP</th>
                                <th class="px-4 py-4 md:px-6 md:py-5">WEIGHT</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 font-medium">
                            <tr class="hover:bg-white transition-colors">
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-800 font-bold">SG-200</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-600">2.0 HRS</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-600">185°F</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-600">200G</td>
                            </tr>
                            <tr class="hover:bg-white transition-colors">
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-800 font-bold">SG-250</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-600">2.5 HRS</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-600">190°F</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 text-slate-600">250G</td>
                            </tr>
                            <tr class="bg-blue-50/60 hover:bg-blue-50 transition-colors">
                                <td class="px-4 py-4 md:px-6 md:py-5 font-extrabold text-blue-700">SG-400 MAX</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 font-bold text-blue-700">4.0 HRS</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 font-bold text-blue-700">200°F</td>
                                <td class="px-4 py-4 md:px-6 md:py-5 font-bold text-blue-700">400G</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h3 class="text-xl md:text-2xl font-extrabold mb-6 md:mb-8 flex items-center tracking-tight text-slate-800">
                    <i class="fa-solid fa-shield-halved text-blue-600 mr-3"></i> SAFETY STANDARDS
                </h3>
                <div class="space-y-4">
                    <div class="flex items-start bg-slate-50 p-5 md:p-6 rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.02)] border border-slate-100 hover:border-blue-200 hover:shadow-[0_4px_20px_rgb(37,99,235,0.06)] transition-all">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-white flex items-center justify-center shrink-0 mr-4 border border-blue-100 shadow-sm">
                            <i class="fa-solid fa-droplet-slash text-blue-600 text-base md:text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-extrabold text-sm md:text-base text-slate-800 mb-1">SPILL-RESISTANT GEL</h4>
                            <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-medium">High-viscosity formula prevents dangerous spills even when tipped.</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-slate-50 p-5 md:p-6 rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.02)] border border-slate-100 hover:border-blue-200 hover:shadow-[0_4px_20px_rgb(37,99,235,0.06)] transition-all">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-white flex items-center justify-center shrink-0 mr-4 border border-blue-100 shadow-sm">
                            <i class="fa-solid fa-leaf text-blue-600 text-base md:text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-extrabold text-sm md:text-base text-slate-800 mb-1">NON-TOXIC EMISSION</h4>
                            <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-medium">Clean burning ethanol blend produces zero harmful fumes.</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-slate-50 p-5 md:p-6 rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.02)] border border-slate-100 hover:border-blue-200 hover:shadow-[0_4px_20px_rgb(37,99,235,0.06)] transition-all">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-white flex items-center justify-center shrink-0 mr-4 border border-blue-100 shadow-sm">
                            <i class="fa-solid fa-truck-fast text-blue-600 text-base md:text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-extrabold text-sm md:text-base text-slate-800 mb-1">TRANSPORT APPROVED</h4>
                            <p class="text-xs md:text-sm text-slate-500 leading-relaxed font-medium">Certified safe for standard industrial and commercial transport.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="relative bg-slate-800 py-16 md:py-24 px-5 lg:px-8 overflow-hidden">
        <div class="absolute inset-0 opacity-20 mix-blend-overlay" style="background-image: radial-gradient(#64748b 1px, transparent 1px); background-size: 20px 20px;"></div>
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-blue-600 rounded-full blur-[100px] opacity-30"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-blue-400 rounded-full blur-[100px] opacity-20"></div>

        <div class="relative z-10 max-w-3xl mx-auto text-center text-white">
            <h2 class="text-2xl md:text-4xl font-extrabold mb-4 tracking-tight">READY FOR PRECISION POWER?</h2>
            <p class="mb-8 md:mb-10 text-slate-300 text-xs md:text-base font-medium leading-relaxed">Contact our industrial logistics team for bulk pricing, MSDS sheets, and technical consultation.</p>
            <a href="/contact" class="inline-flex items-center justify-center bg-blue-600 text-white font-bold py-3.5 px-8 md:py-4 md:px-10 rounded-full transition-all transform hover:scale-105 shadow-[0_10px_30px_rgba(37,99,235,0.3)] hover:shadow-[0_10px_40px_rgba(37,99,235,0.5)] text-xs md:text-sm hover:bg-blue-500 border border-blue-500/50">
                HUBUNGI KAMI SEKARANG <i class="fa-solid fa-arrow-right ml-2 md:ml-3"></i> 
            </a>
        </div>
    </section>

    <footer class="bg-[#D5DEEF] text-slate-500 text-sm py-10 px-5 lg:px-8 border-t border-slate-200">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-extrabold text-slate-800 text-xl tracking-tighter text-center md:text-left">
                STERNO<span class="text-blue-600">GEL.</span>
            </div>
            <div class="text-center text-[10px] md:text-xs font-semibold text-slate-400">
                &copy; 2026 PT AGISA DIMARTA PERKASA. ALL RIGHTS RESERVED. <br class="hidden md:block">
                SOLUSI ENERGI TERPERCAYA.
            </div>
            <div class="flex flex-wrap justify-center gap-4 md:gap-6 text-[10px] md:text-xs font-bold uppercase tracking-widest text-slate-400">
                <a href="#" class="hover:text-blue-600 transition-colors">Privacy</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Specs</a>
                <a href="#" class="hover:text-blue-600 transition-colors">MSDS</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Distributors</a>
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