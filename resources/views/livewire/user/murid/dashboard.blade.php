<div>
    <x-header.user-navigation :user="$user"/>

    <section class="flex justify-end pr-3 pt-5" aria-label="Breadcrumb" id="breadcumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center" aria-current="page">
                <x-header.link href="{{ route('dashboard-user', ['workspace_id' => $workspace_id,'user_id'=> $userShort])}}" style="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Home
                </x-header.link>
            </li>
        </ol>
    </section>

    <section class="bg-blue mt-5" id="banner">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1 class="px-4 mb-2 text-lg font-extrabold font-heading tracking-tight leading-none text-white">{{ $workspace->user->name }}</h1>
            <p class="px-4 text-sm font-default font-light text-white">ID : {{ $workspace_id }}</p>
        </div>
    </section>

    <!-- tampilan role murid -->
    <section id="card-class" class="mx-auto max-w-screen-xl my-5">
        <h6 class="text-gray-500 font-default font-normal mb-5">Mata Pelajaran :</h6>
        <div class="grid lg:grid-cols-3 gap-5">
            @if ($mapel)
            @foreach ($mapel as $data)
            @php
                $kelas_id = $data['kelas_workspace']['detail_kelas']['kode_kelas'] . $data['mapel_workspace']['detail_mapel']['id'];
            @endphp
                <x-card.class-card title="{{ $data['mapel_workspace']['detail_mapel']['nama'] }}" content="{{ $data['guru_mapel']['user']['name'] }}" link="{{ route('timeline-kelas-mapel', ['workspace_id'=> $workspace_id, 'user_id'=> $userShort, 'kelas_id'=> $kelas_id ]) }}"></x-card.class-card>
            @endforeach
        @else
            <x-card.blank-card>Tidak ada yang diikuti. Hubungi admin workspace untuk menangani ini lebih lanjut.</x-card.blank-card>
        @endif
        </div>
    </section>

    <x-footer.user-footer/>
</div>
