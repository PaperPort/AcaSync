<div>
    <section class="animate-fade-up animate-ease-out animate-duration-[500ms] animate-delay-300">
        <div class="px-4 mx-auto h-screen max-w-screen-sm grid">
            <div class="flex flex-col items-center justify-center lg:py-0">
                <div class="w-full rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="mb-5 flex justify-center text-2xl font-heading font-extrabold leading-none text-blue">
                            Lupa Kata Sandi?
                        </h1>
                        <p class="font-light text-gray-400 text-center text-sm">Masukkan email yang telah terdaftar di AcaSync dan kami akan mengirimkan instruksi untuk mengganti kata sandi Anda.</p>
                        <x-alerts.alerts></x-alerts.alerts>
                        <form class="space-y-4 md:space-y-6 font-default" wire:submit='forgotPass'>
                            <div>
                                <x-form.input type="email" wire:model='email' placeholder="name@gmail.com" name="email">
                                    Email
                                </x-form.input>
                                @error('email')
                                    <small class="mt-1 text-red-700">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <span wire:loading.remove wire:target="forgotPass">Kirim E-mail</span>
                                <span wire:loading wire:target="forgotPass">Loading...</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
