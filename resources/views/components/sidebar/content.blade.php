<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    
    
    @if((Auth::user()->user_type === 'Student'))
    @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4')))
    <x-sidebar.link title="Student Dashboard"  :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @else

    <x-sidebar.link title="Student Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    @endif

   
    <x-sidebar.dropdown title="Profile" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        {{-- @if(Route::is('add-student' || 'register-grade1' || 'register-grade2' || 'register-grade3'|| 'regiser-grade4' )) --}}
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4')))
        <x-sidebar.link title="Edit Info " href='#'/>
        
        @else
        <x-sidebar.link title="Edit Info " href='student-profile' />
        @endif

    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="My Grades" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4')))
        <x-sidebar.link title="First Quarter " href='#' />
        <x-sidebar.link title="Second Quarter " href='#' />
        <x-sidebar.link title="Third Quarter " href='#' />
        <x-sidebar.link title="Fourth Quarter " href='#' />
        @else
        <x-sidebar.link title="First Quarter " href='view-grades' />
        <x-sidebar.link title="Second Quarter " href='view-grades2' />
        <x-sidebar.link title="Third Quarter " href='view-grades3' />
        <x-sidebar.link title="Fourth Quarter " href='view-grades4' />
        @endif

    </x-sidebar.dropdown>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4')))
        <x-sidebar.link title="Announcement " href='#' />
        @else
        <x-sidebar.link title="Announcement " href='view-announcement' />
        @endif
  


    @elseif((Auth::user()->user_type === 'Faculty'))
        @if(Route::is('add-faculty'))
        <x-sidebar.link title="Faculty Dashboard"  :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
        @else
        <x-sidebar.link title="Faculty Dashboard" href="{{ route('faculty-dashboard') }}" :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
        @endif

    <x-sidebar.dropdown title="Profile" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"> <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/> </svg>
        </x-slot>

        @if(Route::is('add-faculty'))
        <x-sidebar.link title="Edit" href='#' class="hidden"/>
        @else
        <x-sidebar.link title="Edit  " href='/faculty-profile' />
          
        @endif

      
    </x-sidebar.dropdown>
        @if(Route::is('add-faculty'))
        <x-sidebar.link title="Students" href='#' />
        <x-sidebar.link title="Announcement " href='#' />
        @else
        <x-sidebar.link title="Students" href='/student-all-faculty' />
        <x-sidebar.link title="Announcement " href='view-announcement-faculty' />
        @endif


    @else
    <x-sidebar.link title="Admin Dashboard" href="{{ route('admin-dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>


    <x-sidebar.dropdown title="View" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

 
        <x-sidebar.link title="Faculties" href='/faculty-all-list' />
        <x-sidebar.link title="Students" href='/student-all-list' />
 
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Announcements" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.link title="Make Announcement" href='add-announcement' />
        <x-sidebar.link title="View Announcements" href='announcement-all-list' />
 
    </x-sidebar.dropdown>
    @endif


  
       
</x-perfect-scrollbar>