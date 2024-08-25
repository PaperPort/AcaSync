<div>
    <x-header.user-navigation :user="$user"/>

    <section class="bg-blue" id="banner">
        <div class="flex flex-col max-w-screen-xl px-4 pt-32 pb-20 mx-auto">
            <h1 class="px-4 mb-2 text-2xl font-extrabold leading-none tracking-tight text-white font-heading">Gabung Workspace</h1>
        </div>
    </section>

    <x-alerts.toast/>
    <section id="search-workspace" class="max-w-screen-xl px-4 mx-auto">
        <div class="flex justify-center w-full p-4 mt-3 border border-gray-300 rounded-lg shadow bg-gray-50 lg:-mt-8 md:flex-none md:justify-normal">
            
            <form class="flex items-center w-full" wire:submit='searchWorkspace'>   
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <i class="w-4 h-4 text-gray-500 fa-solid fa-people-roof"></i>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky focus:border-sky block w-full ps-10 p-2.5  " placeholder="Cari workspace yang ingin diikuti..." required wire:model.live='search'/>
                </div>
                <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue rounded-lg border border-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

        </div>
    </section>

    <section id="card-workspace" class="max-w-screen-xl px-4 mx-auto my-5">
        @if (!empty($workspace))
            <h6 class="mb-5 font-light text-gray-500 font-default">Workspace Terkait :</h6>
            @foreach ($workspace as $data)
                <x-card.workspace-card title="{{ $data['user']['name'] }}" content="{{ $data['provinsi'] }}" src="{{ $data['user']['profile'] }}" :modal="true" id="{{ $data['id'] }}" showModal="{{ $showModal }}"></x-card.workspace-card>
            @endforeach
        @else
            <x-card.blank-card>Tidak ada yang dicari.</x-card.blank-card>
        @endif
        
    </section>
    
    <x-footer.user-footer></x-footer.user-footer>
</div>
