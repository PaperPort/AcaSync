        <footer class="p-5" intersect="animate-fade animate-ease-out animate-duration-900 animate-delay-300">
            <hr class="border-gray-200 sm:mx-auto dark:border-gray-700 my-8">
            <div class="md:flex md:justify-center text-center md:gap-8">
                <div>
                    <x-header.link href="{{ '/' }}" style="flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-6 mr-3 sm:h-9" alt="AcaSync Logo" />
                    </x-header.link>
                </div>
                <div class="md:flex md:flex-row md:items-center justify-center gap-5 mt-3">
                    <x-header.link href="{{ '/' }}" class="block text-sm text-center text-gray-500 hover:underline hover:text-blue">Beranda</x-header.link>
                    <x-header.link href="{{ '/privacy-policy' }}" class="block text-sm text-center text-gray-500 hover:underline hover:text-blue">Kebijakan Privasi</x-header.link>
                    <x-header.link href="{{ '/terms-of-use' }}" class="block text-sm text-center text-gray-500 hover:underline hover:text-blue">Syarat dan Penggunaan</x-header.link>
                </div>
            </div>
            <div class="md:flex text-xs text-center text-gray-500 md:gap-1 md:items-center md:justify-center mt-4">©2024. All Rights Reserved. Build by <a href="https://github.com/dickymuliafiqri" class="hover:underline"> Dicky Mulia</a> and <a href="https://github.com/shellafebriana/" class="hover:underline"> Shella Febriana</a>.</div>
        </footer>
    </div>
</div>