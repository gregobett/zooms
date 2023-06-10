<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            {{-- <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2> --}}
           
        </div>
    </x-slot>


        <!-- <div class="flex flex-col justify-center bg-cover fixed bg-center items-center mx-auto">
            <img src="/images/back-animation.gif" alt="main logo" class="w-screen h-screen bg-cover overflow-hidden ">
        </div> -->

       


  

   
        @yield('content')

    @include('sweetalert::alert')
</x-app-layout>
