<div>
    <x-header.dashboard-navigation/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Edit Anggota</h1>
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
                <x-header.link href="{{ route('anggota-workspace') }}" style="text-sm font-medium text-gray-500 ms-1 md:ms-2 hover:text-blue">Pengaturan Anggota</x-header.link>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Edit</span>
                </div>
            </li>
        </ol>
    </section>
    <section id="edit-anggota" class="w-full mt-10">
        <div class="max-w-screen-xl mx-auto bg-white border border-gray-300 rounded-lg shadow p-4">
            <form class="px-4 mt-4">
                <div class="mb-5">
                    <x-form.input wire:model='email' type="email" name="email">
                        E-mail
                    </x-form.input>
                </div>

                {{-- Contoh Option --}}
                @php
                    $option = [
                        '0' => 'Pilih',
                        '1' => 'A',
                        '2' => 'B',
                        '3' => 'C',
                        '4' => 'D',
                    ];
                @endphp

                <div class="mb-8">
                    <x-form.select wire:model='role' name="role" :option="$option">
                        Role
                    </x-form.select>
                </div>

                <div class="w-full flex justify-end border-t-2 border-gray-200 pt-5">
                    <button type="submit" class="text-white bg-yellow hover:bg-orange focus:ring-4 focus:ring-yellow font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Ubah Data
                    </button>
                </div>
            </form>
        </div>
    </section>
    <x-footer.user-footer/>
</div>