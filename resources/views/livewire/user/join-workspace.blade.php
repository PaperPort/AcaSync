<div>
    <x-header.user-navigation/>

    <section class="bg-blue" id="banner">
        <div class="flex flex-col max-w-screen-xl px-4 pt-32 pb-20 mx-auto">
            <h1 class="px-4 mb-2 text-2xl font-extrabold leading-none tracking-tight text-white font-heading">Gabung Workspace</h1>
        </div>
    </section>

    <section id="search-workspace" class="max-w-screen-xl px-4 mx-auto">
        <div class="flex justify-center w-full p-4 mt-3 border border-gray-300 rounded-lg shadow bg-gray-50 lg:-mt-8 md:flex-none md:justify-normal">
            
            <form class="flex items-center w-full">   
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <i class="w-4 h-4 text-gray-500 fa-solid fa-people-roof"></i>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky focus:border-sky block w-full ps-10 p-2.5  " placeholder="Cari nama workspace yang ingin diikuti..." required />
                </div>
                <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue rounded-lg border border-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

        </div>
    </section>

    <section id="card-workspace" class="max-w-screen-xl px-4 mx-auto my-5">
        <h6 class="mb-5 font-light text-gray-500 font-default">Workspace Terkait :</h6>
        <div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow">
            <div class="flex flex-col">
                <div class="flex items-center gap-2">
                    <img class="h-24 mb-3 shadow-lg" src="{{ URL::to('/') }}/img/school-bg.png" alt="Bonnie image"/>
                    <div class="flex flex-col ml-2">
                        <h5 class="mb-1 text-xl font-medium text-gray-900">Academic University</h5>
                        <span class="text-sm text-gray-500">Indonesia</span>
                    </div>
                    
                </div>
                <div class="flex justify-end pt-2 mt-4 border-t-2 border-gray-200 md:mt-6">
                    <button data-modal-target="authentication-join-workspace-modal" data-modal-toggle="authentication-join-workspace-modal" class="block text-blue outline outline-blue outline-1 hover:bg-sky hover:text-white hover:outline-none focus:ring-4 focus:outline-none focus:ring-sky font-medium rounded-full text-sm px-5 py-2.5 text-center" type="button">
                        Gabung
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div id="authentication-join-workspace-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Kode Masuk Workspace
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-join-workspace-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" method="post" action="">
                        <div>
                            <label for="kode_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Masuk</label>
                            <input type="text" name="kode_masuk" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5"required />
                        </div>
                        <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Gabung ke Workspace</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    <x-footer.user-footer></x-footer.user-footer>
</div>
