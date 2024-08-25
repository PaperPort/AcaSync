@props([
    'workspace_id'
])

<nav class="bg-white border-b border-gray-200 px-4 py-2.5 fixed left-0 right-0 top-0 z-50 w-full">
    <div class="flex flex-wrap items-center justify-between">
        <div class="flex items-center justify-start">
            <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 "
            >
                <svg
                aria-hidden="true"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                ></path>
                </svg>
                <svg
                aria-hidden="true"
                class="hidden w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <x-header.link href="{{ '/personal-landing' }}" style="flex items-center justify-between mr-4">
                <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
            </x-header.link>
        </div>
        <div class="flex items-center lg:order-2">
            <button type="button" class="flex mx-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false"
            data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden w-56 my-4 text-base list-none bg-white divide-y divide-gray-100 shadow rounded-xl" id="dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm font-semibold text-gray-900">Neil Sims</span>
                    <span class="block text-sm text-gray-900 truncate">name@acasync.com</span>
                </div>
                <ul class="py-1 text-gray-700"aria-labelledby="dropdown">
                    <li>
                        <x-header.link href="{{ '/personal-profile' }}" style="block px-4 py-2 text-sm hover:bg-gray-100">Pengaturan Profil</x-header.link>
                    </li>
                    <li>
                        <x-header.link href="{{ route('logout') }}" style="block px-4 py-2 text-sm hover:bg-gray-100">Keluar</x-header.link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<aside class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 pt-14 md:translate-x-0" aria-label="Sidenav" id="drawer-navigation">
    <div class="h-full px-3 py-5 overflow-y-auto bg-white ">
        <ul class="space-y-2">
            <li>
                <x-header.sidebar-link :active="request()->routeIs('dashboard-workspace')" href="{{route('dashboard-workspace', ['workspace_id' => $workspace_id ])}}">
                    <x-slot:icon>fa-solid fa-house-chimney</x-slot:icon>
                    Dashboard
                </x-header.sidebar-link>
            </li>
            <li>
                <x-header.sidebar-link :active="request()->routeIs('info-workspace')" href="{{ route('info-workspace', ['workspace_id' => $workspace_id ]) }}">
                    <x-slot:icon>fa-solid fa-circle-info</x-slot:icon>
                    Info Workspace
                </x-header.sidebar-link>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-anggota" data-collapse-toggle="dropdown-anggota">
                    <i class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 fa-solid fa-users-gear group-hover:text-gray-900"></i>
                    <span class="flex-1 ml-4 text-left whitespace-nowrap">Anggota Workspace</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-anggota" class="hidden py-2 space-y-2">
                    <li>
                        <x-header.link :active="request()->routeIs('role-workspace')" href="{{'/id-workspace/role'}}" class="flex items-center w-full p-2 text-base font-medium text-white transition duration-75 rounded-lg pl-11 group hover:bg-sky bg-blue" style="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                            Pengaturan Role
                        </x-header.link>
                    </li>
                    <li>
                        <x-header.link :active="request()->routeIs('anggota-workspace')" href="{{ route('anggota-workspace', ['workspace_id' => $workspace_id ]) }}" class="flex items-center w-full p-2 text-base font-medium text-white transition duration-75 rounded-lg pl-11 group hover:bg-sky bg-blue" style="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"> 
                            Pengaturan Anggota
                        </x-header.link> 
                    </li>
                </ul>
            </li>
            <li>
                <x-header.sidebar-link :active="request()->routeIs('mapel-workspace')" href="{{'/id-workspace/mata-pelajaran'}}">
                    <x-slot:icon>fa-solid fa-book-bookmark</x-slot:icon>
                    Mata Pelajaran
                </x-header.sidebar-link>
            </li>
            <li>
                <x-header.sidebar-link :active="request()->routeIs('kelas-workspace')" href="{{ route('kelas-workspace', ['workspace_id' => $workspace_id ]) }}">
                    <x-slot:icon>fa-solid fa-chalkboard-user</x-slot:icon>
                    Kelas
                </x-header.sidebar-link>
            </li>
        </ul>
    </div>
</aside>

<div class="h-auto p-4 pt-20 md:ml-64">
    <div class="grid mb-4">
