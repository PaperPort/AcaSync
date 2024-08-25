<div>
    <x-header.dashboard-navigation workspace_id="{{ $shortID }}"/>
    <section class="pt-5 pr-3 md:flex md:justify-between" aria-label="Breadcrumb" id="breadcumb">
        <h1 class="text-xl font-heading text-blue">Kelas</h1>
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
                    <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2">Kelas</span>
                </div>
            </li>
        </ol>
    </section>
    
    <section class="w-full mt-5">
        <div class="max-w-screen-xl mx-auto">
            <!-- Start coding here -->
            <x-table.table id="table-kelas" route="kelas-workspace" workspace_id="{{ $shortID }}" :data="$data" :columns="$columns" :count="$count" :actionButton="$actionButton" action_id="id">
                <x-slot:add_icon> fa-solid fa-chalkboard-user</x-slot:add_icon>
            </x-table.table>
        </div>
    </section>

    <x-footer.user-footer/>
</div>
