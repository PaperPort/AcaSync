@props([
    'user'
])
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <x-header.link href="{{ '/personal-landing' }}" style="flex items-center">
                    <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
                </x-header.link>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button" class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            @if ($user->profile)
                            <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . $user->profile) }}" alt="{{ $user->name .' photo' }}">
                            @else
                            <img class="w-8 h-8 rounded-full" src="{{ asset('storage/picture_profiles/default-profile.png') }}" alt="default photo">
                            @endif
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="user-dropdown">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900" role="none">
                                {{ $user->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                {{ $user->email }}
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

<div class="p-4">
    <div class="mt-14">