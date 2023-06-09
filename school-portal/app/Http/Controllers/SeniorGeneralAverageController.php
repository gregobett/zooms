<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstquartersenior;
use App\Models\Secondquartersenior;
use App\Models\Thirdquartersenior;
use App\Models\Fourthquartersenior;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class SeniorGeneralAverageController extends Controller
{
    public function averageall(){

        $studs = DB::table('students')
        ->join('firstquartersenior', 'students.user_id', '=', 'firstquartersenior.user_id')
        ->join('secondquartersenior', 'students.user_id', '=', 'secondquartersenior.user_id')
        ->join('thirdquartersenior', 'students.user_id', '=', 'thirdquartersenior.user_id')
        ->join('fourthquartersenior', 'students.user_id', '=', 'fourthquartersenior.user_id')
        ->select('firstquartersenior.*','secondquartersenior.*','thirdquartersenior.*','fourthquartersenior.*','firstquartersenior.average', 'secondquartersenior.average2', 'thirdquartersenior.average3', 'fourthquartersenior.average4')
        ->where('students.user_id', '=', auth()->id())
        ->get();

        return view('pages.student.ave-senior', compact('studs'));
    }

}
