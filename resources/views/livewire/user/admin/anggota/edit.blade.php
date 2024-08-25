<div>
    @php
        // dd($editRole);
    @endphp
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
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
                <x-header.link href="{{ route('anggota-workspace',  ['workspace_id' => $shortID]) }}" style="text-sm font-medium text-gray-500 ms-1 md:ms-2 hover:text-blue">Pengaturan Anggota</x-header.link>
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
        
        <x-alerts.alerts></x-alerts.alerts>
        <div class="max-w-screen-xl p-4 mx-auto bg-white border border-gray-300 rounded-lg shadow">
            <form class="px-4 mt-4" wire:submit='updateData'>
                <div class="lg:grid lg:grid-cols-2 lg:gap-4 font-default">
                    <input type="hidden" name="user_id" wire:model='user_id'>
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input id="editNama" wire:model='editNama' type="text" name="editNama" :readonly='true'>
                            Nama
                        </x-form.input>
                        @error('editNama') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.input id="editEmail" wire:model='editEmail' type="text" name="editEmail" :readonly='true'>
                            E-mail
                        </x-form.input>
                        @error('editEmail') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    @if ($is_active == null)
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                    @else
                    <div class="mb-5">
                    @endif
                        <x-form.select wire:model='editRole' name="role" :option="$role" :selected="$editRole">
                            Role
                        </x-form.select>
                        @error('editRole') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    @if ($is_active != null)
                    <div class="mb-5">
                        <x-form.select wire:model='is_active' name="active" :option="$active" :selected="$is_active">
                            Status Anggota
                        </x-form.select>
                        @error('is_active') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    @endif
                    @if ($kaitAkun)
                    <div class="mb-5 lg:col-start-1 lg:col-end-3">
                        <x-form.select id="selectedKait" wire:model='selectedKait' type="text" name="selectedKait" :option='$kaitAkun' search :selected="$selectedKait">
                            @if ($editRole == '5') Akun Orang Tua @elseif ($editRole == '4')  Akun Peserta Didik @endif
                        </x-form.select>
                        @error('orangtua_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    @endif
                </div>
                <div class="flex justify-end w-full pt-5 border-t-2 border-gray-200">
                    <button type="submit" class="text-white bg-yellow hover:bg-orange focus:ring-4 focus:ring-yellow font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Ubah Data
                    </button>
                </div>
            </form>
        </div>
    </section>
    <x-footer.user-footer/>
</div>