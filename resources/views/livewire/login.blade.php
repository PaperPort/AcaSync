<div>
    <section class="animate-fade-up animate-ease-out animate-duration-[500ms] animate-delay-300">
        <div class="grid h-screen max-w-screen-sm px-4 mx-auto">
            <div class="flex flex-col items-center justify-center lg:py-0">
                <div class="w-full rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <x-header.link style="mb-5 flex justify-center" href="{{ '/' }}">
                            <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-10 ml-[-20px]" alt="AcaSync Logo" />
                        </x-header.link>
                        <x-alerts.alerts></x-alerts.alerts>
                        <form class="space-y-4 md:space-y-6 font-default" wire:submit='login'>
                            <div>
                                <x-form.input type="email" wire:model='email' placeholder="name@gmail.com" name="email" value="{{ old('email', Cookie::get('email')) }}">
                                    Email
                                </x-form.input>
                                @error('email')
                                    <small class="mt-1 text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <x-form.input type="password" wire:model='password' placeholder="********" name="password">
                                    Password
                                </x-form.input>
                                @error('password')
                                    <small class="mt-1 text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" wire:model='remember' name="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500">Ingat Akun Saya</label>
                                    </div>
                                </div>
                                <x-header.link href="{{ '/forgot-password' }}" style="text-sm font-medium text-blue hover:underline">Lupa Password?</x-header.link>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <span wire:loading.remove wire:target="login">Masuk</span>
                                <span wire:loading wire:target="login">Loading...</span>
                            </button>
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
