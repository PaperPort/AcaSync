@props([
    'name',
    'readonly'  => false,
    'option'    => [],
    'selected'  => [],
    'search'    => false,
    'tags'      => false,
    'placeholder' => 'Pilih Opsi',
    'searchPlaceholder' => 'Search...',
    'multiple'  => false
])

@php
    $class = ($readonly ?? false)
        ? 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5'
        : 'bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5';

        $dataHsSelect = [
        'placeholder' => $placeholder,
        'toggleTag' => '<button type="button"></button>',
        'toggleClasses' => 'hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue focus:ring-blue-500 before:absolute before:inset-0 before:z-[1]',
        'dropdownClasses' => 'mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300',
        'optionClasses' => 'py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100',
        'optionTemplate' => '<div class="flex items-center"><div class="size-8 me-2" data-icon></div><div><div class="text-sm font-semibold text-gray-800" data-title></div><div class="text-xs text-gray-500" data-description></div></div><div class="ms-auto"><span class="hidden hs-selected:block"><svg class="flex-shrink-0 text-blue-600 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg></span></div></div>',
        'extraMarkup' => '<div class="absolute -translate-y-1/2 top-1/2 end-3"><svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg></div>'
    ];

    if ($search) {
        $dataHsSelect = array_merge($dataHsSelect, [
            'hasSearch' => true,
            'searchPlaceholder' => $searchPlaceholder,
            'searchClasses' => 'block w-full text-sm border-gray-200 rounded-lg focus:border-blue focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 py-2 px-3',
            'searchWrapperClasses' => 'bg-white p-2 -mx-1 sticky top-0 dark:bg-neutral-900',
        ]);
    }

    if ($tags) {
        $dataHsSelect = array_merge($dataHsSelect, [
            'mode' => 'tags',
            'wrapperClasses' => 'relative ps-0.5 pe-9 min-h-[46px] flex items-center flex-wrap text-nowrap w-full border border-gray-200 rounded-lg text-start text-sm focus:border-blue focus:ring-blue',
            'tagsItemTemplate' => '<div class="relative z-10 flex items-center p-1 m-1 bg-white border border-gray-200 rounded-full flex-nowrap"><div class="size-6 me-1" data-icon></div><div class="pl-2 text-gray-800 whitespace-nowrap" data-title></div><div class="inline-flex items-center justify-center flex-shrink-0 text-sm text-gray-800 bg-gray-200 rounded-full size-5 ms-2 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400" data-remove><svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg></div></div>',
            'tagsInputClasses' => 'py-3 px-2 rounded-lg order-1 text-sm outline-none dark:bg-neutral-900 dark:placeholder-neutral-500',
        ]);
    }

    $dataHsSelectJson = json_encode($dataHsSelect);
@endphp


<label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900">
    {{ $slot }}
</label>
<select 
    {{ $attributes->merge([ 'id' => $name , 'name' => $name,  'class' => $class, 'multiple'=> $multiple]) }} 
    @if ($readonly) disabled @endif 
    required
    @if($search || $tags)
        x-data
        x-init="() => { 
        try { 
                new HSSelect($el, {{ $dataHsSelectJson }}) 
            } catch (e) { 
                console.error(e); 
            } 
    }"
        data-hs-select="{{ $dataHsSelectJson }}"
    @endif
>
    <option selected>Pilih Opsi</option>
    @foreach ($option as $value => $label)
        <option value="{{ $value }}" @if($value == $selected) selected @endif>{{ $label }}</option>
    @endforeach
</select>