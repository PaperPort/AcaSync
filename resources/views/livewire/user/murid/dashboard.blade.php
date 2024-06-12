<div>
    <x-header.user-navigation/>

    <section class="flex justify-end pr-3 pt-5" aria-label="Breadcrumb" id="breadcumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center" aria-current="page">
                <x-header.link href="{{'/id-workspace/dashboard'}}" style="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Home
                </x-header.link>
            </li>
        </ol>
    </section>

    <section class="bg-blue mt-5" id="banner">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1 class="px-4 mb-2 text-lg font-extrabold font-heading tracking-tight leading-none text-white">Academic University</h1>
            <p class="px-4 text-sm font-default font-light text-white">ID : 0987612390812012</p>
        </div>
    </section>

    <!-- tampilan role murid -->
    <section id="card-class" class="mx-auto max-w-screen-xl my-5">
        <h6 class="text-gray-500 font-default font-normal mb-5">Mata Pelajaran :</h6>
        <div class="grid lg:grid-cols-3 gap-5">
            <div class="px-5 py-8 w-full border bg-yellow border-gray-200 rounded-lg shadow hover:bg-orange">
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col ml-2">
                            <h5 class="mb-1 text-xl font-medium text-white">Matematika</h5>
                            <span class="text-sm text-white">Bapak Anton S. Pd</span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-4 md:mt-6">
                        <x-header.link href="{{'/id-workspace/id-kelasmapel/'}}" style="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border-0 border-white rounded-lg hover:bg-white hover:text-yellow first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</x-header.link>
                    </div>
                </div>
            </div>
            <div class="px-5 py-8 w-full border bg-sky border-gray-200 rounded-lg shadow hover:bg-blue">
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col ml-2">
                            <h5 class="mb-1 text-xl font-medium text-white">Bahasa Indonesia</h5>
                            <span class="text-sm text-white">Bu Anisa S. Pd</span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-4 md:mt-6">
                        <x-header.link href="{{'/id-workspace/id-kelasmapel/'}}" style="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border-0 border-white rounded-lg hover:bg-white hover:text-sky first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</x-header.link>
                    </div>
                </div>
            </div>
            <div class="px-5 py-8 w-full border bg-blue border-gray-200 rounded-lg shadow hover:bg-sky">
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col ml-2">
                            <h5 class="mb-1 text-xl font-medium text-white">Bahasa Inggris</h5>
                            <span class="text-sm text-white">Bu Gilda Lestari S. Pd</span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-4 md:mt-6">
                        <a href="{{'/id-workspace/id-kelasmapel/'}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border-0 border-white rounded-lg hover:bg-white hover:text-blue first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="px-5 py-8 w-full border bg-orange border-gray-200 rounded-lg shadow hover:bg-yellow">
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col ml-2">
                            <h5 class="mb-1 text-xl font-medium text-white">Pendidikan Kewarganegaraan</h5>
                            <span class="text-sm text-white">Pak Gaman Waskita S. Pd</span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-4 md:mt-6">
                        <a href="{{'/id-workspace/id-kelasmapel/'}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border-0 border-white rounded-lg hover:bg-white hover:text-orange first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="px-5 py-8 w-full border bg-blue border-gray-200 rounded-lg shadow hover:bg-sky">
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col ml-2">
                            <h5 class="mb-1 text-xl font-medium text-white">Pendidikan Jasmani</h5>
                            <span class="text-sm text-white">Pak Galih Sirait S. Pd</span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-4 md:mt-6">
                        <a href="{{'/id-workspace/id-kelasmapel/'}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border-0 border-white rounded-lg hover:bg-white hover:text-blue first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="px-5 py-8 w-full border bg-amber border-gray-200 rounded-lg shadow hover:bg-yellow">
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <div class="flex flex-col ml-2">
                            <h5 class="mb-1 text-xl font-medium text-white">Seni dan Prakarya</h5>
                            <span class="text-sm text-white">Pak Jaya Sitorus S. Pd</span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-4 md:mt-6">
                        <a href="{{'/id-workspace/id-kelasmapel/'}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border-0 border-white rounded-lg hover:bg-white hover:text-amber first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer.user-footer/>
</div>
