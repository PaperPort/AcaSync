<div>
    <x-header.user-navigation/>

    <section class="bg-blue" id="banner">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16">
            <h1 class="px-4 mb-2 text-2xl font-extrabold leading-none tracking-tight text-white font-heading">Pengaturan Profil</h1>
        </div>
    </section>
    
    <section id="profile-user" class="max-w-screen-xl px-4 mx-auto">
        <div class="w-full p-4 mt-3 lg:-mt-10 md:grid md:grid-cols-3 md:gap-x-4 md:gap-y-3 font-default">
            <div class="p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:my-0 lg:content-center">
                <div class="relative lg:flex lg:flex-col lg:items-center">
                    <img class="rounded w-36 h-36" id="profileImage" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
                    <button id="editButton" class="absolute hidden w-10 h-10 text-white transform -translate-y-1/2 border-2 border-white rounded-full top-2 left-24 bg-yellow">
                        <i class="fa-solid fa-pen"></i>
                    </button>
                    <input type="file" id="fileInput" class="hidden" accept="image/*">
                </div>
                <div class="px-5 mb-5">
                    <p class="text-xs text-gray-500">User ID</p>
                    <div class="flex mb-5 bg-transparent">
                        <input type="text" value="0987654321" class="w-full p-2 text-gray-800 bg-transparent border-none" id="copy-text" readonly>
                        <button class="relative p-2 rounded btn text-blue" data-clipboard-target="#copy-text">
                            <i class="fa-solid fa-clipboard"></i>
                            <span id="tooltip" class="absolute hidden p-2 text-white transform -translate-x-1/2 bg-gray-500 rounded tooltip -top-10 left-1/2">
                                Copied!
                            </span>
                        </button>
                    </div>
                    
                    <button type="button" class="text-white bg-blue hover:bg-sky focus:ring-4 focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        <i class="fa-solid fa-pen"></i>
                        <span class="ml-2">Ubah Profil</span>
                    </button>
                </div>
            </div>
            <div class="col-span-2 p-4 my-3 bg-white border border-gray-300 rounded-lg shadow lg:my-0">
                <h5 class="mb-5 text-lg font-bold leading-none tracking-tight text-gray-900 font-heading">Informasi Umum</h5>
                <form class="w-full py-5 mx-auto border-t-2 border-gray-200 lg:grid lg:grid-cols-2 lg:gap-4 font-default">
                    <div class="mb-5">
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" disabled />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                        <input type="e-mail" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" disabled />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required disabled/>
                    </div>
                    <div class="hidden mb-5">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required disabled/>
                    </div>
                    <div class="hidden col-span-2 mb-5">
                        <button type="button" class="text-white bg-yellow hover:bg-orange focus:ring-4 focus:ring-yellow font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <x-footer.user-footer></x-footer.user-footer>
</div>
