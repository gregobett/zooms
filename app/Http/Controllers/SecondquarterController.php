<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondquarter;
use App\Models\Student;

class SecondquarterController extends Controller
{
    public function saveSecondquarter(Request $request){
    
    
        $mothertongue = $request->mothertongue;
        $filipino = $request->filipino;
        $english = $request->english;
        $mathematics = $request->mathematics;
        $science = $request->science;
        $ap = $request->ap;
        $esp = $request->esp;
        $music = $request->music;
        $arts = $request->arts;
        $pe= $request->pe;
        $health = $request->health;
        $epp = $request->epp;
        $tle = $request->tle;
    
        // $g = Firstquarter::where('user_id', '=', auth()->id())->first();
        $grade = new Secondquarter();
        $grade->user_id = auth()->user()->id;
        $grade-> mothertongue=$mothertongue;
        $grade->filipino = $filipino;
        $grade->english = $english;
        $grade->mathematics = $mathematics;
        $grade->science = $science;
        $grade->ap = $ap;
        $grade->esp = $esp;
        $grade->music = $music;
        $grade->arts = $arts;
        $grade->pe = $pe;
        $grade->health = $health;
        $grade->epp= $epp;
        $grade->tle= $tle;
        $grade->save();

        return redirect()->to('register-grade3')->with('success','Second Quarter Subject Added Succesfuly');
    }


    public function updateSecondquarter(Request $request){
        $grade = Secondquarter::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->mothertongue = $request->mothertongue;
        $grade->filipino = $request->filipino;
        $grade->english = $request->english;
        $grade->mathematics = $request->mathematics;
        $grade->science= $request->science;
        $grade->ap = $request->ap;
        $grade->esp = $request->esp;
        $grade->music = $request->music;
        $grade->arts = $request->arts;
        $grade->pe = $request->pe;
        $grade->health = $request->health;
        $grade->epp = $request->epp;
        $grade->tle = $request->tle;
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
