
@extends('layouts.home')



@section('content')	

      @if(Auth::user()->user_type === "Student")

        @livewireStyles
        <div class="form-item w-full"> <livewire:student-goal></div>
        @livewireScripts

      @elseif(Auth::user()->user_type === "Faculty")

      @livewireStyles
        <div class="form-item w-full"> <livewire:faculty-facts></div>
        @livewireScripts


      @endif

@endsection

   

