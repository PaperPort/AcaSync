@props([
    'id',
    'workspace_id',
    'action_id',
    'nameFilter',
    'route',
    'columns',
    'data',
    'count',
    'optionFilter',
    'add'           => true,
    'add_icon'      => ' fa-solid fa-plus',
    'count'         => true,
    'filter'        => false,
    'actionButton'  => ['detail','edit','delete']
])

<div class="overflow-hidden">
    <div class="flex flex-col items-center justify-between p-4 space-y-3 lg:flex-row lg:space-y-0 lg:space-x-4">
        <div class="w-full lg:w-1/2">
            <div class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" wire:model.live="search" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
            @if ($add)
            <x-header.link href=" {{ route($route, ['view' => 'create', 'workspace_id' => $workspace_id]) }} " style="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue hover:bg-sky focus:ring-4 focus:ring-blue focus:outline-none">
                <i class="mr-2 {{ $add_icon }}"></i>
                Tambah 
            </x-header.link>
            @endif

            @if ($filter)
            <select name="filter" wire:model.live='filter' id="filter" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                <option value="">
                    Filter {{ $nameFilter }}
                </option>
                @foreach ($optionFilter as $value => $label)
                    <option value="{{ $value}}">{{ $label }}</option>
                @endforeach
            </select>
            @endif

            @if ($count)
            <select name="paginate" wire:model.live='paginate' class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
                <option value="{{ $count }}">All Data</option>
                <option value="10">10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            @endif
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3">No</th>
                    @foreach ($columns as $column => $atribute)
                    <th scope="col" class="px-4 py-3">{{ $column }}</th>
                    @endforeach
                    <th scope="col" class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr class="border-b">
                    <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ $no++ }}</th>
                    @foreach ($columns as $column)
                    <td class="px-4 py-3">{{ data_get($row, $column) }}</td>
                    @endforeach
                    <td class="flex flex-col md:flex-row">
                        @foreach ($actionButton as $action)
                        @switch($action)
                            @case('detail')
                            <x-header.link href="{{ route($route, ['view' => 'detail', 'workspace_id'=> $workspace_id, 'id'=> $row->$action_id]) }}" style="text-sky hover:text-white border border-sky hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 flex items-center text-center me-2 my-2">
                                <i class="fa-solid fa-circle-info"></i>
                            </x-header.link>
                            @break
                            @case('edit')
                            <x-header.link href="{{ route($route, ['view' => 'edit', 'workspace_id'=> $workspace_id, 'id'=> $row->$action_id]) }}" style="text-yellow hover:text-white border border-yellow hover:bg-yellow focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 flex items-center text-center me-2 my-2">
                                <i class="fa-solid fa-pencil"></i>
                            </x-header.link>
                            @break
                            @case('arsip')
                            <x-header.link href="{{ route($route, ['view' => 'arsip', 'workspace_id'=> $workspace_id, 'id'=> $row->$action_id]) }}" style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 flex items-center text-center me-2 my-2"><span class="material-symbols-outlined">archive</span></x-header.link>
                            @break
                            @case('delete')
                            <x-header.link style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 flex items-center text-center me-2 my-2" wire:click='deleteData({{ $row->$action_id }})' wire:confirm="Apakah sudah yakin akan dihapus?">
                                <i class="fa-solid fa-trash"></i>
                            </x-header.link>
                            @break
                            @case('active')
                            <x-header.link style="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 flex items-center text-center me-2 my-2" wire:click='activeData({{ $row->$action_id }})' wire:confirm="Apakah sudah yakin akan dinonaktifkan">
                                <i class="fa-solid fa-xmark"></i>
                            </x-header.link>
                            @break
                        @endswitch
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col justify-between p-4 space-y-3" aria-label="Table navigation">
    {{ $data->links() }}
    </div>
</div>