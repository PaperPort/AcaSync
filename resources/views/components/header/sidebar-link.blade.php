@props([
    'active' => false,
    'icon'
])

@php
    $classess = ($active ?? false)
                ? 'flex items-center p-2 text-white bg-blue rounded-lg hover:bg-sky group'
                : 'flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 group hover:text-gray-900';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classess]) }}>
    <i {{ $attributes->merge(['class' => $icon]) }} class="w-5 h-5 transition duration-75 text-center"></i>
    <span class="ms-5">{{ $slot }}</span>
</a>