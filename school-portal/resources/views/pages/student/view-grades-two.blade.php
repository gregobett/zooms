@extends('layouts.home')
@section('content')	







        @if($data->grade === '11' || $data->grade === '12')

            @livewireStyles
                <div> <livewire:view-grades-senior-two></div>
            @livewireScripts

        @else

            @livewireStyles
                <div> <livewire:view-grades-two></div>
            @livewireScripts

        @endif



  

@endsection