<div>
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Edit Informasi Workspace</h1>
        <ol class="hidden space-x-1 lg:inline-flex md:items-center md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <x-header.link href="{{ '/id-workspace/dashboard' }}" style="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue">
                    <i class="fa-solid fa-house-chimney w-3 h-3 me-2.5"></i>
                    Home
                </x-header.link>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <x-header.link href="{{ route('info-workspace',  ['workspace_id' => $shortID]) }}" style="text-sm font-medium text-gray-500 ms-1 md:ms-2 hover:text-blue">
                        Info Workspace
                    </x-header.link>
                </div>
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
    <section id="profile-workspace" class="mt-10">
        <x-alerts.alerts></x-alerts.alerts>
        <div class="grid w-full lg:grid-cols-3 lg:gap-x-4 lg:gap-y-3 font-default">
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:my-0 lg:content-center">
            <form wire:submit='editInfo'>
                <div class="relative lg:flex lg:flex-col lg:items-center">
                    <div class="relative">
                        @if ($profile)
                            <img src="{{ $profile->temporaryUrl() }}" alt="New Profile Picture" class="object-cover w-32 h-32 rounded-full">
                        @else
                        <img src="{{ asset('storage/' . $profileUrl) }}" alt="Profile Picture" class="object-cover w-32 h-32 rounded-full">
                        @endif
                        <label for="profile_picture" class="absolute bottom-0 right-0 p-2 text-white rounded-full cursor-pointer bg-yellow hover:bg-orange">
                            <i class="p-2 fas fa-pencil-alt"></i>
                        </label>
                        <input type="file" id="profile_picture" wire:model="profile" accept="image/*" class="hidden">
                    </div>
                </div>
                <div class="mb-5">
                    <div class="grid grid-cols-3 gap-2 mb-5 bg-transparent">
                        <div class="col-span-2">
                            <x-form.input type="text" name="workspace_id" :readonly='true' value="{{ $shortID }}" id="copy-button">
                                Workspace ID
                            </x-form.input>
                        </div>
                        <div data-copy-to-clipboard-target="copy-button" class="font-default text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm p-2.5 text-center items-center inline-flex justify-center mt-7">
                            <span id="default-message">
                                <i class="w-3 h-3 text-white fa-regular fa-copy"></i>
                            </span>
                            <span id="success-message" class="inline-flex items-center hidden">
                                <svg class="w-3 h-3 text-whit" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-yellow hover:bg-orange focus:ring-4 focus:ring-yellow font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Simpan Data
                    </button>
                </div>
            </div>
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:col-span-2 lg:my-0">
                <h5 class="mb-5 text-lg font-bold leading-none tracking-tight text-gray-900 font-heading">Informasi Umum</h5>
                <div class="w-full py-5 mx-auto border-t-2 border-gray-200 lg:grid lg:grid-cols-2 lg:gap-4 font-default">
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input id="nama_workspace" wire:model='nama_workspace' type="text" name="nama_workspace">
                            Nama Workspace
                        </x-form.input>
                        @error('nama_workspace')
                        <small class="mt-1 text-red-700">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input wire:model='alamat' id="alamat" type="text" name="alamat">
                            Alamat
                        </x-form.input>
                        @error('alamat')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-form.select 
                            wire:model.live='selectedProvinsi' 
                            name="provinsi" 
                            :option="$provinsi" 
                            :selected="$selectedProvinsi" 
                            search>
                            Provinsi
                        </x-form.select>
                        @error('selectedProvinsi')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-form.select wire:model.live='selectedKabupaten' id="kabupaten" name="kabupaten" :option="$kabupaten" :selected="$selectedKabupaten" wire:key="kabupaten-select-{{ $selectedProvinsi }}" search>
                            Kabupaten
                        </x-form.select>
                        @error('selectedKabupaten')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input wire:model='email' type="email" name="email" id="email">
                            Email
                        </x-form.input>
                        @error('email')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-form.input wire:model='password' type="text" name="password" id="password" :required='false'>
                            Password Baru
                        </x-form.input>
                        @error('password')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-form.input wire:model='password_confirmation' type="password" id="password_confirmation" name="password_confirmation" :required='false'>
                            Konfirmasi Password Baru
                        </x-form.input>
                        @error('password_confirmation')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer.user-footer/>
</div>
