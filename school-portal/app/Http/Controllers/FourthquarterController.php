<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fourthquarter;
use App\Models\Student;


class FourthquarterController extends Controller
{
    public function saveFourthquarter(Request $request){
    
    
        $mothertongue4 = $request->mothertongue4;
        $filipino4 = $request->filipino4;
        $english4 = $request->english4;
        $mathematics4 = $request->mathematics4;
        $science4 = $request->science4;
        $ap4 = $request->ap4;
        $esp4 = $request->esp4;
        $music4 = $request->music4;
        $arts4 = $request->arts4;
        $pe4= $request->pe4;
        $health4 = $request->health4;
        $epp4 = $request->epp4;
        $tle4 = $request->tle4;
    
        // $g = Firstquarter::where('user_id', '=', auth()->id())->first();
        $grade = new Fourthquarter();
        $grade->user_id = auth()->user()->id;
        $grade-> mothertongue4=$mothertongue4;
        $grade->filipino4 = $filipino4;
        $grade->english4 = $english4;
        $grade->mathematics4 = $mathematics4;
        $grade->science4 = $science4;
        $grade->ap4 = $ap4;
        $grade->esp4 = $esp4;
        $grade->music4 = $music4;
        $grade->arts4 = $arts4;
        $grade->pe4= $pe4;
        $grade->health4 = $health4;
        $grade->epp4= $epp4;
        $grade->tle4= $tle4;
        $grade->save();

    
            return redirect()->to('/dashboard')->with('success','Fourth Quarter Subject Added Succesfuly');
     
    }


    public function updateFourthquarter(Request $request){
        $grade = Fourthquarter::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->mothertongue4 = $request->mothertongue4;
        $grade->filipino4 = $request->filipino4;
        $grade->english4 = $request->english4;
        $grade->mathematics4 = $request->mathematics4;
        $grade->science4= $request->science4;
        $grade->ap4 = $request->ap4;
        $grade->esp4 = $request->esp4;
        $grade->music4 = $request->music4;
        $grade->arts4 = $request->arts4;
        $grade->pe4 = $request->pe4;
        $grade->health4 = $request->health4;
        $grade->epp4 = $request->epp4;
        $grade->tle4 = $request->tle4;
        $grade->average4=number_format(($grade->mothertongue4 + $grade->filipino4 + $grade->english4 + $grade->mathematics4 + $grade->science4 + $grade->ap4 + $grade->esp4 + $grade->music4 + $grade->arts4 + $grade->pe4 + $grade->health4 + $grade->epp4 + $grade->tle4)/13);
        $grade->save();

        return redirect()->back()->with('success','Grade Added Succesfuly');
    }

    public function RegisterGrade4(){
        return view ('pages.student.register-grade4');
    }


    public function editStudentGrade4($user_id){
        $data = Fourthquarter::where('user_id', '=', $user_id)->first();
        // $data = Student::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade4', compact('data'));
    }

    public function viewGrades4(){

        $data = Fourthquarter::where('user_id', '=', auth()->id())->first();
        
        return view('pages.student.view-grades4', compact('data'));
    }


    // public function viewGeneralAverage4(){

    //     $data = Fourthquarter::where('user_id', '=', auth()->id())->first();
    //     return view('pages.student.view-general-average4', compact('data'));

    // }


}
