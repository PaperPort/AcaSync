@if (flash()->message)
    @switch(flash()->class)
        @case('success')
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 animate-fade animate-delay-[3000ms] animate-ease-in animate-reverse" role="alert">
            <span class="font-medium">{{ flash()->message }} </span>
        </div>
            @break
        @case('error')
        <div class="p-4 mb-4 text-sm text-gray-800 rounded-lg bg-gray-50 animate-fade animate-delay-[3000ms] animate-ease-in animate-reverse" role="alert">
            <span class="font-medium">{{ flash()->message }} </span>
        </div>
            @break
        @default
            
    @endswitch
@endif