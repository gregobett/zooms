
@extends('layouts.navbarfooter')
@section('LandingContent')



<x-guest-layout>

  <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
    <div class="flex flex-col w-full xl:w-2/5  justify-center lg:items-center  overflow-y-hidden">
          <h1 class="my-4 pl-1 pr-1 text-3xl md:text-5xl md:text-center text-white opacity-75 font-bold leading-tight text-center md:text-left lg:text-center">
              Tipas
              <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                Integrated
              </span>
                National Highschool
          </h1>
          <p class="leading-normal text-white md:text-2xl  md:mx-auto mb-8 text-center">
            Nurturing Minds, Transforming Lives
          </p>
      
    </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5  lg:w-4/5 lg:items-center mx-auto p-12 overflow-hidden ">
          <img class="mx-auto w-full md:w-2/4 lg:w-4/6  transform -rotate-6  transition hover:scale-105 duration-700 ease-in-out hover:rotate-6 " src="images/board.webp" />
        </div>

  </div>
    

</x-guest-layout>

@endsection