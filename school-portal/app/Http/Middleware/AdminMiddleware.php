<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(auth()->user()->user_type === 'Student')
       {
        // return redirect()->to('student/profile');
        return redirect()->back();
       }
       else if (auth()->user()->user_type === 'Faculty'){
        // return redirect()->to('teacher/home');
        return redirect()->back();
       }
       else
       {
        return $next($request);
       }
       
    }
}
