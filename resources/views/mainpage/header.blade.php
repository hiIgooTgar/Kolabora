<header class="relative w-screen h-screen mb-32" id="beranda">
<svg class="absolute inset-0 z-0 h-full lg:h-auto w-full" viewBox="0 0 902 451" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><rect class="bg" id="bg" x="0" y="0" width="902" height="451" fill="#ffffff"></rect><defs><filter id="f1" x="-200%" y="-200%" width="500%" height="500%"><feGaussianBlur stdDeviation="100"></feGaussianBlur></filter></defs><circle cx="902" cy="451" r="1008.4666578524052" fill="#FCA311" filter="url(#f1)"></circle><circle cx="902" cy="451" r="806.7733262819241" fill="#FFFFFF" filter="url(#f1)"></circle><circle cx="902" cy="451" r="605.0799947114431" fill="#FFFFFF" filter="url(#f1)"></circle><circle cx="902" cy="451" r="403.38666314096207" fill="#FFFFFF" filter="url(#f1)"></circle><circle cx="902" cy="451" r="201.69333157048104" fill="#2563EB" filter="url(#f1)"></circle></svg>
<div class="navigation w-full py-5 fixed top-0 left-0 right-0 z-50 px-3 md:px-6 lg:px-0">
    <nav class="container mx-auto flex justify-between px-6 py-4 bg-gray-300 rounded-full bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-20 border border-gray-300 shadow-3xl">
        <div class="header-logo flex items-center gap-x-1">
            <img src="images/logo-kolabora.png" alt="" class="md:w-12 md:h-12 w-10 h-10">
            <div class="header-logo-text">
                <a href="" class="text-xl md:text-2xl font-bold text-orange-300 cursor-pointer">Kola<span class="text-blue-600">Bora</span></a>
            </div>
        </div>
        

            <ul class="nav-links  gap-x-3 items-start lg:items-center flex flex-col lg:flex-row absolute lg:static md:mt-[20%] mt-[50%] lg:mt-0 gap-y-2 bg-white lg:bg-transparent rounded-md border lg:border-none
             border-gray-300 shadow-md lg:shadow-none py-5 pr-16 pl-4 lg:pl-0 lg:pr-0 lg:py-0 -right-[250px] transition-all duration-500" id="navLinks">
                <!-- btn close -->
               <li class="relative w-full bg-red-500 flex justify-center items-center lg:hidden"><i class="ph ph-x absolute left-[118px] -top-2 text-2xl font-bold" id="close"></i></li>
               <li><a href="#beranda" class="hover:text-gray-700 duration-300">Beranda</a></li>
               <li><a href="#tentang" class="hover:text-gray-700 duration-300">Tentang</a></li>
               <li><a href="#keunggulan" class="hover:text-gray-700 duration-300">Keunggulan</a></li>
               <li><a href="#carakerja" class="hover:text-gray-700 duration-300">Cara Kerja</a></li>
               <li><a href="#testimoni" class="hover:text-gray-700 duration-300">Testimoni</a></li>
               <li><a href="#faq" class="hover:text-gray-700 duration-300">FAQ</a></li>
               
            </ul>
            <div class="btn-right items-center gap-x-3 flex">
                <div class="btn-login">
                    <a href="{{url('auth/login')}}" class="hidden md:flex">Login</a>
                </div>
                <div class="btn-signup">
                    <a href="{{url('auth/registrasi')}}" class="font-semibold rounded-full inline-block bg-gradient-to-r from-sky_light to-primary py-2 px-4 text-white hover:bg-blue-800 duration-300 hidden md:flex">Sign Up</a>
                </div>
                <div class="hamburger-menu flex lg:hidden">
            <i class="ph ph-list text-4xl" id="hamburger-menu"></i>
            </div>
            </div>
        </nav>
    </div>
    <div class="illustration-img absolute z-10 lg:top-[25%] md:top-[27%]  md:right-[5%] top-[21%] right-[5%]   rotate-[10deg] bg-white rounded-xl shadow-xl">
            <img src="/images/work.png" alt="" class="lg:w-40 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="illustration-img absolute z-10 lg:top-[60%] top-[70%] lg:right-[5%] md:right-[8%] right-[5%] bg-white rounded-xl shadow-xl rotate-[10deg]">
            <img src="/images/goals.png" alt="" class="lg:w-36 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="illustration-img absolute z-10 md:top-[64%] top-[70%] left-[4%] bg-white rounded-xl shadow-xl -rotate-[10deg]">
            <img src="/images/Portfolio.png" alt="" class="lg:w-40 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="illustration-img absolute z-10 md:top-[27%] top-[22%] left-[4%] bg-white rounded-xl shadow-xl -rotate-[10deg]">
            <img src="/images/chart.png" alt="" class="lg:w-40 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="relative textbox-container flex w-full h-full justify-center z-10 py-16 lg:top-[20%] md:top-[24%] top-[21%]">
        <div class="textbox-content">
            <div class="textbox-label w-full flex justify-center py-2">
                <span class="rounded-full py-3 px-10 text-sm font-semibold bg-gray-100 shadow-md">Peluang Lokal</span>
            </div>
            <div class="text-title">
                <h1 class="font-bold text-[28px] md:text-[42px] lg:text-6xl text-center leading-none">Kolaborasi Tanpa Batas <br> Peluang Tak Terbatas!</h1>
            </div>
            <div class="textbox-subtitle">
                <h2 class="text-center  text-[15px] md:text-base lg:text-lg py-3 font-light">Temukan pekerjaan berbasis tim, dapatkan reward <br class="lg:hidden"> dari kontribusi, dan dukung ekonomi lokal.</h2>
            </div>
            <div class="textbox-cta py-5 w-full flex justify-center">
                <a href="" class="text-sm py-3 inline-block bg-gradient-to-r from-sky_light to-primary px-3 text-white font-semibold rounded-md hover:bg-blue-800 duration-300">Gabung Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Layer Gradient White -->
     <div class="bg-gradient-to-t from-white to-transparent w-full h-[20%] absolute lg:-bottom-[85px] -bottom-[0]"></div>
    
</header>



