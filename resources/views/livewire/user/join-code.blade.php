<div>
    <section id="join-code-workspace">
        <div class="px-4 mx-auto h-screen max-w-screen-sm grid">
            <div class="flex flex-col items-center justify-center lg:py-0">
                <div class="w-full rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="mb-5 text-center flex justify-center text-2xl font-heading font-extrabold leading-none text-blue">
                            Gabung ke Workspace
                        </h1>
                        <x-alerts.alerts></x-alerts.alerts>
                        <p class="font-light text-gray-400 text-center text-sm">Masukkan kode masuk yang diberikan untuk dapat mengakses kegiatan pembelajaran.</p>
                        <form class="space-y-4 md:space-y-6 font-default" wire:submit='joinWorkspace'>
                            <input type="hidden" name="role_id" wire:model='role_id'>
                            <x-form.input id="email" wire:model='email' type="email" name="email">
                                E-mail
                            </x-form.input>
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                            <x-form.input id="kode_akses" wire:model='kode_akses' type="text" name="kode_akses">
                                Kode Akses
                            </x-form.input>
                            @error('kode_akses') <span class="error">{{ $message }}</span> @enderror
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Gabung ke Workspace</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
