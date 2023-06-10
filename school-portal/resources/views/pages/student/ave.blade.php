@extends('layouts.home')

@section('content')	




    @if($data->grade === '11' || $data->grade === '12' )


        @livewireStyles
            <div> <livewire:average-senior></div>
        @livewireScripts

    @else

        @livewireStyles
            <div> <livewire:average></div>
        @livewireScripts

        @endif


@endsection