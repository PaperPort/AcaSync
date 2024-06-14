<div>
    <x-header.welcome-navigation/>

    <section class="bg-white md:bg-stone-100" id="home">
        <div class="grid h-screen max-w-screen-xl gap-8 px-4 py-8 mx-auto lg:py-16 lg:grid-cols-2 lg:gap-16">
            <div class="flex flex-col justify-center">
                <h1 class="mb-4 text-2xl font-extrabold leading-none text-gray-900 font-heading md:text-3xl lg:text-5xl"><span class="text-sky">Akademik Sinkron</span> <br>Capai Pembelajaran Interaktif</h1>
                <p class="mb-8 text-sm font-normal text-gray-500 font-default lg:text-xl">Mekanisme evaluasi pemantauan akademik siswa yang transparan untuk semua pihak menciptakan pembelajaran jarak jauh menjadi baik </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                    <x-header.link style="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg font-heading bg-blue hover:bg-blue-800 focus:ring-4 focus:ring-blue" href="{{ '/register-workspace' }}">
                        Buat Workspace
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </x-header.link>
                    <x-header.link style="px-5 py-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:ms-4 focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100" href="{{ '/register-account' }}">
                        Belum Punya Akun?
                    </x-header.link>
                </div>
            </div>
            <div>
                <img class="hidden lg:block" src="{{ URL::to('/') }}/img/intro.gif" title="Intro">
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 py-8 mx-auto mb-5 lg:py-24 lg:px-6" id="about">
        <div class="px-10 text-center" intersect="animate-fade-up animate-ease-out animate-duration-[900ms] animate-delay-300">
            <h2 class="text-3xl font-extrabold font-heading text-gray-90"><span class="text-sky">Inovasi</span> Membuat Kami Unik</h2>
            <p class="mt-2 font-light font-default">Di workspace ini, Kami tidak hanya memfasilitasi fitur pembelajaran yang melibatkan pengajar dan peserta didik saja namun juga <br>dapat memantau proses perkembangan selama pembelajaran berlangsung.</p>
        </div>
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-24">
            <div class="col-span-2 space-y-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:space-y-0">
                <div class="mb-4 lg:mb-0" intersect="animate-fade-right animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/setup.png" alt="Manajemen Kelas dan Mata Pelajaran yang Efisien" class="mb-2 w-72 lg:size-60">
                    <h4 class="mb-2 text-2xl font-bold font-heading">Manajemen Kelas dan Mata Pelajaran yang Efisien</h4>
                    <p class="font-light text-justify text-gray-500 font-default ">Kami menyediakan platform yang memudahkan admin dalam melakukan setup kelas dan mata pelajaran sebelum semester baru dimulai. Admin dapat mengundang dan mengelola akses guru ke berbagai kelas dan mata pelajaran. Fitur ini memungkinkan penugasan guru sesuai dengan keahlian mereka, memastikan pengajaran yang terorganisir dan terstruktur dengan baik</p>
                </div>
                <div class="mb-4 lg:mb-0" intersect="animate-fade-left animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/rpp.png" alt="Rencana Pelaksanaan Pembelajaran (RPP) Terintegrasi" class="mb-2 w-72 lg:size-60">
                    <h4 class="mb-2 text-2xl font-bold font-heading">Rencana Pelaksanaan Pembelajaran (RPP) Terintegrasi</h4>
                    <p class="font-light text-justify text-gray-500 font-default ">Distribusi RPP termasuk elemen pembelajaran, capaian pembelajaran, tujuan, dan bab materi dan tugas yang diunggah dan dijadwalkan sesuai kebutuhan seragam di beberapa kelas meningkatkan efisiensi dan konsistensi dalam pengajaran.</p>
                </div>
                <div class="mb-4 lg:mb-0" intersect="animate-fade-right animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/notifikasi.png" alt="Notifikasi dan Pengingat Tugas Otomatis" class="mb-2 w-72 lg:size-60">
                    <h4 class="mb-2 text-2xl font-bold font-heading">Notifikasi dan Pengingat Tugas Otomatis</h4>
                    <p class="font-light text-justify text-gray-500 font-default ">Tugas yang dinilai akan memicu notifikasi pengingat bagi peserta didik dan orang tua jika belum dikerjakan. Fitur ini membantu orang tua dalam memantau dan mengingatkan anak-anak mereka, serta memastikan peserta didik tetap berada di jalur yang benar dalam proses pembelajaran</p>
                </div>
                <div class="mb-4 lg:mb-0" intersect="animate-fade-left animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <img src="{{ URL::to('/') }}/img/integration.png" alt="Pemantauan dan Evaluasi Pembelajaran yang Komprehensif" class="mb-2 size-60">
                    <h4 class="mb-2 text-2xl font-bold font-heading">Pemantauan dan Evaluasi Pembelajaran yang Komprehensif</h4>
                    <p class="font-light text-justify text-gray-500 font-default ">Fitur pemantauan dalam AcaSync memungkinkan guru dan wali kelas untuk melacak perkembangan peserta didik, termasuk nilai akhir dan capaian pembelajaran. Sistem juga menyediakan opsi pengajuan materi tingkat lanjut berdasarkan capaian peserta didik. Laporan grafik capaian pembelajaran di akhir semester membantu admin dan guru mengevaluasi efektivitas kurikulum dan metode pengajaran, mendukung perbaikan berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 py-8 mx-auto mb-5 lg:py-24 lg:px-6 bg-blue" id="faq">
        <div class="px-10 text-center" intersect="animate-fade-down animate-ease-out animate-duration-[900ms] animate-delay-300">
            <h2 class="text-3xl font-bold text-white font-heading text-gray-90">Pertanyaan yang Sering Diajukan</h2>
        </div>
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto  lg:gap-2 lg:px-24">
                <div id="accordion-arrow-icon" class="rounded mb-2" data-accordion="open" intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-1" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white border border-gray-200 rtl:text-left focus:text-blue hover:bg-gray hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="false" aria-controls="accordion-arrow-icon-body-1">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2 text-left">Apa itu AcaSync?</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-1" class="hidden" aria-labelledby="accordion-arrow-icon-heading-1">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2 text-justify">AcaSync adalah platform manajemen pembelajaran yang menyediakan fitur pemantauan akademik siswa secara komprehensif. Aplikasi ini membantu admin, guru, siswa, dan orang tua dalam mengelola dan memantau proses belajar-mengajar serta capaian akademik.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-2" class="rounded mb-2" data-accordion="open" intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-2" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white border border-gray-200 rtl:text-left focus:text-blue hover:bg-gray hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false" aria-controls="accordion-arrow-icon-body-2">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2 text-left">Bagaimana cara admin melakukan setup awal semester di AcaSync?</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-2" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2 text-justify">Admin perlu menginput semua kelas dan mata pelajaran yang akan dipelajari dalam instansi pendidikan. Setelah itu, admin mengundang guru, memberikan hak akses sesuai dengan kelas dan mata pelajaran yang diajar atau diwali oleh guru tersebut. Pastikan admin sudah membuat workspace terlebih dahulu di website AcaSync.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-3" class="rounded mb-2" data-accordion="open"intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-3" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white border border-gray-200 rtl:text-left focus:text-blue hover:bg-gray hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false" aria-controls="accordion-arrow-icon-body-3">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2 text-left">Bagaimana cara peserta didik melakukan pendaftaran di AcaSync?</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2 text-justify">Peserta didik melakukan administrasi daftar ulang secara luring. Setelah berkas diperiksa dan disetujui oleh admin, ada dua alternatif yang dilakukan. Pertama, admin akan menginput email murid dan orang tua ke dalam workspace sekolah untuk pemetaan kelas. Kedua, peserta didik dapat langsung mendaftar akun pada website AcaSync kemudian gabung ke workspace sekolah dengan kode akses yang diberikan kepada admin selanjutnya admin akan melakukan pengaitan akun peserta didik dan orang tua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion-arrow-icon-4" class="rounded mb-2" data-accordion="open"intersect="animate-flip-down animate-ease-out animate-duration-[900ms] animate-delay-300">
                    <div>
                        <h2 id="accordion-arrow-icon-heading-4" class="text-white focus:text-blue">
                            <button type="button" class="flex items-center w-full p-5 font-medium text-white border border-gray-200 rtl:text-left focus:text-blue hover:bg-gray hover:bg-gray-300 hover:text-blue" data-accordion-target="#accordion-arrow-icon-body-4" aria-expanded="false" aria-controls="accordion-arrow-icon-body-4">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="ml-2 text-left">Bagaimana orang tua dapat memantau aktivitas belajar anak mereka?</span>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-4" class="hidden" aria-labelledby="accordion-arrow-icon-heading-4">
                            <div class="p-5 bg-gray-100 border border-gray-200">
                            <p class="mb-2 text-justify">Orang tua akan mendapatkan notifikasi pengingat tugas yang belum dikerjakan oleh siswa dan dapat memonitor setiap aktivitas pembelajaran melalui aplikasi AcaSync. Mereka juga dapat melihat nilai tugas dan perkembangan akademik anak mereka.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <x-footer.footer/>
</div>
