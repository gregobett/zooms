
@extends('layouts.home')
@section('content')	


        @livewireStyles
        <div class="form-item w-full"> <livewire:total-students></div>
        @livewireScripts

        <div class=" bg-gray-50 m-4 dark:bg-[#222738] flex items-center h-1/2">
	<section class=" bg-center py-12 w-full xl:py-32 opacity-80 dark:opacity-90" style="background-image: url('images/goal-background.webp');">
		<div class="container mx-auto text-center xl:text-start text-white">
			<div class="flex flex-col xl:flex-row items-center">
				<div class="w-full flex-col xl:w-1/2">
					<h1 class="flex  justify-center items-center xl:items-start xl:justify-start text-xl lg:text-3xl font-medium mb-6  pl-4 pr-4">The Exceptional</h1>
					<p class="text-xs mb-12 lg:text-lg pl-4 pr-4">Administrative Professional is grace, skill, mental toughness, problem solving, positivity, 
                                                endless smile genius, and desired outcomes in motion.
                                        </p>
                                        <p class="text-xs mb-12 lg:text-lg pl-4 pr-4">Thanks for holding everything together.</p>
					
					
				</div>
               <div class=" w-full  items-center pl-4 pr-4 xl:pl-16 xl:w-1/2 xl:rounded-full">
                  <img src="images/flag2.webp" class=" h-64 w-full xl:rounded-xl " alt="Layout Image">
               </div>
				</div>
			</div>
	</section>
</div>



@endsection