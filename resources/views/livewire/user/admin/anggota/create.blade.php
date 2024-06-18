<div>
    <x-header.dashboard-navigation/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Tambah Anggota</h1>
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
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Tambah</span>
                </div>
            </li>
        </ol>
    </section>

    <section id="add-anggota" class="w-full mt-10">
        <ul class="text-sm font-medium text-center text-gray-500 rounded-lg flex" data-tabs-toggle="#add-anggota-content" role="tablist" id="add-anggota" data-tabs-active-classes="text-white bg-blue hover:text-sky hover:bg-white hover:border-none" data-tabs-inactive-classes="bg-white border border-6 border-gray-200">
            <li class="w-full focus-within:z-10">
                <a href="#" class="inline-block w-full p-4 hover:text-blue hover:bg-gray-50 font-heading" id="email-tab" data-tabs-target="#email" aria-selected="true" role="tab">Via Email</a>
            </li>
            <li class="w-full focus-within:z-10">
                <a href="#" class="inline-block w-full p-4 hover:text-blue hover:bg-gray-50 font-heading" id="link-tab" data-tabs-target="#link" aria-selected="false" role="tab">Via Link</a>
            </li>
        </ul>

        <div id="add-anggota-content" class="font-default">
            <div class="hidden p-4 rounded-lg" id="email" role="tabpanel" aria-labelledby="email-tab">
                <form>
                    <div class="mb-5">
                        <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <div class="mt-1">
                            <textarea id="tags" rows="3" class="shadow-sm focus:ring-blue focus:border-blue block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Enter email and press Enter" wire:model='email' name="email"></textarea>
                        </div>
                        <div id="tag-textarea" class="mt-2 flex flex-wrap"></div>
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

                    <div class="mb-5">
                        <x-form.select wire:model='role' name="role" :option="$option">
                            Role
                        </x-form.select>
                    </div>
                    
                    <div class="mb-5">
                        <button type="submit" class="text-white bg-blue hover:bg-sky focus:ring-4 focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full">
                            Tambah 
                        </button>
                    </div>
                </form>
            </div>
            <div class="hidden p-4 rounded-lg" id="link" role="tabpanel" aria-labelledby="link-tab">
                    <div class="mb-5">
                        <x-form.select wire:model='role' name="role" :option="$option">
                            Role
                        </x-form.select>
                    </div>

                    <div class="mb-5 grid grid-cols-8 gap-2 w-full">
                        <div class="col-span-7">
                            <x-form.input wire:model='kode_akses' name="kode_akses" :readonly='true' id="copy-button">
                                Kode Akses
                            </x-form.input>
                        </div>
                        <div>
                            <button data-copy-to-clipboard-target="copy-button" class="font-default text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm w-full p-2.5 text-center items-center inline-flex justify-center mt-7">
                                <span id="default-message">
                                    <i class="fa-regular fa-copy w-3 h-3 text-whit"></i>
                                </span>
                                <span id="success-message" class="hidden inline-flex items-center">
                                    <svg class="w-3 h-3 text-whit" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="mb-5 grid grid-cols-8 gap-2 w-full">
                        <div class="col-span-7">
                            <x-form.input wire:model='link_akses' name="link_akses" :readonly='true' id="copy-button">
                                Link Akses
                            </x-form.input>
                        </div>
                        <div>
                            <button data-copy-to-clipboard-target="copy-button" class="font-default text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm w-full p-2.5 text-center items-center inline-flex justify-center mt-7">
                                <span id="default-message">
                                    <i class="fa-regular fa-copy w-3 h-3 text-whit"></i>
                                </span>
                                <span id="success-message" class="hidden inline-flex items-center">
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