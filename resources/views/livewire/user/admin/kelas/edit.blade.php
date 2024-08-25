<div>
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Edit Kelas</h1>
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
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Edit Kelas</span>
                </div>
            </li>
        </ol>
    </section>

    <section id="add-kelas" class="w-full mt-10">
        <div class="max-w-screen-xl p-4 mx-auto bg-white border border-gray-300 rounded-lg shadow">
            <form class="px-4 mt-4" wire:submit='addData' id="form">
                <div class="mb-5">
                    <x-form.input   name="nama_kelas" value="X RPL 1">
                        Nama Kelas
                    </x-form.input>
                    @error('nama_kelas') <small class="text-red-700 mt-1">{{ $message }}</small> @enderror
                </div>
                
                <div class="mb-8">
                    <x-form.select wire:model='selectedWali' name="selectedWali" :selected="$selectedWali" :option="$wali" search>
                        Wali Kelas
                    </x-form.select>
                    @error('selectedWali') <small class="text-red-700 mt-1">{{ $message }}</small> @enderror
                    
                </div>

                <div class="flex justify-end w-full pt-5 border-t-2 border-gray-200">
                    <button type="submit" class="text-white bg-yellow hover:bg-orange focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Ubah Data
                    </button>
                </div>
            </form>
        </div>
    </section>

    <x-footer.user-footer/>
</div>