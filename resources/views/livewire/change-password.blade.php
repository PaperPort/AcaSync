<div>
    <section class="animate-fade-up animate-ease-out animate-duration-[500ms] animate-delay-300">
        <div class="px-4 mx-auto h-screen max-w-screen-sm grid">
            <div class="flex flex-col items-center justify-center lg:py-0">
                <div class="w-full rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="mb-5 flex justify-center text-2xl font-heading font-extrabold leading-none text-blue">
                            Ganti Password
                        </h1>
                        <form class="space-y-4 md:space-y-6 font-default" wire:submit='resetPass'>
                            <div>
                                <x-form.input type="password" wire:model='password' placeholder="********" name="password">
                                    Password
                                </x-form.input>
                                @error('password')
                                    <small class="mt-1 text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <x-form.input type="password" wire:model='password_confirmation' placeholder="********" name="password_confirmation">
                                    Konfirmasi Password
                                </x-form.input>
                                @error('password_confirmation')
                                    <small class="mt-1 text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
