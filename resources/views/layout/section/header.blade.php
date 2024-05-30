<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul') - AcaSync</title>
    <link rel="shortcut icon" href="{{ URL::to('/') }}/img/icon-acasync.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-white"intersect="animate-fade animate-ease-out animate-duration-900 animate-delay-300">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <!-- buat if kalau masuk kategori personal page dan role user adalah murid, tambahin hidden di logo side bar nya -->
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="hidden inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="{{ '/personal-landing' }}" class="flex items-center lg:ms-10">
                        <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="user-dropdown">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900" role="none">
                                Bonnie Green
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                name@acasync.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                            <a href="{{ '/personal-profile' }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Pengaturan Profil</a>
                            </li>
                            <li>
                            <a href="{{ '/login' }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Keluar</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- buat if kalau masuk kategori personal page dan role user adalah murid, tambahin hidden di class nya -->
    <aside id="logo-sidebar" class="hidden fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{'/id-workspace/dashboard'}}" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 group hover:text-gray-900">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{'/id-workspace/info-profile'}}" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 group hover:text-gray-900">
                    <i class="fa-solid fa-info w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-center"></i>
                    <span class="ms-3">Info Workspace</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 hover:text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-solid fa-users-gear flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Anggota Workspace</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{'/id-workspace/role'}}" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-gray-900">Pengaturan Role</a>
                    </li>
                    <li>
                        <a href="{{'/id-workspace/anggota'}}" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-gray-900">Pengaturan Anggota</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="{{'/id-workspace/kelas'}}" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 group hover:text-gray-900">
                    <i class="fa-solid fa-chalkboard-user w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-center"></i>
                    <span class="ms-3">Kelas</span>
                </a>
            </li>

            <li>
                <a href="{{'/id-workspace/mata-pelajaran'}}" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 group hover:text-gray-900">
                    <i class="fa-solid fa-book-bookmark w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-center"></i>
                    <span class="ms-3">Mata Pelajaran</span>
                </a>
            </li>
        </ul>
    </div>
    </aside>

    <!-- buat if kalau masuk kategori personal page dan role user adalah murid lg:ml-64 nya tidak ada -->
    <div class="p-4">
        <div class="mt-14">
            
