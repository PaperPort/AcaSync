@props([
    'title',
    'content',
    'link'
])
<div class="flex flex-col bg-white border shadow-sm rounded-xl">
    <div class="p-4 md:p-10">
        <h3 class="text-lg font-bold text-gray-800 font-heading">
            {{ $title }}
        </h3>
        <p class="mt-2 text-gray-500 font-default">
            {{ $content }}
        </p>
        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue decoration-2 hover:text-sky hover:underline focus:underline focus:outline-none focus:text-blue cursor-pointer" href="{{ $link }}">
            Masuk
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </a>
    </div>
</div>