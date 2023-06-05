<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            {{-- <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2> --}}
           
        </div>
    </x-slot>
{{-- 
    @livewireStyles

<div> <livewire:gradesectiondropdown></div>


@livewireScripts --}}
    {{-- <div class="font-sans antialiased  h-screen w-full bg-no-repeat bg-cover bg-center" x-data="mainState" :class="{dark: isDarkMode}" x-cloak > --}}
        {{-- <input type="hidden" value="{{ $data->user_id }}" name="id" /> --}}
        {{-- @foreach($datas as $data)
        @endforeach --}}
       
<!--         
        @if(($data->grade === '1') && ($data->section === 'Gold'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade1S1.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '1') && ($data->section === 'Silver'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade1S2.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '1') && ($data->section === 'Bronze'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade1S3.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '2') && ($data->section === 'Narra'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade2S1.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '2') && ($data->section === 'Molave'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade2S2.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '2') && ($data->section === 'Molave'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade2S3.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '3') && ($data->section === 'Joy'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade3S1.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '3') && ($data->section === 'Love'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade3S2.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '3') && ($data->section === 'Hope'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/grade3S3.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '4') && ($data->section === 'Diamond'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade4S1.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '4') && ($data->section === 'Emerald'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade4S2.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '4') && ($data->section === 'Ruby'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade4S3.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif($data->grade === '5' && $data->section === 'Rizal')
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade5S1.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '5') && ($data->section === 'Bonifacio'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade5S2.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '5') && ($data->section === 'Mabini'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade5S3.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '6') && ($data->section === 'blue'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade6S1.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>

        @elseif(($data->grade === '6') && ($data->section === 'Red'))
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade6S2.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">
        </div>


        @else
        <div class="flex flex-col justify-center items-center mx-auto">
            <img src="/images/Grade6S3.png" alt="main logo" class="w-screen h-3/6 overflow-hidden ">

        </div>
        @endif -->
  

   
        @yield('content')
    {{-- </div> --}}
    @include('sweetalert::alert')
</x-app-layout>
