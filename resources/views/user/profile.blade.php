@extends('layout.blank_layout')

@section('judul', 'Pengaturan Profil')

@section('content')
    <section class="bg-blue" id="banner">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1 class="px-4 mb-2 text-2xl font-extrabold font-heading tracking-tight leading-none text-white">Pengaturan Profil</h1>
        </div>
    </section>
    
    <section id="profile-user" class="px-4 mx-auto max-w-screen-xl">
        <div class="w-full p-4 mt-3 lg:-mt-10 md:grid md:grid-cols-3 md:gap-x-4 md:gap-y-3 font-default">
            <div class="p-4 my-3 lg:my-0 border border-gray-300 rounded-lg bg-white shadow  lg:content-center">
                <div class="relative lg:flex lg:flex-col lg:items-center">
                    <img class="rounded w-36 h-36" id="profileImage" src="{{ URL::to('/') }}/img/default-profile.png" alt="default photo">
                    <button id="editButton" class="hidden absolute top-2 left-24 transform -translate-y-1/2 w-10 h-10 bg-yellow border-2 border-white text-white rounded-full">
                        <i class="fa-solid fa-pen"></i>
                    </button>
                    <input type="file" id="fileInput" class="hidden" accept="image/*">
                </div>
                <div class="mb-5 px-5">
                    <p class="text-xs text-gray-500">User ID</p>
                    <div class="flex bg-transparent mb-5">
                        <input type="text" value="0987654321" class="bg-transparent border-none p-2 w-full text-gray-800" id="copy-text" readonly>
                        <button class="btn text-blue rounded p-2 relative" data-clipboard-target="#copy-text">
                            <i class="fa-solid fa-clipboard"></i>
                            <span id="tooltip" class="tooltip hidden absolute bg-gray-500 text-white p-2 rounded -top-10 left-1/2 transform -translate-x-1/2">
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
            <div class=" my-3 lg:my-0 col-span-2 p-4 border border-gray-300 rounded-lg bg-white shadow">
                <h5 class="mb-5 text-lg font-bold font-heading tracking-tight leading-none text-gray-900">Informasi Umum</h5>
                <form class="border-t-2 py-5 border-gray-200 w-full mx-auto lg:grid lg:grid-cols-2 lg:gap-4 font-default">
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
                    <div class="mb-5 hidden">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required disabled/>
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
    
@endsection