<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  
    
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

        .hide-content {
        display: none;
}
    </style>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body >
<div id="page-content" class="hide-content">
    <div class="font-sans antialiased h-screen w-full  bg-no-repeat  bg-cover bg-center" x-data="mainState" :class="{dark: isDarkMode}" x-cloak   style="background-image: url({{ url('images/header.webp') }}); " >
        
    
        <div class="flex flex-col min-h-screen text-gray-900 pt-10 lg:pt-12 xl:pt-0 opacity-75 dark:text-gray-200 2xl:pt-16" >
            {{ $slot }}
            

        </div>

   
    </div>
    @include('sweetalert::alert')
</div>

<script>
    const backgroundImage = new Image();
    backgroundImage.src = "{{ url('images/header.webp') }}";
    backgroundImage.addEventListener('load', function() {
        document.getElementById('page-content').classList.remove('hide-content');
    });
</script>

</body>



</html>