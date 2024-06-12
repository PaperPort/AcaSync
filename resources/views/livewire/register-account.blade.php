<div>
    <section class="animate-fade-up animate-ease-out animate-duration-[500ms] animate-delay-300">
        <div class="px-4 mx-auto h-screen max-w-screen-xl grid lg:grid-cols-2">
            <div class="px-5 flex flex-col items-center justify-center lg:py-0">
                <div class="w-3/4 rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <x-header.link style="mb-5 flex justify-center" href="{{ '/' }}">
                            <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-10 ml-[-20px]" alt="AcaSync Logo" />
                        </x-header.link>
                        
                        <div class="flex items-center justify-between">
                            <div class="border border-1 bg-gray-500 md:w-20 h-0"></div>
                            <div>
                                <p class="text-sm text-center lg:text-xs font-light text-gray-500">
                                    Sudah memiliki akun? <x-header.link href="{{ '/login' }}" style="font-medium text-blue hover:underline">Masuk disini </x-header.link>
                                </p>
                            </div>
                            <div class="border border-1 bg-gray-500 md:w-20 h-0"></div>
                        </div>
                        <x-alerts.alerts></x-alerts.alerts>
                        <form class="space-y-4 md:space-y-6 font-default" wire:submit='add_user'>
                            <div>
                                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                                <input type="text" wire:model='nama_lengkap' name="nama_lengkap" id="nama_lengkap" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" placeholder="Nama Lengkap" required autocomplete="off">
                                @error('nama_lengkap')
                                    <small class="text-red-700 mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                                <input type="email" wire:model='email' name="email" id="email" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" placeholder="name@gmail.com" required autocomplete="off">
                                @error('email')
                                    <small class="text-red-700 mt-1">{{ $message }}</small>
                                @enderror
                                
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                                <input type="password" wire:model='password' name="password" id="password" placeholder="••••••••" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required autocomplete="off">
                                @error('password')
                                    <small class="text-red-700 mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 ">Konfirmasi Password</label>
                                <input type="password" wire:model='password_confirmation' name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required autocomplete="off">
                                @error('password_confirmation')
                                    <small class="text-red-700 mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="accept" wire:model='accept' aria-describedby="accept" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky" required>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="accept" class="text-gray-500">Saya menyetujui 
                                            <x-header.link href="{{ '/privacy-policy' }}" style="font-medium text-blue hover:underline">Kebijakan Privasi </x-header.link> serta 
                                            <x-header.link href="{{ '/terms-of-use' }}" style="font-medium text-blue hover:underline">Syarat dan Ketentuan </x-header.link> dari AcaSync</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar Akun</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="px-5 flex flex-col items-center justify-center lg:py-0">
                <img class="hidden lg:block" src="{{ URL::to('/') }}/img/fitur.gif" title="Fitur AcaSync">
            </div>
        </div>
    </section>
</div>
