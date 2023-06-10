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

        <!-- component -->
<div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">
  <div class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
      max-w-7xl">
    <div class="flex flex-col items-center sm:px-5 md:flex-row">
      <div class="flex flex-col items-start justify-center w-full h-full pt-6 pr-0 pb-6 pl-0 mb-6 md:mb-0 md:w-1/2">
        <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pr-10 lg:pr-16
            md:space-y-5">
          <div class="bg-green-500 flex items-center leading-none rounded-full text-gray-50 pt-1.5 pr-3 pb-1.5 pl-2
              uppercase inline-block">
            <p class="inline">
              <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                  00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                  1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1
                  0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            </p>
            <p class="inline text-xs font-medium">New</p>
          </div>
          <a class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl">Write anything. Be creative.</a>
          <div class="pt-2 pr-0 pb-0 pl-0">
            <p class="text-sm font-medium inline">author:</p>
            <a class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1 underline">Jack Sparrow</a>
            <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, April 2021 ·</p>
            <p class="text-gray-200 text-sm font-medium inline mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="block">
          <img
              src="https://images.unsplash.com/photo-1626314928277-1d373ddb6428?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mzd8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover rounded-lg max-h-64 sm:max-h-96 btn- w-full h-full"/>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 sm:px-5 gap-x-8 gap-y-16">
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="https://images.unsplash.com/photo-1626318305863-bb23d0297c0b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="https://images.unsplash.com/photo-1626285861696-9f0bf5a49c6d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="https://images.unsplash.com/photo-1626197031507-c17099753214?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MzR8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
    </div>
  </div>
</div>
  

   
        @yield('content')

    @include('sweetalert::alert')
</x-app-layout>
