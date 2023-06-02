<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    
    
    @if((Auth::user()->user_type === 'Student'))
    @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4'))
    || (Route::is('register-grade-senior1')) || (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
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
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/profile-icon.png" alt="Profile logo" class="w-8 ">
        </x-slot>

      
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4'))
        || (Route::is('register-grade-senior1')) || (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
        <x-sidebar.link title="Edit Info " href='#'/>
        
        @else
        <x-sidebar.link title="Edit Info " href='student-profile' />
        @endif

    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="My Grades" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/grade-icon.png" alt="Grade logo" class="w-8 ">
        </x-slot>

        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4'))
        || (Route::is('register-grade-senior1')) || (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
        <x-sidebar.link title="First Quarter " href='#' />
        <x-sidebar.link title="Second Quarter " href='#' />
        <x-sidebar.link title="Third Quarter " href='#' />
        <x-sidebar.link title="Fourth Quarter " href='#' />
        <x-sidebar.link title="General Average " href='#' />
        @else
          

            <x-sidebar.link title="First Quarter " href='/view-grades-senior' /> 
            <x-sidebar.link title="Second Quarter " href='/view-grades-senior2' />
            <x-sidebar.link title="Third Quarter " href='/view-grades-senior3' />
            <x-sidebar.link title="Fourth Quarter " href='/view-grades-senior4' />
            <x-sidebar.link title="General Average " href='/ave' />
     
            <!-- <x-sidebar.link title="First Quarter " href='/view-grades' /> 
            <x-sidebar.link title="Second Quarter " href='/view-grades2' />
            <x-sidebar.link title="Third Quarter " href='/view-grades3' />
            <x-sidebar.link title="Fourth Quarter " href='/view-grades4' />
            <x-sidebar.link title="General Average " href='/ave' /> -->
    
          

        @endif

    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Announcement" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/announcement-icon.png" alt="announcement logo" class="w-8 ">
        </x-slot>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4'))
        || (Route::is('register-grade-senior1')) || (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
        <x-sidebar.link title="View Announcement " href='#' />
        
        @else
        <x-sidebar.link title="View Announcement " href='view-announcement' />
        @endif
    </x-sidebar.dropdown>


    <x-sidebar.dropdown title="Mail" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/mail.png" alt="mail logo" class="w-8 ">
        </x-slot>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || (Route::is('register-grade3')) || (Route::is('register-grade4'))
        || (Route::is('register-grade-senior1')) || (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
        <x-sidebar.link title="Mail " href='#' />
        
        @else
        <x-sidebar.link title="Mail " href='/contactForm' />
        @endif
    </x-sidebar.dropdown>
       
      

        
  
      

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
            <img src="/images/profile-icon.png" alt="Profile logo" class="w-8 ">
        </x-slot>

        @if(Route::is('add-faculty'))
        <x-sidebar.link title="Edit" href='#' class="hidden"/>
        @else
        <x-sidebar.link title="Edit  " href='/faculty-profile' />
          
        @endif

      
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Students" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <img src="/images/students.png" alt="Profile logo" class="w-8 ">
        </x-slot>

        @if(Route::is('add-faculty'))
        <x-sidebar.link title="Students" href='#' />
       
        @else
        <x-sidebar.link title="Students" href='/student-all-faculty' />
       
        @endif
    </x-sidebar.dropdown>


    <x-sidebar.dropdown title="Announcement" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <img src="/images/announcement-icon.png" alt="announcement logo" class="w-8 ">
        </x-slot>

        @if(Route::is('add-faculty'))
        <x-sidebar.link title="Announcement " href='#' />
       
        @else
        <x-sidebar.link title="Announcement " href='/view-announcement-faculty' />
       
        @endif
    </x-sidebar.dropdown>


     
        

    @else
    <x-sidebar.link title="Admin Dashboard" href="{{ route('admin-dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>


    <x-sidebar.dropdown title="View" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <img src="/images/view.png" alt="view logo" class="w-8 ">
        </x-slot>

 
        <x-sidebar.link title="Faculties" href='/faculty-all-list' />
        <x-sidebar.link title="Students" href='/student-all-list' />
 
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Announcements" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <img src="/images/announcement-icon.png" alt="announcement logo" class="w-8 ">
        </x-slot>

        <x-sidebar.link title="Make Announcement" href='/add-announcement' />
        <x-sidebar.link title="View Announcements" href='/announcement-all-list' />
 
    </x-sidebar.dropdown>
    @endif


  
       
</x-perfect-scrollbar>