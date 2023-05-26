<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstquarter;
use App\Models\Secondquarter;
use App\Models\Thirdquarter;
use App\Models\Fourthquarter;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class GeneralAverageController extends Controller
{

    public function averageall(){

        $stud = DB::table('students')
        ->join('firstquarter', 'students.user_id', '=', 'firstquarter.user_id')
        ->join('secondquarter', 'students.user_id', '=', 'secondquarter.user_id')
        ->join('thirdquarter', 'students.user_id', '=', 'thirdquarter.user_id')
        ->join('fourthquarter', 'students.user_id', '=', 'fourthquarter.user_id')
        // ->select('firstquarter.average1', 'secondquarter.average2', 'thirdquarter.average3', 'fourthquarter.average4')
        ->select('firstquarter.*','secondquarter.*','thirdquarter.*','fourthquarter.*','firstquarter.average1', 'secondquarter.average2', 'thirdquarter.average3', 'fourthquarter.average4')
        ->where('students.user_id', '=', auth()->id())
        ->get();

        return view('pages.student.ave', compact('stud'));
    }


  
}
