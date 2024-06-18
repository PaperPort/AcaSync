<div>
    <x-header.dashboard-navigation/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Pengaturan Anggota</h1>
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
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Pengaturan Anggota</span>
                </div>
            </li>
        </ol>
    </section>

    <section class="w-full mt-10">
        <div class="max-w-screen-xl mx-auto">
            <!-- Start coding here -->
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
                        <x-header.link href=" {{ route('anggota-workspace', ['view' => 'create']) }} " style="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue hover:bg-sky focus:ring-4 focus:ring-blue focus:outline-none">
                            <i class="mr-2 fa-solid fa-user-plus"></i>
                            Tambah Anggota
                        </x-header.link>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow">
                            <h6 class="mb-3 text-sm font-medium text-gray-900">Pilih Role</h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                <li class="flex items-center">
                                    <input id="role" type="checkbox" value="admin" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                    <label for="role" class="ml-2 text-sm font-medium text-gray-900">Admin (1)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="role" type="checkbox" value="guru" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                    <label for="role" class="ml-2 text-sm font-medium text-gray-900">Guru (1)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="role" type="checkbox" value="murid" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                    <label for="role" class="ml-2 text-sm font-medium text-gray-900">Murid (1)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="role" type="checkbox" value="orang-tua" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                    <label for="role" class="ml-2 text-sm font-medium text-gray-900">Orang Tua (1)</label>
                                </li>
                            </ul>
                        </div>
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
                                <th scope="col" class="px-4 py-3">Nama</th>
                                <th scope="col" class="px-4 py-3">Role</th>
                                <th scope="col" class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">1</th>
                                <td class="px-4 py-3">Luffy</td>
                                <td class="px-4 py-3">
                                    <span class="bg-blue text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">Admin</span>
                                </td>
                                <td class="flex flex-col md:flex-row">
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'detail']) }}" style="text-sky hover:text-white border border-sky hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'edit']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'delete']) }}" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="fa-solid fa-trash"></i></x-header.link>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">2</th>
                                <td class="px-4 py-3">Zoro</td>
                                <td class="px-4 py-3">
                                    <span class="bg-orange text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">Guru - Mata Pelajaran</span>
                                </td>
                                <td class="flex flex-col md:flex-row">
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'detail']) }}" style="text-sky hover:text-white border border-sky hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'edit']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'delete']) }}" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="fa-solid fa-trash"></i></x-header.link>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">3</th>
                                <td class="px-4 py-3">Nami</td>
                                <td class="px-4 py-3">
                                    <span class="bg-yellow text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">Wali Kelas</span>
                                </td>
                                <td class="flex flex-col md:flex-row">
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'detail']) }}" style="text-sky hover:text-white border border-sky hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'edit']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'delete']) }}" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="fa-solid fa-trash"></i></x-header.link>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">4</th>
                                <td class="px-4 py-3">Usopp</td>
                                <td class="px-4 py-3">
                                    <span class="bg-sky text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">Murid</span>
                                </td>
                                <td class="flex flex-col md:flex-row">
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'detail']) }}" style="text-sky hover:text-white border border-sky hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'edit']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'delete']) }}" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="fa-solid fa-trash"></i></x-header.link>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">5</th>
                                <td class="px-4 py-3">Sanji</td>
                                <td class="px-4 py-3">
                                    <span class="bg-amber text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded">Orang Tua</span>
                                </td>
                                <td class="flex flex-col md:flex-row">
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'detail']) }}" style="text-sky hover:text-white border border-sky hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'edit']) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </x-header.link>
                                    <x-header.link href="{{ route('anggota-workspace', ['view' => 'delete']) }}" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="fa-solid fa-trash"></i></x-header.link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500">
                        Showing
                        <span class="font-semibold text-gray-900">1-10</span>
                        of
                        <span class="font-semibold text-gray-900">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight border text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">100</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <x-footer.user-footer/>
</div>
