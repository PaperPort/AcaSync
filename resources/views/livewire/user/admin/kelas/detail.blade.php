<div>
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Detail Kelas</h1>
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
                <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID ]) }}" style="text-sm font-medium text-gray-500 ms-1 md:ms-2 hover:text-blue">Kelas</x-header.link>
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

    <section id="detail-kelas-grid" class="w-full mt-10">
        <div class="grid max-w-screen-xl gap-3 mx-auto lg:grid-cols-3">
            <div class="flex justify-between p-8 bg-white border border-gray-300 rounded-lg shadow">
                <div class="content-start">
                    <p class="text-sm font-light font-default">Nama Kelas</p>
                    <h5 class="text-2xl font-semibold font-heading">X RPL 1</h5>
                </div>
                <div class="content-end">
                    <i class="text-3xl text-gray-300 fa-solid fa-chalkboard-user"></i>
                </div>
            </div>
            <div class="flex justify-between p-8 bg-white border border-gray-300 rounded-lg shadow">
                <div class="content-start">
                    <p class="text-sm font-light font-default">Wali Kelas</p>
                    <h5 class="text-2xl font-semibold font-heading">Shella Febriana</h5>
                </div>
                <div class="content-end">
                    <i class="text-4xl text-gray-300 fa-brands fa-google-scholar"></i>
                </div>
            </div>
            <div class="flex justify-between p-8 bg-white border border-gray-300 rounded-lg shadow">
                <div class="content-start">
                    <p class="text-sm font-light font-default">Jumlah Murid</p>
                    <h5 class="text-2xl font-semibold font-heading">3</h5>
                </div>
                <div class="content-end">
                    <i class="text-3xl text-gray-300 fa-solid fa-people-roof"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 ">
        <ul class="flex text-sm font-medium text-center text-gray-500 rounded-lg" data-tabs-toggle="#tabs-detail-kelas" role="tablist" id="tabs-detail-kelas" data-tabs-active-classes="text-white bg-blue hover:text-sky hover:bg-white hover:border-none" data-tabs-inactive-classes="bg-white border border-6 border-gray-200">
            <li class="w-full focus-within:z-10">
                <a href="#" class="inline-block w-full p-4 hover:text-blue hover:bg-gray-50 font-heading" id="mata-pelajaran-tab" data-tabs-target="#mata-pelajaran" aria-selected="true" role="tab">Mata Pelajaran</a>
            </li>
            <li class="w-full focus-within:z-10">
                <a href="#" class="inline-block w-full p-4 hover:text-blue hover:bg-gray-50 font-heading" id="daftar-murid-tab" data-tabs-target="#daftar-murid" aria-selected="false" role="tab">Daftar Murid</a>
            </li>
        </ul>

        <div id="tabs-detail-kelas"class="font-default">
            <div class="hidden p-4 rounded-lg" id="mata-pelajaran" role="tabpanel" aria-labelledby="mata-pelajaran-tab">
                <div class="overflow-hidden">
                    <div class="flex flex-col items-center justify-between p-4 space-y-3 lg:flex-row lg:space-y-0 lg:space-x-4">
                        <div class="w-full lg:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                            <x-header.link href="{{ route('kelas-workspace', ['workspace_id'=> $shortID, 'view'=> 'add-mapel']) }}" style="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue hover:bg-sky focus:ring-4 focus:ring-blue focus:outline-none">
                                <i class="mr-2 fa-solid fa-plus"></i>
                                Tambah Mata Pelajaran
                            </x-header.link>
                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700" type="button">
                                Count
                                <svg class="w-5 h-5 ml-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                            <div id="actionsDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                                <ul class="py-1 text-sm text-gray-700" aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">10</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">50</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">100</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">No</th>
                                    <th scope="col" class="px-4 py-3">Mata Pelajaran</th>
                                    <th scope="col" class="px-4 py-3">Pengajar</th>
                                    <th scope="col" class="px-4 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">1</th>
                                    <td class="px-4 py-3">Matematika</td>
                                    <td class="px-4 py-3">Luffy</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID, 'view' => 'edit-mapel']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-pencil"></i>
                                        </x-header.link>
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">2</th>
                                    <td class="px-4 py-3">Bahasa Indonesia</td>
                                    <td class="px-4 py-3">Zoro</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID, 'view' => 'edit-mapel']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-pencil"></i>
                                        </x-header.link>
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">3</th>
                                    <td class="px-4 py-3">Bahasa Inggris</td>
                                    <td class="px-4 py-3">Nami</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID, 'view' => 'edit-mapel']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-pencil"></i>
                                        </x-header.link>
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">4</th>
                                    <td class="px-4 py-3">Pendidikan Kewarganegaraan</td>
                                    <td class="px-4 py-3">Sanji</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID, 'view' => 'edit-mapel']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-pencil"></i>
                                        </x-header.link>
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">5</th>
                                    <td class="px-4 py-3">Pendidikan Olahraga</td>
                                    <td class="px-4 py-3">Usopp</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID, 'view' => 'edit-mapel']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-pencil"></i>
                                        </x-header.link>
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

            <div class="hidden p-4 rounded-lg" id="daftar-murid" role="tabpanel" aria-labelledby="daftar-murid-tab">
                <div class="overflow-hidden">
                    <div class="flex flex-col items-center justify-between p-4 space-y-3 lg:flex-row lg:space-y-0 lg:space-x-4">
                        <div class="w-full lg:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                            <x-header.link href="{{ route('kelas-workspace', ['workspace_id'=> $shortID, 'view'=> 'add-anggota']) }}" style="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue hover:bg-sky focus:ring-4 focus:ring-blue focus:outline-none">
                                <i class="mr-2 fa-solid fa-user-plus"></i>
                                Tambah Anggota
                            </x-header.link>
                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700" type="button">
                                Count
                                <svg class="w-5 h-5 ml-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                            <div id="actionsDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                                <ul class="py-1 text-sm text-gray-700" aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">10</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">50</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">100</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">No</th>
                                    <th scope="col" class="px-4 py-3">NIS</th>
                                    <th scope="col" class="px-4 py-3">Nama</th>
                                    <th scope="col" class="px-4 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">1</th>
                                    <td class="px-4 py-3">01234</td>
                                    <td class="px-4 py-3">Luffy</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">2</th>
                                    <td class="px-4 py-3">56789</td>
                                    <td class="px-4 py-3">Zoro</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">3</th>
                                    <td class="px-4 py-3">10111</td>
                                    <td class="px-4 py-3">Nami</td>
                                    <td class="flex flex-col md:flex-row">
                                        <x-header.link href="" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue flex items-center font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 my-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </x-header.link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <x-footer.user-footer/>
</div>