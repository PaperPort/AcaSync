<div>
    <section class="animate-fade-up animate-ease-out animate-duration-[500ms] animate-delay-300">
        <div class="px-4 mx-auto h-screen max-w-screen-sm grid">
            <div class="flex flex-col items-center justify-center lg:py-0">
                <div class="w-full rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <x-header.link style="mb-5 flex justify-center" href="{{ '/' }}">
                            <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-10 ml-[-20px]" alt="AcaSync Logo" />
                        </x-header.link>
                        <form class="space-y-4 md:space-y-6 font-default" wire:submit='login'>
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
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" wire:model='remember' name="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky" required>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500">Ingat Akun Saya</label>
                                    </div>
                                </div>
                                <x-header.link href="{{ '/forgot-password' }}" style="text-sm font-medium text-blue hover:underline">Lupa Password?</x-header.link>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                        </form>
                        <div class="flex items-center justify-between">
                            <div class="border border-1 bg-gray-500 md:w-[10rem] h-0"></div>
                            <div>
                                <p class="text-sm font-light text-gray-500">
                                    Belum memiliki akun? <x-header.link href="{{ '/register-account' }}" style="font-medium text-blue hover:underline">Daftar disini</x-header.link>
                                </p>
                            </div>
                            <div class="border border-1 bg-gray-500 md:w-[10rem] h-0"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
