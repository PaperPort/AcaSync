@props([
    'active' => false,
    'style' => '',
    'role' => ''
])

@php
    $classess = ($active ?? false)
                ? $style
                : '';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $style, 'role' => $role]) }}>{{ $slot }}</a>