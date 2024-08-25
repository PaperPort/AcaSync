<div>
    <x-header.user-navigation :user="$user"/>
    <section class="bg-blue" id="banner">
        <div class="flex flex-col max-w-screen-xl px-4 pt-20 pb-20 mx-auto">
            <h1 class="px-4 mb-2 text-lg font-extrabold leading-none tracking-tight text-white font-heading">Hai, {{ $user->name }}</h1>
            <p class="px-4 text-sm font-light text-white font-default">Apa yang akan kamu lakukan hari ini?</p>
        </div>
    </section>
    
    <section id="add-workspace" class="max-w-screen-xl px-4 mx-auto">
        <div class="flex justify-center w-full p-4 mt-3 border border-gray-300 rounded-lg shadow bg-gray-50 lg:-mt-8 md:flex-none md:justify-normal">
            <x-header.link href="{{' /join-workspace '}}" style="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue rounded-lg text-center">
                <i class="fa-solid fa-plus"></i>
                <span class="ml-2">Gabung Workspace</span>
            </x-header.link>
        </div>
    </section>

    <section id="card-workspace" class="max-w-screen-xl px-4 mx-auto my-5 ">
        @if ($user_workspace)
            @foreach ($user_workspace as $data)
            @php
                $shortID = substr($data['workspace']['user']['user_id'], 0,8);
            @endphp
                <x-card.workspace-card title="{{ $data['workspace']['user']['name'] }}" content="{{ $data['workspace']['provinsi'] }}" src="{{ $data['workspace']['user']['profile'] }}" link="{{ route('dashboard-user', ['workspace_id'=> $shortID, 'user_id'=> $userShort ]) }}" id="{{ $data['workspace_id'] }}"></x-card.workspace-card>
            @endforeach
        @else
            <x-card.blank-card>Tidak ada yang diikuti</x-card.blank-card>
        @endif
    </section>


    <x-footer.user-footer/>
</div>
