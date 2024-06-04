<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blogs</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

      
    </head>
    <body class="  flex    bg-[#0e1217]   h-screen py-5 font-sans ">
        <nav class=" text-[#a8b3cf] gap-4 flex flex-col items-center  h-[100%] w-[15%] border-r border-gray-700" >


            <img class="w-[70px] " src="https://fennec.digital/wp-content/uploads/2022/08/logo-fennec-final-tail.png" alt="icon" />
        <h1 class="hover:bg-[#a8b3cf33] w-[100%] text-center py-2">Create Blog</h1> 
        <h1 class="hover:bg-[#a8b3cf33] w-[100%] text-center py-2">Profil</h1>
        <h1 class="hover:bg-[#a8b3cf33] w-[100%] text-center py-2">Logout</h1>

        </nav>        
<main class="flex flex-wrap w-[85%]   gap-4 py-10 px-4">
   
    @yield('blogs')

</main>

    </body>
    
    </html>
