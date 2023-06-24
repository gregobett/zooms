
@extends('layouts.home')
@section('content')	


        @livewireStyles
          <div class="form-item w-full"> <livewire:total-students></div>
        @livewireScripts

        @livewireStyles
          <div class="form-item w-full"> <livewire:faculty-facts></div>
        @livewireScripts


@endsection