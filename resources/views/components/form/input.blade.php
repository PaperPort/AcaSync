@props([
    'type' => 'text',
    'name',
    'readonly' => false,
    'value' => '',
    'id' => '',
    'required'  => true
])

@php
    $class = ($readonly ?? false)
            ? 'bg-white border border-gray-200 text-gray-500 text-sm rounded-lg block w-full p-2.5 pointer-events-none'
            : 'bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5';
@endphp

<label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900">
    {{ $slot }}
</label>
<input {{ $attributes->merge(['type' => $type,  'id' => $id , 'name' => $name,  'class' => $class, 'value' => $value, 'placeholder' => $slot]) }} @if ($readonly) readonly @endif @if ($required)
    required
@endif />