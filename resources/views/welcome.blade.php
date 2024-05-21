<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcaSync - Buat Perjalanan Akademikmu Tersinkron dan Menyenangkan</title>
    <link rel="shortcut icon" href="{{ URL::to('/') }}/img/icon-acasync.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-white">
    <nav class="bg-white md:bg-stone-100 font-heading fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ '/' }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ '/login' }}" type="button" class="text-white hover:text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Masuk</a>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 bg-white border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-stone-100">
                <li>
                    <a href="#home" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue">Beranda</a>
                </li>
                <li>
                    <a href="#about" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue">Tentang Kami</a>
                </li>
                <li>
                    <a href="#faq" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue">FAQ</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-white md:bg-stone-100" id="home">
        <div class="py-8 px-4 mx-auto max-w-screen-xl h-screen lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="flex flex-col justify-center">
                <h1 class="mb-4 text-2xl font-heading font-extrabold leading-none text-gray-900 md:text-3xl lg:text-5xl"><span class="text-sky">Akademik Sinkron</span> <br>Capai Pembelajaran Interaktif</h1>
                <p class="mb-8 text-sm font-default font-normal text-gray-500 lg:text-xl">Mekanisme evaluasi pemantauan akademik siswa yang transparan untuk semua pihak menciptakan pembelajaran jarak jauh menjadi baik </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                    <a href="{{ '/register-workspace' }}" class="inline-flex justify-center items-center py-3 px-5 font-heading text-base font-medium text-center text-white rounded-lg bg-blue hover:bg-blue-800 focus:ring-4 focus:ring-blue">
                        Buat Workspace
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="{{ '/register-account' }}" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                        Belum Punya Akun?
                    </a>  
                </div>
            </div>
            <div>
                <img class="hidden lg:block" src="{{ URL::to('/') }}/img/intro.gif" title="Intro">
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 py-8 mb-5 mx-auto lg:py-24 lg:px-6" id="about">
        <div class="px-10 text-center" intersect="animate-fade-up animate-ease-out animate-duration-[900ms] animate-delay-300">
            <h2 class="text-3xl font-heading font-extrabold text-gray-90"><span class="text-sky">Inovasi</span> Membuat Kami Unik</h2>
            <p class="mt-2 font-default font-light">Di workspace ini, Kami tidak hanya memfasilitasi fitur pembelajaran yang melibatkan pengajar dan peserta didik saja namun juga <br>dapat memantau proses perkembangan selama pembelajaran berlangsung.</p>
        </div>
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-24">
            <div class="col-span-2 space-y-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:space-y-0">
                <div class="mb-4 lg:mb-0" intersect="animate-fade-right animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/setup.png" alt="Manajemen Kelas dan Mata Pelajaran yang Efisien" class="w-72 lg:size-60 mb-2">
                    <h4 class="mb-2 text-2xl font-heading font-bold">Manajemen Kelas dan Mata Pelajaran yang Efisien</h4>
                    <p class="font-light font-default text-justify text-gray-500 ">Kami menyediakan platform yang memudahkan admin dalam melakukan setup kelas dan mata pelajaran sebelum semester baru dimulai. Admin dapat mengundang dan mengelola akses guru ke berbagai kelas dan mata pelajaran. Fitur ini memungkinkan penugasan guru sesuai dengan keahlian mereka, memastikan pengajaran yang terorganisir dan terstruktur dengan baik</p>
                </div>
                <div class="mb-4 lg:mb-0" intersect="animate-fade-left animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/rpp.png" alt="Rencana Pelaksanaan Pembelajaran (RPP) Terintegrasi" class="w-72 lg:size-60 mb-2">
                    <h4 class="mb-2 text-2xl font-heading font-bold">Rencana Pelaksanaan Pembelajaran (RPP) Terintegrasi</h4>
                    <p class="font-light font-default text-justify text-gray-500 ">Distribusi RPP termasuk elemen pembelajaran, capaian pembelajaran, tujuan, dan bab materi dan tugas yang diunggah dan dijadwalkan sesuai kebutuhan seragam di beberapa kelas meningkatkan efisiensi dan konsistensi dalam pengajaran.</p>
                </div>
                <div class="mb-4 lg:mb-0" intersect="animate-fade-right animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/notifikasi.png" alt="Notifikasi dan Pengingat Tugas Otomatis" class="w-72 lg:size-60 mb-2">
                    <h4 class="mb-2 font-heading text-2xl font-bold">Notifikasi dan Pengingat Tugas Otomatis</h4>
                    <p class="font-light font-default text-justify text-gray-500 ">Tugas yang dinilai akan memicu notifikasi pengingat bagi peserta didik dan orang tua jika belum dikerjakan. Fitur ini membantu orang tua dalam memantau dan mengingatkan anak-anak mereka, serta memastikan peserta didik tetap berada di jalur yang benar dalam proses pembelajaran</p>
                </div>
                <div class="mb-4 lg:mb-0" intersect="animate-fade-left animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/integration.png" alt="Pemantauan dan Evaluasi Pembelajaran yang Komprehensif" class="size-60 mb-2">
                    <h4 class="mb-2 font-heading text-2xl font-bold">Pemantauan dan Evaluasi Pembelajaran yang Komprehensif</h4>
                    <p class="font-light font-default text-justify text-gray-500 ">Fitur pemantauan dalam AcaSync memungkinkan guru dan wali kelas untuk melacak perkembangan peserta didik, termasuk nilai akhir dan capaian pembelajaran. Sistem juga menyediakan opsi pengajuan materi tingkat lanjut berdasarkan capaian peserta didik. Laporan grafik capaian pembelajaran di akhir semester membantu admin dan guru mengevaluasi efektivitas kurikulum dan metode pengajaran, mendukung perbaikan berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 py-8 mb-5 mx-auto lg:py-24 lg:px-6 bg-blue" id="faq">
        <div class="px-10 text-center" intersect="animate-fade-down animate-ease-out animate-duration-[900ms] animate-delay-300">
            <h2 class="text-3xl font-heading font-bold text-gray-90 text-white">Pertanyaan yang Sering Diajukan</h2>
        </div>
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-24">
            <div class="col-span-2 space-y-8 lg:grid lg:grid-cols-2 lg:gap-2 lg:space-y-0">
                <div id="accordion-arrow-icon" class="rounded" data-accordion="open" intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-1" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white rtl:text-left focus:text-blue hover:bg-gray border border-gray-200 hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="false" aria-controls="accordion-arrow-icon-body-1">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2">Accordion with another icon</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-1" class="hidden" aria-labelledby="accordion-arrow-icon-heading-1">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p>Check out the <a href="https://flowbite.com/figma/" class="hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-2" class="rounded" data-accordion="open" intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-2" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white rtl:text-left focus:text-blue hover:bg-gray border border-gray-200 hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false" aria-controls="accordion-arrow-icon-body-2">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2">Accordion with another icon</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-2" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p>Check out the <a href="https://flowbite.com/figma/" class="hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-3" class="rounded" data-accordion="open"intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-3" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white rtl:text-left focus:text-blue hover:bg-gray border border-gray-200 hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false" aria-controls="accordion-arrow-icon-body-3">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2">Accordion with another icon</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p>Check out the <a href="https://flowbite.com/figma/" class="hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-4" class="rounded" data-accordion="open"intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-4" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white rtl:text-left focus:text-blue hover:bg-gray border border-gray-200 hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-4" aria-expanded="false" aria-controls="accordion-arrow-icon-body-4">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2">Accordion with another icon</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-4" class="hidden" aria-labelledby="accordion-arrow-icon-heading-4">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p>Check out the <a href="https://flowbite.com/figma/" class="hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-5" class="rounded" data-accordion="open"intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-5" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white rtl:text-left focus:text-blue hover:bg-gray border border-gray-200 hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-5" aria-expanded="false" aria-controls="accordion-arrow-icon-body-5">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2">Accordion with another icon</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-5" class="hidden" aria-labelledby="accordion-arrow-icon-heading-5">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p>Check out the <a href="https://flowbite.com/figma/" class="hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-6" class="rounded" data-accordion="open"intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-6" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white rtl:text-left focus:text-blue  border border-gray-200 hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-6" aria-expanded="false" aria-controls="accordion-arrow-icon-body-6">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2">Accordion with another icon</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-6" class="hidden" aria-labelledby="accordion-arrow-icon-heading-6">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p>Check out the <a href="https://flowbite.com/figma/" class="hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5" intersect="animate-fade animate-ease-out animate-duration-900 animate-delay-300">
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="text-center">
            <a href="{{ '/' }}" class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-6 mr-3 sm:h-9" alt="AcaSync Logo" />
            </a>
            <span class="block text-sm text-center text-gray-500">©2024. All Rights Reserved. Build by Dicky Mulia and Shella Febriana.</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>