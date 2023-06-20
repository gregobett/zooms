
@extends('layouts.home')



@section('content')	

      @if(Auth::user()->user_type === "Student")

        @livewireStyles
        <div class="form-item w-full"> <livewire:student-goal></div>
        @livewireScripts

      @else

        <div class="w-full lg:items-center mx-auto  overflow-hidden ">
          <img class="w-5/6 h-5/6 bg-no-repeat mx-auto  bg-cover bg-center fixed " src="images/back-teacher.png" />
        </div>


      @endif

@endsection

   

