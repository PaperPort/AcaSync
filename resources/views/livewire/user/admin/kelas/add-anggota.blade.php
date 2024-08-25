<div>
    <x-header.dashboard-navigation  workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">
            Tambah Anggota Kelas
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
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Tambah Anggota</span>
                </div>
            </li>
        </ol>
    </section>

    <section id="add-anggota" class="w-full mt-10"  x-data="{ currentTab: 'email' }" @keydown.enter.prevent="handleEnter">
        <ul class="flex text-sm font-medium text-center text-gray-500 rounded-lg" data-tabs-toggle="#add-anggota-content" role="tablist" id="add-anggota" data-tabs-active-classes="text-white bg-blue hover:text-sky hover:bg-white hover:border-none" data-tabs-inactive-classes="bg-white border border-6 border-gray-200">
            <li class="w-full focus-within:z-10">
                <a href="#" class="inline-block w-full p-4 hover:text-blue hover:bg-gray-50 font-heading" id="email-tab" data-tabs-target="#email" aria-selected="true"  @click.prevent="currentTab = 'email'; $dispatch('tab-change', 'email')" :class="{ 'text-white bg-blue': currentTab === 'email' }" role="tab">Via User Terdaftar</a>
            </li>
            <li class="w-full focus-within:z-10">
                <a href="#" class="inline-block w-full p-4 hover:text-blue hover:bg-gray-50 font-heading" id="link-tab" data-tabs-target="#link" @click.prevent="currentTab = 'link'; $dispatch('tab-change', 'link')" :class="{ 'text-white bg-blue': currentTab === 'link' }" aria-selected="false" role="tab">Via Link</a>
            </li>
        </ul>
        <x-alerts.alerts></x-alerts.alerts>
        <div id="add-anggota-content" wire:loading.remove class="font-default">
            <div class="hidden p-4 rounded-lg" x-show="currentTab === 'email'" wire:key="email" wire:ignore.self id="email" role="tabpanel" aria-labelledby="email-tab">
                <form wire:submit='addAnggota'>
                    <input type="hidden" name="workspace_id" wire:model='workspace_id' value="{{ $workspace_id }}">
                    <div class="mb-5">
                        <x-form.select wire:model='selectedMurid' name="selectedMurid" :selected="$selectedMurid" :option="$murid" search multiple tags>
                            Peserta Didik
                        </x-form.select>
                        @error('selectedMurid') <small class="text-red-700 mt-1">{{ $message }}</small> @enderror
                    </div>
                    
                    <div class="mb-5">
                        <button type="submit" class="text-white bg-blue hover:bg-sky focus:ring-4 focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full">
                            Tambah 
                        </button>
                    </div>
                </form>
            </div>
            <div class="hidden p-4 rounded-lg" x-show="currentTab === 'link'" wire:key="link" wire:ignore.self id="link" role="tabpanel" aria-labelledby="link-tab">
                    <div class="grid w-full grid-cols-8 gap-2 mb-5">
                        <div class="col-span-7">
                            <x-form.input name="kode_akses" :readonly='true' id="copy-button" value='{{ $kode_akses }}'>
                                Kode Akses
                            </x-form.input>
                        </div>
                        <div>
                            <button data-copy-to-clipboard-target="copy-button" class="font-default text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm w-full p-2.5 text-center items-center inline-flex justify-center mt-7">
                                <span id="default-message">
                                    <i class="w-3 h-3 fa-regular fa-copy text-whit"></i>
                                </span>
                                <span id="success-message" class="inline-flex items-center hidden">
                                    <svg class="w-3 h-3 text-whit" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="grid w-full grid-cols-8 gap-2 mb-5">
                        <div class="col-span-7">
                            <x-form.input name="link_akses" wire:model='link_akses' :readonly='true' id="copy-button">
                                Link Akses
                            </x-form.input>
                        </div>
                        <div>
                            <button data-copy-to-clipboard-target="copy-button" class="font-default text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm w-full p-2.5 text-center items-center inline-flex justify-center mt-7">
                                <span id="default-message">
                                    <i class="w-3 h-3 fa-regular fa-copy text-whit"></i>
                                </span>
                                <span id="success-message" class="inline-flex items-center hidden">
                                    <svg class="w-3 h-3 text-whit" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <x-footer.user-footer/>
</div>