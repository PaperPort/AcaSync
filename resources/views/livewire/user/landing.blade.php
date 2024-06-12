<div>
    <x-header.user-navigation/>
    <section class="bg-blue" id="banner">
        <div class="flex flex-col max-w-screen-xl px-4 pt-32 pb-20 mx-auto">
            <h1 class="px-4 mb-2 text-lg font-extrabold leading-none tracking-tight text-white font-heading">Hai, Bonnie Green</h1>
            <p class="px-4 text-sm font-light text-white font-default">Apa yang akan kamu lakukan hari ini?</p>
        </div>
    </section>
    
    <section id="add-workspace" class="max-w-screen-xl px-4 mx-auto">
        <div class="flex justify-center w-full p-4 mt-3 border border-gray-300 rounded-lg shadow bg-gray-50 lg:-mt-8 md:flex-none md:justify-normal">
            <x-header.link href="{{' /join-workspace '}}" style="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue rounded-lg text-center">
                <i class="fa-solid fa-plus"></i>
                <span class="ml-2">Gabung Workspace</span>
            </x-header.link>
        </div>
    </section>

    <section id="card-workspace" class="max-w-screen-xl px-4 mx-auto my-5 ">
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
                    <x-header.link href="{{'/id-workspace/dashboard'}}" style="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</x-header.link>
                </div>
            </div>
        </div>
    </section>

    <x-card.blank-card class="hidden"/>

    <x-footer.user-footer/>
</div>
