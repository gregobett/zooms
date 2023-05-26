<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdquarter;
use App\Models\Student;

class thirdquarterController extends Controller
{
    public function saveThirdquarter(Request $request){
    
    
        $mothertongue3 = $request->mothertongue3;
        $filipino3 = $request->filipino3;
        $english3 = $request->english3;
        $mathematics3 = $request->mathematics3;
        $science3 = $request->science3;
        $ap3 = $request->ap3;
        $esp3 = $request->esp3;
        $music3 = $request->music3;
        $arts3 = $request->arts3;
        $pe3= $request->pe3;
        $health3 = $request->health3;
        $epp3 = $request->epp3;
        $tle3 = $request->tle3;
    
        // $g = Firstquarter::where('user_id', '=', auth()->id())->first();
        $grade = new Thirdquarter();
        $grade->user_id = auth()->user()->id;
        $grade-> mothertongue3=$mothertongue3;
    
        $grade->filipino3 = $filipino3;
        $grade->english3 = $english3;
        $grade->mathematics3 = $mathematics3;
        $grade->science3 = $science3;
        $grade->ap3 = $ap3;
        $grade->esp3 = $esp3;
        $grade->music3 = $music3;
        $grade->arts3 = $arts3;
        $grade->pe3 = $pe3;
        $grade->health3 = $health3;
        $grade->epp3= $epp3;
        $grade->tle3= $tle3;
        $grade->save();

    
            return redirect()->to('register-grade4')->with('success','Third Quarter Subject Added Succesfuly');
     
    }


    public function updateThirdquarter(Request $request){
        $grade = Thirdquarter::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->mothertongue3 = $request->mothertongue3;
        $grade->filipino3 = $request->filipino3;
        $grade->english3 = $request->english3;
        $grade->mathematics3 = $request->mathematics3;
        $grade->science3= $request->science3;
        $grade->ap3 = $request->ap3;
        $grade->esp3 = $request->esp3;
        $grade->music3 = $request->music3;
        $grade->arts3 = $request->arts3;
        $grade->pe3 = $request->pe3;
        $grade->health3 = $request->health3;
        $grade->epp3 = $request->epp3;
        $grade->tle3 = $request->tle3;
        $grade->average3=number_format(($grade->mothertongue3 + $grade->filipino3 + $grade->english3 + $grade->mathematics3 + $grade->science3 + $grade->ap3 + $grade->esp3 + $grade->music3 + $grade->arts3 + $grade->pe3 + $grade->health3 + $grade->epp3 + $grade->tle3)/13);
        $grade->save();

        return redirect()->back()->with('success','Grade Added Succesfuly');
    }



    public function RegisterGrade3(){
        return view ('pages.student.register-grade3');
    }


    public function editStudentGrade3($user_id){
        $data = Thirdquarter::where('user_id', '=', $user_id)->first();
        // $data = Student::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade3', compact('data'));
    }


    public function viewGrades3(){

        $data = Thirdquarter::where('user_id', '=', auth()->id())->first();
        
        return view('pages.student.view-grades3', compact('data'));
    }


    // public function viewGeneralAverage3(){

    //     $data = Thirdquarter::where('user_id', '=', auth()->id())->first();
    //     return view('pages.student.view-general-average3', compact('data'));

    // }


}
