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
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ '/personal-landing' }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg" id="user-dropdown">
                    <div class="px-4 py-3">
                    <span class="block text-sm text-blue">Bonnie Green</span>
                    <span class="block text-sm  text-gray-500 truncate">name@acasync.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ '/login' }}" class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-300">Keluar</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="{{ '/personal-landing' }}" class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:p-0 md:hover:text-blue" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ '/personal-profile' }}" class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:p-0 md:hover:text-blue" aria-current="page">Pengaturan Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
