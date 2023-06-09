@extends('layouts.home')

@section('content')	




        @if($data->grade === '11' || $data->grade === '12')

            @livewireStyles
                <div> <livewire:view-grades-senior></div>
            @livewireScripts
        @else
            @livewireStyles
                <div> <livewire:view-grades></div>
            @livewireScripts

        @endif

       

@endsection