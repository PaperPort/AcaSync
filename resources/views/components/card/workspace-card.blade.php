@props([
    'title',
    'content',
    'showModal' => '',
    'src'       => '',
    'link'      => '#',
    'link_text' => '',
    'modal'     => false,
    'id'        =>''
])
<div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow mt-3">
    <div class="flex flex-col">
        <div class="flex items-center gap-2">
            @if ($src == '')
            <img class="h-24 mb-3 shadow-lg" src="{{ asset('storage/picture_profiles/default-profile.png') }}" alt="default-photo"/>
            @else
            <img class="h-24 mb-3 shadow-lg" src="{{ asset('storage/' . $src) }}" alt="{{ $title }}"/>
            @endif
            <div class="flex flex-col ml-2">
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $title }}</h5>
                <span class="text-sm text-gray-500">{{ $content }}</span>
            </div>
            
        </div>
        <div class="flex justify-end pt-2 mt-4 border-t-2 border-gray-200 md:mt-6">
            @if ($modal)
            <button wire:click="toggleModal({{ $id }})" class="block text-blue outline outline-blue outline-1 hover:bg-sky hover:text-white hover:outline-none focus:ring-4 focus:outline-none focus:ring-sky font-medium rounded-full text-sm px-5 py-2.5 text-center" type="button">
                Gabung
            </button>
            @else
            <x-header.link href="#" wire:click='enterWorkspace({{ $id }})' style="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-pointer">Masuk</x-header.link>
            @endif
        </div>
    </div>
</div>

@if ($showModal)
<div tabindex="-1" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50">
    <div class="relative w-full max-w-md max-h-full p-4">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                <h3 class="text-xl font-semibold text-gray-900">
                    Kode Masuk Workspace
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" wire:click='toggleModal({{ $id }})'>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" wire:submit='joinWorkspace'>
                    <div>
                        <input type="hidden" wire:model.live='workspace_id' value="{{ $id }}">
                        <x-form.input type="text" wire:model='kode_akses' name="kode_akses">
                            Kode Akses
                        </x-form.input>
                        @error('kode_akses')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Gabung ke Workspace</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endif