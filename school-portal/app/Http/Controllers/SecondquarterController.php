<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondquarter;
use App\Models\Student;

class SecondquarterController extends Controller
{
    public function saveSecondquarter(Request $request){
    
    
        $mothertongue2 = $request->mothertongue2;
        $filipino2 = $request->filipino2;
        $english2 = $request->english2;
        $mathematics2 = $request->mathematics2;
        $science2 = $request->science2;
        $ap2 = $request->ap2;
        $esp2 = $request->esp2;
        $music2 = $request->music2;
        $arts2 = $request->arts2;
        $pe2= $request->pe2;
        $health2 = $request->health2;
        $epp2 = $request->epp2;
        $tle2 = $request->tle2;
    
        // $g = Firstquarter::where('user_id', '=', auth()->id())->first();
        $grade = new Secondquarter();
        $grade->user_id = auth()->user()->id;
        $grade-> mothertongue2=$mothertongue2;
        $grade->filipino2 = $filipino2;
        $grade->english2 = $english2;
        $grade->mathematics2 = $mathematics2;
        $grade->science2 = $science2;
        $grade->ap2 = $ap2;
        $grade->esp2 = $esp2;
        $grade->music2 = $music2;
        $grade->arts2 = $arts2;
        $grade->pe2 = $pe2;
        $grade->health2 = $health2;
        $grade->epp2= $epp2;
        $grade->tle2= $tle2;
        $grade->save();

        return redirect()->to('register-grade3')->with('success','Second Quarter Subject Added Succesfuly');
    }


    public function updateSecondquarter(Request $request){
        $grade = Secondquarter::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->mothertongue2 = $request->mothertongue2;
        $grade->filipino2 = $request->filipino2;
        $grade->english2 = $request->english2;
        $grade->mathematics2 = $request->mathematics2;
        $grade->science2= $request->science2;
        $grade->ap2 = $request->ap2;
        $grade->esp2 = $request->esp2;
        $grade->music2 = $request->music2;
        $grade->arts2 = $request->arts2;
        $grade->pe2 = $request->pe2;
        $grade->health2 = $request->health2;
        $grade->epp2 = $request->epp2;
        $grade->tle2 = $request->tle2;
        $grade->average2=number_format(($grade->mothertongue2 + $grade->filipino2 + $grade->english2 + $grade->mathematics2 + $grade->science2 + $grade->ap2 + $grade->esp2 + $grade->music2 + $grade->arts2 + $grade->pe2 + $grade->health2 + $grade->epp2 + $grade->tle2)/13);
        $grade->save();

        return redirect()->back()->with('success','Grade Added Succesfuly');
    }


    public function RegisterGrade2(){
        return view ('pages.student.register-grade2');
    }


    public function editStudentGrade2($user_id){
        $data = Secondquarter::where('user_id', '=', $user_id)->first();
        // $data = Student::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade2', compact('data'));
    }


    public function viewGrades2(){

        $data = Secondquarter::where('user_id', '=', auth()->id())->first();
        
        return view('pages.student.view-grades2', compact('data'));
    }


}
