<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun - AcaSync</title>
    <link rel="shortcut icon" href="{{ URL::to('/') }}/img/icon-acasync.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-white">
    <section class="animate-fade-up animate-ease-out animate-duration-[500ms] animate-delay-300">
        <div class="px-4 mx-auto h-screen max-w-screen-xl grid lg:grid-cols-2">
            <div class="px-5 flex flex-col items-center justify-center lg:py-0">
                <div class="w-3/4 rounded-lg">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <a href="{{ '/' }}" class="mb-5 flex justify-center">
                            <img src="{{ URL::to('/') }}/img/logo-acasync.png" class="h-10 ml-[-20px]" alt="AcaSync Logo" />
                        </a>
                        
                        <div class="flex items-center justify-between">
                            <div class="border border-1 bg-gray-500 md:w-20 h-0"></div>
                            <div>
                                <p class="text-sm text-center lg:text-xs font-light text-gray-500">
                                    Sudah memiliki akun? <a href="{{ '/login' }}" class="font-medium text-blue hover:underline">Masuk disini</a>
                                </p>
                            </div>
                            <div class="border border-1 bg-gray-500 md:w-20 h-0"></div>
                        </div>

                        <form class="space-y-4 md:space-y-6 font-default" action="#">
                            <div>
                                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" placeholder="Nama Lengkap" required autocomplete="off">
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                                <input type="email" name="email" id="email" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" placeholder="name@gmail.com" required autocomplete="off">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required autocomplete="off">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Konfirmasi Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue focus:border-blue block w-full p-2.5" required autocomplete="off">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky" required>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500">Saya menyetujui <a href="{{ '/register-account' }}" class="font-medium text-blue hover:underline">Kebijakan Privasi</a> serta <a href="{{ '/register-account' }}" class="font-medium text-blue hover:underline">Syarat dan Ketentuan</a> dari AcaSync</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue hover:bg-sky focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar Akun</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="px-5 flex flex-col items-center justify-center lg:py-0">
                <img class="hidden lg:block" src="{{ URL::to('/') }}/img/fitur.gif" title="Fitur AcaSync">
            </div>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>