@props([
    'title',
    'message' => true,
    'color'
]);

@php
    switch ($color) {
        case 'red':
            $bg     = 'red-500';
            $hover  = 'red-500';
            break;
        case 'yellow' :
            $bg     = 'yellow';
            $hover  = 'yellow';
            break;
        default:
            $bg     = 'blue';
            $hover  = 'sky';
            break;
    }
@endphp

<button type="button" class="inline-flex items-center px-4 py-3 text-sm font-semibold text-white border border-transparent rounded-lg bg-{{ $bg }} gap-x-2 hover:bg-{{ $hover }} disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
    {{ $slot }}
</button>
  
  <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
      <div class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl ">
        <div class="flex items-center justify-between px-4 py-3 border-b ">
          <h3 class="font-bold text-gray-800">
            {{ $title }}
          </h3>
          <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
            @if ($message)
                <p class="text-gray-800">
                    {{ $message }}
                </p>
            @endif
            
          
        </div>
        <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2">
          <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-vertically-centered-modal">
            Close
          </button>
          <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white border border-transparent rounded-lg bg-{{ $bg }} gap-x-2 hover:bg-{{ $hover }} disabled:opacity-50 disabled:pointer-events-none">
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div>