@props([
    'active' => false,
    'icon'
])

@php
    $classess = ($active ?? false)
                ? 'flex items-center p-2 text-base font-medium text-white rounded-lg bg-blue hover:bg-sky transition duration-75 group'
                : 'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 transition duration-75 group';
    $icons  = ($active ?? false) 
                ? $icon . ' text-white'
                : $icon . ' text-gray-500 group-hover:text-gray-900';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classess]) }}>
    <i {{ $attributes->merge(['class' => $icons]) }}></i>
    <span class="ml-4">{{ $slot }}</span>
</a>