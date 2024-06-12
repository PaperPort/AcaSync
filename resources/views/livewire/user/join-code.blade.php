<div>
    <x-header.user-navigation/>

    <section id="join-code-workspace">
        <div class="px-4 mx-auto h-screen max-w-screen-sm grid">
            <div class="flex flex-col items-center justify-center lg:py-0">
                <div class="w-full rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="mb-5 text-center flex justify-center text-2xl font-heading font-extrabold leading-none text-blue">
                            Gabung ke Workspace
                        </h1>
                        <p class="font-light text-gray-400 text-center text-sm">Masukkan kode masuk yang diberikan untuk dapat mengakses kegiatan pembelajaran.</p>
                        <form class="space-y-4 md:space-y-6 font-default" action="#">
                            <div>
                                <label for="kode_masuk" class="block mb-2 text-sm font-medium text-gray-900">Kode Masuk</label>
                                <input type="text" name="kode_masuk" id="kode_masuk" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required autocomplete="off">
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Gabung ke Workspace</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer.user-footer></x-footer.user-footer>
</div>
