<div>
    <x-header.user-navigation :user="$user"/>

    <section class="bg-blue" id="banner">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16">
            <h1 class="px-4 mb-2 text-2xl font-extrabold leading-none tracking-tight text-white font-heading">Pengaturan Profil</h1>
        </div>
    </section>
    <x-alerts.toast></x-alerts.toast>
    <section id="profile-user" class="max-w-screen-xl sm:px-4 mx-auto">
        <div class="w-full p-4 mt-3 lg:-mt-10 md:grid md:grid-cols-3 md:gap-x-4 md:gap-y-3 font-default">
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:my-0 lg:content-center">
                <div class="relative lg:flex lg:flex-col lg:items-center">
                    @if ($user->profile)
                    <img class="rounded w-36 h-36" id="profileImage" src="{{ asset('storage/'.$user->profile) }}" alt="default photo">
                    @else
                    <img class="rounded w-36 h-36" id="profileImage" src="{{ asset('storage/picture_profiles/default-profile.png') }}" alt="default photo">
                    @endif
                </div>
                <div class="px-5 mb-5">
                    <div class="flex mb-5 bg-transparent">
                        <div class="grid grid-cols-3 gap-2 mb-5 bg-transparent">
                            <div class="col-span-2">
                                <x-form.input type="text" name="user_id" :readonly='true' value="{{ substr($user->user_id,0,8) }}" id="copy-button">
                                    User ID
                                </x-form.input>
                            </div>
                            <button data-copy-to-clipboard-target="copy-button" class="font-default text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm p-2.5 text-center items-center inline-flex justify-center mt-7">
                                <span id="default-message">
                                    <i class="w-3 h-3 text-white fa-regular fa-copy"></i>
                                </span>
                                <span id="success-message" class="inline-flex items-center hidden">
                                    <svg class="w-3 h-3 text-whit" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    
                    <x-header.link href="{{ route('personal-profile', ['view' => 'edit']) }}" style="text-white bg-blue hover:bg-sky focus:ring-4 focus:ring-blue font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2">
                        <i class="fa-solid fa-pen"></i>
                        <span class="ml-2">Ubah Profil</span>
                    </x-header.link>
                </div>
            </div>
            <div class="col-span-2 p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:my-0">
                <h5 class="mb-5 text-lg font-bold leading-none tracking-tight text-gray-900 font-heading">Informasi Umum</h5>
                <form class="w-full py-5 mx-auto border-t-2 border-gray-200 font-default">
                    <div class="mb-5">
                        <x-form.input id="nama_lengkap" wire:model='nama_lengkap' type="text" name="nama_lengkap" readonly>
                            Nama Lengkap
                        </x-form.input>
                        @error('nama_lengkap')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-form.input id="email" wire:model='email' type="email" name="email" readonly>
                            E-mail
                        </x-form.input>
                        @error('email')
                            <small class="mt-1 text-red-700">{{ $message }}</small>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <x-footer.user-footer></x-footer.user-footer>
</div>
