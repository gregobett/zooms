<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }

    //     else if(auth()->user()->usertype == 'Admin')
    //     {
    //         return view('admin-dashboard');
    //     }

    //     else if(auth()->user()->usertype == 'Student')
    //     {
    //         return view('dashboard');
    //     }

    //     else 
    //     {
    //         return view('faculty-dashboard');
    //     }
    // }

    if (! $request->expectsJson()) {
        if (auth()->user()->usertype == 'Admin') {
            return route('admin-dashboard'); // Replace 'admin-dashboard' with the actual route name for the admin dashboard
        } else if (auth()->user()->usertype == 'Student') {
            return route('dashboard'); // Replace 'dashboard' with the actual route name for the student dashboard
        } else {
            return route('faculty-dashboard'); // Replace 'faculty-dashboard' with the actual route name for the faculty dashboard
        }
    }
}
}