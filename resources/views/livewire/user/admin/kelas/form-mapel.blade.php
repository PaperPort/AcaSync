<div>
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">
            @if ($view == 'add-mapel')
            Tambah 
            @elseif ($view == 'edit-mapel')
            Ubah
            @endif
             Mata Pelajaran
        </h1>
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
            <li class="inline-flex items-center">
                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <x-header.link href="{{ route('kelas-workspace', ['workspace_id' => $shortID, 'view'=> 'detail' ]) }}" style="text-sm font-medium text-gray-500 ms-1 md:ms-2 hover:text-blue">Detail</x-header.link>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Tambah Mata Pelajaran</span>
                </div>
            </li>
        </ol>
    </section>

    <section id="edit-kelas" class="w-full mt-10">
        <div class="max-w-screen-xl p-4 mx-auto bg-white border border-gray-300 rounded-lg shadow">
            @if ($view == 'add-mapel')
            <form class="px-4 mt-4" wire:submit='addMapel'>
            @elseif ($view == 'edit-mapel')
            <form class="px-4 mt-4" wire:submit='editMapel'>
            @endif
                <input type="hidden" name="kelasWorkspaceID" wire:model='kelasWorkspaceID'>
                <div class="mb-8">
                    <x-form.select wire:model='selectedMapel' name="selectedMapel" :option="$mapel" search>
                        Nama Mata Pelajaran
                    </x-form.select>
                    @error('selectedMapel') <small class="text-red-700 mt-1">{{ $message }}</small> @enderror
                </div>
                <div class="mb-8">
                    <x-form.select wire:model='selectedGuruMapel' name="selectedGuruMapel" :selected="$selectedGuruMapel" :option="$guruMapel" search>
                        Guru Mata Pelajaran
                    </x-form.select>
                    @error('selectedGuruMapel') <small class="text-red-700 mt-1">{{ $message }}</small> @enderror
                </div>

                <div class="flex justify-end w-full pt-5 border-t-2 border-gray-200">
                    @if ($view == 'add-mapel')
                    <button type="submit" class="text-white bg-blue hover:bg-sky focus:ring-4 focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Tambah Data
                    </button>
                    @elseif ($view == 'edit-mapel')
                    <button type="submit" class="text-white bg-yellow hover:bg-orange focus:ring-4 focus:ring-yellow font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Ubah Data
                    </button>
                    @endif
                    
                </div>
            </form>
        </div>
    </section>

    <x-footer.user-footer/>
</div>