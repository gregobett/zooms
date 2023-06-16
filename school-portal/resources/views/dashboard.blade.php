
@extends('layouts.home')



@section('content')	

      @if(Auth::user()->user_type === "Student")

        @livewireStyles
        <div class="form-item w-full"> <livewire:student-goal></div>
        @livewireScripts

   


        @endif

@endsection

   

