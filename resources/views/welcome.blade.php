<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital Fennec</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

      
    </head>
    <body class="bg-[#FFC017] px-10">
<nav class=" flex justify-between  items-center">

<a href="{{url('/')}}">
    <img class="w-[70px] " src="https://fennec.digital/wp-content/uploads/2022/08/logo-fennec-final-tail.png" alt="icon" />
</a>

    @if (Route::has('login'))
    <nav class="flex gap-3 ">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white bg-black"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-xl px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white bg-black"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-xl px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white bg-black"
                >
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif


</nav>


<main class="flex mt-4">

    <div class="flex flex-col  w-[60%] word-wrap overflow-wrap gap-5 ">

<h1 class="text-[50px] font-bold  ">
    Transforming Visions into Digital Excellence
</h1>


<button  class="bg-black text-white text-[30px]  py-2  w-[24%] rounded-xl"><a href="{{ route('register')}}">Discover</a></button>


        <p class="">
            Join Us in Shaping the Future of Technology and Entertainment, Where Every Solution Is a Gateway to New Possibilities, and Every Game Is an Adventure Waiting to Unfold. Harness the Power of our Bespoke IT Solutions and Innovative Game Development to Elevate Your Business and Captivate Audiences Worldwide
     
        </p>



    </div>
<div class="w-[40%]">
<img src="https://fennec.digital/wp-content/uploads/2024/03/devicesmockup02-1024px.png" alt="devices" class=""/>
</div>

</main>



    </body></html>
