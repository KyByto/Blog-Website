<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[#FFC017] flex items-center justify-center h-screen ">
        <div  class="  flex flex-col sm:justify-center items-center pt-2 sm:pt-0 bg-white  w-[30%] rounded-xl">
            <div>
                <a href="/">

                    <img src="https://fennec.digital/wp-content/uploads/2022/08/logo-fennec-final-tail.png" alt="logo" class="w-[100px]  mx-auto" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-3 px-6 py-4 bg-white  shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
