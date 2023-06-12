

@extends('layouts.navbarfooter')
@section('LandingContent')

<!-- <div class="flex flex-col items-center justify-center overflow-hidden">


<div class="font-sans antialiased  h-screen w-full bg-no-repeat bg-cover bg-center" x-data="mainState" :class="{dark: isDarkMode}" x-cloak style="background-image: url({{ url('images/background.webp') }})">
      
        {{-- <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 mt-10 h-full mx-auto"> --}}
            {{-- <img src="/images/logo.png" alt="main logo" class="max-w-xs my-4"> --}}

        {{-- </div> --}}
</div>

</div> -->


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rainblur Landing Page Template: Tailwind Toolbox</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

      html {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
  </head>

  <body class=" text-indigo-400 m-6  h-screen w-full bg-cover bg-no-repeat bg-center" style="background-image: url('images/header.png')">
    <div class="h-full">
      <!--Nav-->

      <!--Main-->
      <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5  justify-center lg:items-center  overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl md:text-center text-white opacity-75 font-bold leading-tight text-center md:text-left lg:text-center">
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
        <div class="w-full xl:w-3/5  lg:w-4/5 lg:items-center mx-auto p-12 overflow-hidden">
          <img class="mx-auto w-full md:w-4/5  transform -rotate-6  transition hover:scale-105 duration-700 ease-in-out hover:rotate-6 " src="images/macbook.webp" />
        </div>

      </div>
    
    </div>
    @endsection
  </body>


</html>

