@extends('layout.blank_layout')

@section('judul', 'Personal Landing')

@section('content')

    <section class="bg-blue" id="banner">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1 class="px-4 mb-2 text-lg font-extrabold font-heading tracking-tight leading-none text-white">Hai, Bonnie Green</h1>
            <p class="px-4 text-sm font-default font-light text-white">Apa yang akan kamu lakukan hari ini?</p>
        </div>
    </section>
    
    <section id="add-workspace" class="px-4 mx-auto max-w-screen-xl">
        <div class="w-full p-4 border border-gray-300 rounded-lg bg-gray-50 shadow mt-3 lg:-mt-8 flex justify-center md:flex-none md:justify-normal">
            <a href="{{' /join-workspace '}}" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue rounded-lg text-center ">
                <i class="fa-solid fa-plus"></i>
                <span class="ml-2">Gabung Workspace</span>
            </a>
        </div>
    </section>

    <section id="card-workspace" class=" px-4 mx-auto max-w-screen-xl my-5">
        <div class="p-5 w-full bg-white border border-gray-200 rounded-lg shadow">
            <div class="flex flex-col">
                <div class="flex items-center gap-2">
                    <img class="h-24 mb-3 shadow-lg" src="{{ URL::to('/') }}/img/school-bg.png" alt="Bonnie image"/>
                    <div class="flex flex-col ml-2">
                        <h5 class="mb-1 text-xl font-medium text-gray-900">Academic University</h5>
                        <span class="text-sm text-gray-500">Indonesia</span>
                    </div>
                    
                </div>
                <div class="border-t-2 pt-2 border-gray-200 flex justify-end mt-4 md:mt-6">
                    <a href="{{'/id-workspace/dashboard'}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Masuk</a>
                </div>
            </div>
        </div>
    </section>

    <section id="blank-workspace" class="hidden px-4 mx-auto max-w-screen-xl my-5">
        <div class="p-4 md:p-6 lg:p-12 flex flex-col items-center justify-center">
            <i class="fa-solid fa-mountain-sun text-5xl text-gray-300 mb-2"></i>
            <p class="text-gray-500 text-center">Tidak ada workspace yang diikuti.</p>
        </div>
    </section>
@endsection