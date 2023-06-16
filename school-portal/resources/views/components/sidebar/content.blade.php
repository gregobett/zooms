<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    
    
    @if((Auth::user()->user_type === 'Student'))
    @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || 
    (Route::is('register-grade3')) || (Route::is('register-grade4')) || (Route::is('register-grade-senior1')) || 
    (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
        <x-sidebar.link title="Student Dashboard"  :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <img src="/images/dashboard.png" alt="dashboard logo" class="w-8 ">
            </x-slot>
        </x-sidebar.link>
    @else

        <x-sidebar.link title="Student Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <img src="/images/dashboard.png" alt="dashboard logo" class="w-8 ">
            </x-slot>
        </x-sidebar.link>
    @endif


    {{-- Students Profile Sidebar--}}
    <x-sidebar.dropdown title="Profile" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            <img src="/images/profile-icon.png" alt="Profile logo" class="w-8 ">
        </x-slot>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || 
        (Route::is('register-grade3')) || (Route::is('register-grade4')) || (Route::is('register-grade-senior1')) || 
        (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
            <x-sidebar.link title="Edit Info " href='#'/>
        @else
            <x-sidebar.link title="Edit Info " href='student-profile' />
        @endif
    </x-sidebar.dropdown>


    {{-- Students Grades Sidebar--}}
    <x-sidebar.dropdown title="Grades" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            <img src="/images/grade-icon.png" alt="Grade logo" class="w-8 ">
        </x-slot>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || 
        (Route::is('register-grade3')) || (Route::is('register-grade4')) || (Route::is('register-grade-senior1')) || 
        (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
            <x-sidebar.link title="My Grades " href='#' />
        @else
            <x-sidebar.link title="My Grades " href='/ave' />
        @endif

    </x-sidebar.dropdown>


    {{-- Students Announcement Sidebar--}}
    <x-sidebar.dropdown title="Announcement" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            <img src="/images/announcement-icon.png" alt="announcement logo" class="w-8 ">
        </x-slot>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || 
        (Route::is('register-grade3')) || (Route::is('register-grade4')) || (Route::is('register-grade-senior1')) || 
        (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
            <x-sidebar.link title="View Announcement " href='#' />
        @else
            <x-sidebar.link title="View Announcement " href='view-announcement' />
        @endif
    </x-sidebar.dropdown>


    {{-- Students Mail Sidebar--}}
    <x-sidebar.dropdown title="Mail" :active="Str::startsWith(request()->route()->uri(), 'buttons' )  ">
        <x-slot name="icon">
            <img src="/images/mail.png" alt="mail logo" class="w-8 ">
        </x-slot>
        @if((Route::is('add-student')) || (Route::is('register-grade1')) || (Route::is('register-grade2')) || 
        (Route::is('register-grade3')) || (Route::is('register-grade4')) || (Route::is('register-grade-senior1')) || 
        (Route::is('register-grade-senior2')) || (Route::is('register-grade-senior3')) || (Route::is('register-grade-senior4')))
            <x-sidebar.link title="Mail " href='#' />
        @else
            <x-sidebar.link title="Mail " href='/contactForm' />
        @endif
    </x-sidebar.dropdown>

        

    @elseif((Auth::user()->user_type === 'Faculty'))
        @if(Route::is('add-faculty'))
            <x-sidebar.link title="Faculty Dashboard"  :isActive="request()->routeIs('dashboard')">
                <x-slot name="icon">
                    <img src="/images/dashboard.png" alt="dashboard logo" class="w-8 ">
                </x-slot>
            </x-sidebar.link>
        @else
            <x-sidebar.link title="Faculty Dashboard" href="{{ route('faculty-dashboard') }}" :isActive="request()->routeIs('dashboard')">
                <x-slot name="icon">
                    <img src="/images/dashboard.png" alt="dashboard logo" class="w-8 "> 
                </x-slot>
            </x-sidebar.link>
        @endif


    {{-- Faculties Profile Sidebar--}}
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


    {{-- Faculties Student List Sidebar--}}
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


    {{-- Faculties Announcement--}}
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

    {{-- Admin Dashboard--}}
    <x-sidebar.link title="Admin Dashboard" href="{{ route('admin-dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- Admin View Sidebar--}}
    <x-sidebar.dropdown title="View" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" 
                stroke-linejoin="round" 
                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 
                0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </x-slot>
        <x-sidebar.link title="Faculties" href='/faculty-all-list' />
        <x-sidebar.link title="Students" href='/student-all-list' />
    </x-sidebar.dropdown>


    {{-- Admin Announcement Sidebar--}}
    <x-sidebar.dropdown title="Announcements" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" 
                stroke-linejoin="round" 
                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 
                1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 
                18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 
                0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 
                0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
            </svg>
        </x-slot>
            <x-sidebar.link title="Make Announcement" href='/add-announcement' />
            <x-sidebar.link title="View Announcements" href='/announcement-all-list' />
    </x-sidebar.dropdown>


    {{-- Admin Calendar Sidebar--}}
    <x-sidebar.dropdown title="Calendar" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" 
                stroke-linejoin="round" 
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 
                2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 
                0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 
                15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 
                15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 
                2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>
        </x-slot>
        <x-sidebar.link title="My Schedule" href='/fullcalender' />
    </x-sidebar.dropdown>


    {{-- Admin Todos Sidebar--}}
    <x-sidebar.dropdown title="Todos" :active="Str::startsWith(request()->route()->uri(), 'buttons' )">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" 
                stroke-linejoin="round" 
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 
                48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 
                00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 
                4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 
                0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 
                3h.008v.008H6.75V18z" />
            </svg>
        </x-slot>  
            <x-sidebar.link title="Create Todos " href='/todos' />
    </x-sidebar.dropdown>


    @endif

</x-perfect-scrollbar>