@props([
    'active' => false,
    'class' => '',
    'style' => '',
    'role' => ''
])

@php
    $classess = ($active ?? false)
                ? $class
                : $style;
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classess,  'role' => $role]) }}>{{ $slot }}</a>