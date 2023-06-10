<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


class SeniorGeneralAverageController extends Controller
{
  

    public function averageall2(){

        return view('pages.student.ave-senior');
    }


}
