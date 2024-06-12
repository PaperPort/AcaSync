<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <x-header.link href="{{ '/personal-landing' }}" style="flex items-center lg:ms-10">
                    <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
                </x-header.link>
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
                                <x-header.link href="{{ '/personal-profile' }}" style="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Pengaturan Profil</x-header.link>
                            </li>
                            <li>
                                <x-header.link href="{{ '/logout' }}" style="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Keluar</x-header.link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <x-header.sidebar-link :active="request()->routeIs('dashboard-workspace')" href="{{'/id-workspace/dashboard'}}">
                    <x-slot:icon>fa-solid fa-house-chimney</x-slot:icon>
                    Dashboard
                </x-header.sidebar-link>
            </li>
            <li>
                <x-header.sidebar-link :active="request()->routeIs('info-workspace')" href="{{'/id-workspace/info-profile'}}">
                    <x-slot:icon>fa-solid fa-circle-info</x-slot:icon>
                    Info Workspace
                </x-header.sidebar-link>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 hover:text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-solid fa-users-gear flex-shrink-0 w-5 h-5  transition duration-75"></i>
                    <span class="flex-1 ms-5 text-left rtl:text-right whitespace-nowrap">Anggota Workspace</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <x-header.link :active="request()->routeIs('role-workspace')" href="{{'/id-workspace/role'}}" style="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-gray-900">
                            Pengaturan Role
                        </x-header.link>
                    </li>
                    <li>
                        <x-header.link :active="request()->routeIs('anggota-workspace')" href="{{'/id-workspace/anggota'}}" style="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-gray-900">
                            Pengaturan Anggota
                        </x-header.link>
                    </li>
                </ul>
            </li>
            
            <li>
                <x-header.sidebar-link :active="request()->routeIs('kelas-workspace')" href="{{'/id-workspace/kelas'}}">
                    <x-slot:icon>fa-solid fa-chalkboard-user</x-slot:icon>
                    Kelas
                </x-header.sidebar-link>
            </li>

            <li>
                <x-header.sidebar-link :active="request()->routeIs('mapel-workspace')" href="{{'id-workspace/mata-pelajaran'}}">
                    <x-slot:icon>fa-solid fa-book-bookmark</x-slot:icon>
                    Mata Pelajaran
                </x-header.sidebar-link>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 lg:ml-64">
    <div class="mt-14">