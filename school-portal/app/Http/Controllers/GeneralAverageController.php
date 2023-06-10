<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


class GeneralAverageController extends Controller
{

    public function averageall(){

        // $stud = DB::table('students')
        // ->join('firstquarter', 'students.user_id', '=', 'firstquarter.user_id')
        // ->join('secondquarter', 'students.user_id', '=', 'secondquarter.user_id')
        // ->join('thirdquarter', 'students.user_id', '=', 'thirdquarter.user_id')
        // ->join('fourthquarter', 'students.user_id', '=', 'fourthquarter.user_id')
        // ->select('firstquarter.*','secondquarter.*','thirdquarter.*','fourthquarter.*','firstquarter.average1', 'secondquarter.average2', 'thirdquarter.average3', 'fourthquarter.average4')
        // ->where('students.user_id', '=', auth()->id())
        // ->get();

        return view('pages.student.ave');
    }



    public function showAverage(){

        $data = Student::where('user_id', '=', auth()->id())->first();


        return view('pages.student.ave', compact('data'));


       
    }

  
}
