<nav class="fixed top-0 z-20 w-full bg-white md:bg-stone-100 font-heading start-0">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <x-header.link style="flex items-center space-x-3 rtl:space-x-reverse" href="{{ '/' }}">
            <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-8" alt="AcaSync Logo" />
        </x-header.link>
        <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <x-header.link style="px-4 py-2 text-sm font-medium text-center text-white rounded-lg hover:text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue-300" href="{{ '/login' }}">
                Masuk
            </x-header.link>
            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col p-4 mt-4 font-medium bg-white border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-stone-100">
                <li>
                    <a href="#home" class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue">Beranda</a>
                </li>
                <li>
                    <a href="#about" class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue">Tentang Kami</a>
                </li>
                <li>
                    <a href="#faq" class="block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>