
@extends('layouts.home')
@section('content')



    @livewireStyles
        <div class="form-item w-full"> <livewire:todo-list></div>
    @livewireScripts


    @endsection