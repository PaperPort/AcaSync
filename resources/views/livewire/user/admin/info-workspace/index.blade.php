<div>
    <x-header.dashboard-navigation/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Informasi Workspace</h1>
        <ol class="hidden space-x-1 lg:inline-flex md:items-center md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <x-header.link href="{{ '/id-workspace/dashboard' }}" style="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue">
                    <i class="fa-solid fa-house-chimney w-3 h-3 me-2.5"></i>
                    Home
                </x-header.link>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Info Workspace</span>
                </div>
            </li>
        </ol>
    </section>
    <section id="profile-workspace" class="mt-10">
        <div class="grid w-full lg:grid-cols-3 lg:gap-x-4 lg:gap-y-3 font-default">
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:my-0 lg:content-center">
                <div class="relative lg:flex lg:flex-col lg:items-center">
                    <img class="rounded w-36 h-36" id="profileImage" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
                </div>
                <div class="px-5 mb-5">
                    <p class="text-xs text-gray-500">Workspace ID</p>
                    <div class="flex mb-5 bg-transparent">
                        <input type="text" value="0987654321" class="w-full p-2 text-gray-800 bg-transparent border-none" id="copy-text" readonly>
                        <button class="relative p-2 rounded btn text-blue" data-clipboard-target="#copy-text">
                            <i class="fa-solid fa-clipboard"></i>
                            <span id="tooltip" class="absolute hidden p-2 text-white transform -translate-x-1/2 bg-gray-500 rounded tooltip -top-10 left-1/2">
                                Copied!
                            </span>
                        </button>
                    </div>
                    
                    <x-header.link href="{{ route('info-workspace', ['view' => 'edit']) }}" style="text-white bg-blue hover:bg-sky focus:ring-4 focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        <i class="fa-solid fa-pen"></i>
                        <span class="ml-2">Ubah Profil</span>
                    </x-header.link>
                </div>
            </div>
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:col-span-2 lg:my-0">
                <h5 class="mb-5 text-lg font-bold leading-none tracking-tight text-gray-900 font-heading">Informasi Umum</h5>
                <form class="w-full py-5 mx-auto border-t-2 border-gray-200 lg:grid lg:grid-cols-2 lg:gap-4 font-default">
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input wire:model='nama_workspace' type="text" name="nama_workspace" :readonly='true'>
                            Nama Workspace
                        </x-form.input>
                    </div>
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input wire:model='alamat' type="text" name="alamat" :readonly='true'>
                            Alamat
                        </x-form.input>
                    </div>

                    {{-- contoh option select --}}
                    @php
                        $option = [
                            '1' => 'A',
                            '2' => 'B',
                            '3' => 'C',
                            '4' => 'D',
                        ];
                    @endphp
                    <div class="mb-5">
                        <x-form.select wire:model='provinsi' :readonly='true' name="provinsi" :option="$option">
                            Provinsi
                        </x-form.select>
                    </div>
                    <div class="mb-5">
                        <x-form.select wire:model='kabupaten' :readonly='true' name="kabupaten" :option="$option">
                            Kabupaten
                        </x-form.select>
                    </div>
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input wire:model='email' type="email" name="email" :readonly='true'>
                            Email
                        </x-form.input>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <x-footer.user-footer/>
</div>
