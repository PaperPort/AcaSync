<div>
    @php
        // dd($is_active);
    @endphp
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Detail Anggota</h1>
        <ol class="hidden space-x-1 lg:inline-flex md:items-center md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <x-header.link href="{{ '/id-workspace/dashboard' }}" style="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue">
                    <i class="fa-solid fa-house-chimney w-3 h-3 me-2.5"></i>
                    Home
                </x-header.link>
            </li>
            <li class="inline-flex items-center">
                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Anggota Workspace</span>
            </li>
            <li class="inline-flex items-center">
                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <x-header.link href="{{ route('anggota-workspace', ['workspace_id' => $shortID]) }}" style="text-sm font-medium text-gray-500 ms-1 md:ms-2 hover:text-blue">Pengaturan Anggota</x-header.link>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Detail</span>
                </div>
            </li>
        </ol>
    </section>

    <section id="detail-anggota" class="w-full mt-10">
        <div class="grid w-full lg:grid-cols-3 lg:gap-x-4 lg:gap-y-3 font-default">
            <div class="p-4 my-3 bg-white border border-gray-300 flex flex-col items-center rounded-lg shadow lg:my-0 lg:justify-center">
                <div class="relative lg:flex lg:flex-col lg:items-center">
                    <img class="rounded w-36 h-36" id="profileImage" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
                </div>
                <div class="mb-5 w-full">
                    <h6 class="w-full flex justify-center font-heading font-bold">{{ $editNama }}</h6>
                    <p class="text-gray-700 font-light flex justify-center text-sm mb-5">{{ $namaRole }}</p>
                    @if ($is_active != null)
                    <div class="border-t-2 border-gray-200 grid grid-cols-2 p-4">
                        <div>
                            <h6 class="font-heading">Nomor Induk</h6>
                        </div>
                        <div class="flex justify-end">
                            <p class="text-gray-700 font-light text-sm">{{ $nomorInduk }}</p>
                        </div>
                    </div>
                    <div class="border-y-2 border-gray-200 grid grid-cols-2 p-4 text-sm">
                        <div>
                            <h6 class="font-heading">Status Anggota</h6>
                        </div>
                        <div class="flex justify-end">
                            <p class="text-gray-700 font-light text-sm">
                                @if ($is_active == 0)
                                    Nonaktif
                                @else
                                    Aktif
                                @endif
                            </p>
                        </div>
                    </div>
                    @endif
                </div>
                
            </div>
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:col-span-2 lg:my-0">
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500" data-tabs-toggle="#detail-anggota-content" role="tablist" id="detail-anggota" data-tabs-active-classes="text-white bg-blue hover:bg-sky" data-tabs-inactive-classes="hover:text-gray-900 hover:bg-gray-100">
                    <li class="me-2">
                        <button href="#" class="inline-block px-4 py-3 rounded-lg " id="aktivitas-tab" data-tabs-target="#aktivitas" aria-selected="true" role="tab">Aktivitas</button>
                    </li>
                    <li class="me-2">
                        <button href="#"  class="inline-block px-4 py-3 rounded-lg" id="raport-tab" data-tabs-target="#raport" aria-selected="false" role="tab">Raport</button>
                    </li>
                </ul>

                <div id="detail-anggota-content" class="font-default">
                    <div class="hidden p-4 rounded-lg mt-2" id="aktivitas" role="tabpanel" aria-labelledby="aktivitas-tab">
                        
                        <ol class="relative border-s border-gray-200">
                            <li class="font-heading mb-10 ms-6">
                                <span class="absolute flex items-center justify-center bg-blue text-white rounded-full -start-3 ring-8 ring-white p-2 text-xs mb-1 ">
                                    5 Jul 2024
                                </span>
                                <span class="flex items-center mb-1 h-5 text-md font-semibold text-gray-900"></span>
                            </li>
                            <li class="mb-10 ms-6">            
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-white rounded-full -start-3 ring-8 ring-white">
                                    <span class="material-symbols-outlined text-blue">
                                        book_5
                                    </span>
                                </span>
                                <h5 class="flex items-center mb-1 text-md font-semibold text-gray-900">Mempelajari materi pada kelas Simulasi Digital X RPL 2.</h5>
                                <ul class="list-disc mb-4 ml-5 text-sm font-normal text-gray-500">
                                    <li>Materi Microsoft Word.</li>
                                    <li>Materi Microsoft Excel.</li>
                                </ul>
                            </li>
                            <li class="mb-10 ms-6">            
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-white rounded-full -start-3 ring-8 ring-white">
                                    <span class="material-symbols-outlined">
                                        checklist
                                    </span>
                                </span>
                                <h5 class="flex items-center mb-1 text-md font-semibold text-gray-900">Mengerjakan tugas pada Kelas Pemrograman Dasar X RPL 2</h5>
                                <ul class="list-disc mb-4 ml-5 text-sm font-normal text-gray-500">
                                    <li>Tugas Individu - Konsep Algoritma.</li>
                                    <li>Tugas Individu - Algoritma Percabangan.</li>
                                </ul>
                            </li>

                            <li class="font-heading mb-10 ms-6">
                                <span class="absolute flex items-center justify-center bg-blue text-white rounded-full -start-3 ring-8 ring-white p-2 text-xs mb-1 ">
                                    5 Jul 2024
                                </span>
                                <span class="flex items-center mb-1 h-5 text-md font-semibold text-gray-900"></span>
                            </li>
                            <li class="mb-10 ms-6">            
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-white rounded-full -start-3 ring-8 ring-white">
                                    <span class="material-symbols-outlined text-blue">
                                        book_5
                                    </span>
                                </span>
                                <h5 class="flex items-center mb-1 text-md font-semibold text-gray-900">Mempelajari materi pada kelas Simulasi Digital X RPL 2.</h5>
                                <ul class="list-disc mb-4 ml-5 text-sm font-normal text-gray-500">
                                    <li>Materi Microsoft Word.</li>
                                    <li>Materi Microsoft Excel.</li>
                                </ul>
                            </li>
                            <li class="mb-10 ms-6">            
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-white rounded-full -start-3 ring-8 ring-white">
                                    <span class="material-symbols-outlined">
                                        checklist
                                    </span>
                                </span>
                                <h5 class="flex items-center mb-1 text-md font-semibold text-gray-900">Mengerjakan tugas pada Kelas Pemrograman Dasar X RPL 2</h5>
                                <ul class="list-disc mb-4 ml-5 text-sm font-normal text-gray-500">
                                    <li>Tugas Individu - Konsep Algoritma.</li>
                                    <li>Tugas Individu - Algoritma Percabangan.</li>
                                </ul>
                            </li>
                        </ol>


                    </div>
                    <div class="hidden p-4 rounded-lg mt-2" id="raport" role="tabpanel" aria-labelledby="raport-tab">
                        

                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase border-b">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            #
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Mata Pelajaran
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nilai
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Capaian Pembelajaran
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-4">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            Pemrograman Dasar
                                        </td>
                                        <td class="px-6 py-4">
                                            90
                                        </td>
                                        <td class="px-6 py-4">
                                            Lorem ipsum dolor sit amet consectetur. Purus suscipit purus.
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-4">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            Matematika
                                        </td>
                                        <td class="px-6 py-4">
                                            82
                                        </td>
                                        <td class="px-6 py-4">
                                            id elementum turpis ut. Tortor rutrum pellentesque nullam et.
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-4">
                                            3
                                        </th>
                                        <td class="px-6 py-4">
                                            Bahasa Indonesia
                                        </td>
                                        <td class="px-6 py-4">
                                            100
                                        </td>
                                        <td class="px-6 py-4">
                                            nisl accumsan posuere amet. Justo cras sem rhoncus nulla
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-4">
                                            4
                                        </th>
                                        <td class="px-6 py-4">
                                            Bahasa Inggris
                                        </td>
                                        <td class="px-6 py-4">
                                            85
                                        </td>
                                        <td class="px-6 py-4">
                                            orci risus pulvinar tempor sit. Amet nibh dui eu ipsum amet
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="text-xs text-gray-700 uppercase border-b">
                                    <th colspan="2" class="px-6 py-3 text-center">
                                        Rata-rata
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        82.5
                                    </th>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer.user-footer/>
</div>