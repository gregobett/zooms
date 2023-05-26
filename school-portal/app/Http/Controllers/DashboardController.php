<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function FacultyDashboard()
    {
        return view('faculty-dashboard');

    }

    public function StudentDashboard()
    {
        return view('dashboard');

    }

    public function AdminDashboard()
    {
        return view('admin-dashboard');

    }


}
