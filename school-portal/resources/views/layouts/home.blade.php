<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            {{-- <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2> --}}
           
        </div>
    </x-slot>

 

    @yield('content')

    @include('sweetalert::alert')

</x-app-layout>
