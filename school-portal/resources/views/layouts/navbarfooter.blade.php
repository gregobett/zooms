<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TINHS-PORTAL</title>

    <!-- Fonts -->
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
</head>

<body class="font-sans antialiased " x-data="mainState" :class="{dark: isDarkMode}" x-cloak>
    {{-- nav bar goes heres --}}
    <nav class="bg-gre opacity-75 dark:bg-[#222738] dark:opacity-100  py-2 fixed top-0 left-0 right-0 z-10 " >
        <div x-data="{isOpen: false}" class="mx-auto px-5 md:px-12.5 lg:px-20">
            
            <div class="md:flex md:justify-between items-center">
                {{-- logo --}}
                <div class="flex items-center">
                    <a href="/">
                        <img src="/images/logo.webp" alt="main logo" class="w-12 h-12 mr-1 sm:mr-2 lg:mr-3">
                    </a>
                    
                    {{-- primary --}}
                    <div class="flex flex-col">
                    <h3 class="hidden md:block text-md  pl-2 md:text-xl font-bold text-sky-50 " >TINHS-PORTAL</h3>
                    <!-- <p class="hidden md:block text-md pl-2 md:text-xl font-light text-sky-50">School Portal</p> -->
                    </div>
                    {{-- hamburger menu --}}
                    <div class="flex md:hidden ml-auto mr-4">
                        <button    
                            aria-label="toggle menu"
                            @click="isOpen = !isOpen">
                                <svg class="text-sky-50  h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                        </button>
                    </div>
                </div>

                {{-- secondary nav --}}
                <div :class="isOpen ? 'show' : 'hidden'" class="md:flex items-center font-light text-sky-50 ml-1 pb-1 pt-3 ">
                    <div class="flex flex-col md:flex-row gap-3 md:gap-x-7 transition ease-in-out duration-1000">

                        @if (Route::is('login'))
                
                            <a href="/" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300" >Home</a>

                            <a href="{{ route('register') }}" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300" >Register</a>
                            
                        @elseif (Route::is('register'))
               
                        <a href="/" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">Home</a>
                        <a href="{{ url('login') }}" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">
                            Log in
                        </a>

                      

                        @elseif (Route::has('login'))
                                @auth
                                
                                @if(Auth::user()->user_type === "Student")
                                    <a href="{{ url('dashboard') }}" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">Dashboard</a>
                                @elseif(Auth::user()->user_type === "Faculty")
                                    <a href="{{ url('/faculty-dashboard') }}" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">Dashboard</a>
                                @elseif(Auth::user()->user_type === "Admin")
                                    <a href="{{ url('/admin-dashboard') }}" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">Dashboard</a>
                                @endif
                                    
                                @else
                               
                                    <a href="{{ url('login') }}" x-data="{ open: false }" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">
                                    Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="md:text-lg hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">Register</a>
                                    @endif
                                @endauth
                        @endif
                    </div>
                    <x-button class="ml-0 mt-3 md:mt-0 md:ml-6" type="button" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
                        <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-5 h-5" />
                        <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-5 h-5" />
                    </x-button>
                </div>
            </div>

        </div>
    </nav>

        @yield('LandingContent')

       
        @yield('login')


        @yield('register')
<!-- 
    <footer class="bg-gre dark:bg-[#222738] py-5">

        <div class="flex flex-col justify-center items-center mx-10 md:mx-0">
          
            <p class="text-white text-center font-light py-3">For any concern, reach us in any of our social contact links below.</p>
            <div class="flex flex-row justify-end gap-4 py-2">
             
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="/images/Facebook.webp" alt="Facebook" class="max-h-8 cursor-pointer duration-300  hover:scale-110"></a>
                <a href="https://www.instagram.com/"><img src="/images/instagram-logo.png" alt="Instagram" class="max-h-8 cursor-pointer duration-300  hover:scale-110"></a>
                <a href="https://twitter.com/?lang=en"><img src="/images/linkedin.png" alt="Twitter" class="max-h-8 cursor-pointer duration-300  hover:scale-110"></a>
             
            </div>

            {{-- <a href="{{ url('about') }}" class="md:text-md text-white hover:text-sky-200 duration-300 cursor-pointer relative overflow-hidden after:h-[1px] after:w-full after:bottom-0 after:right-full after:bg-sky-200 after:absolute hover:after:translate-x-full after:duration-300">Developers</a> --}}
        </div>

    </footer> -->

</body>

</html>