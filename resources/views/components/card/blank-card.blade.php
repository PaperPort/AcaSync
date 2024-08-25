@props([
    'class' => ''
])
<section id="blank" {{ $attributes->merge(['class' => $class]) }} class="max-w-screen-xl px-4 mx-auto my-5">
    <div class="flex flex-col items-center justify-center p-4 md:p-6 lg:p-12">
        <i class="mb-2 text-5xl text-gray-300 fa-solid fa-mountain-sun"></i>
        <p class="text-center text-gray-500">{{ $slot }}</p>
    </div>
</section>