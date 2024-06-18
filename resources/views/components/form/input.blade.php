@props([
    'type',
    'name',
    'readonly' => false,
    'value' => ''
])

@php
    $class = ($readonly ?? false)
            ? 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5'
            : 'bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5';
@endphp

<label {{ $attributes->merge(['for' => $name]) }} class="block mb-2 text-sm font-medium text-gray-900">
    {{ $slot }}
</label>
<input {{ $attributes->merge(['type' => $type,  'id' => $name , 'name' => $name,  'class' => $class, 'value' => $value, 'placeholder' => $slot]) }} @if ($readonly) readonly @endif required />