<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstquarter;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class FirstquarterController extends Controller
{



    public function saveFirstquarter(Request $request){
    
    
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
        $grade = new Firstquarter();
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

    
            return redirect()->to('register-grade2')->with('success','Second Quarter Subject Added Succesfuly');
     
    }


    public function updateFirstquarter(Request $request){
    
    
        $grade = Firstquarter::find($request->id);
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
        // $grade->average=(number_format(($grade->mothertongue) + ($grade->filipino) + ($grade->english) + ($grade->mathematics) + ($grade->science) + ($grade->ap) + ($grade->esp) + ($grade->music) + ($grade->arts) + ($grade->pe) + ($grade->health) + ($grade->epp) + ($grade->tle))/13);
        $grade->average1=number_format(($grade->mothertongue + $grade->filipino + $grade->english + $grade->mathematics + $grade->science + $grade->ap + $grade->esp + $grade->music + $grade->arts + $grade->pe + $grade->health + $grade->epp + $grade->tle)/13);
        $grade->save();

    
            return redirect()->back()->with('success','Grade Added Succesfuly');
     
    }


 
    public function RegisterGrade1(){
        return view ('pages.student.register-grade1');
    }

    public function editStudentGrade1($user_id){
        $data = Firstquarter::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade1', compact('data'));
    }


    
    public function viewGrades(){

        $data = Firstquarter::where('user_id', '=', auth()->id())->first();
        return view('pages.student.view-grades', compact('data'));
     
       
    }


    // public function showStudentGrade(){

    //     $data = Student::where('user_id', '=', auth()->id())->first();
        
    //     return view('pages.student.view-grades', compact('data'));
    // }

 
 
}
