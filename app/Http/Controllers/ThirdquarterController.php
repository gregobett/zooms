<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdquarter;
use App\Models\Student;

class thirdquarterController extends Controller
{
    public function saveThirdquarter(Request $request){
    
    
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
        $grade = new Thirdquarter();
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

    
            return redirect()->to('register-grade4')->with('success','Third Quarter Subject Added Succesfuly');
     
    }


    public function updateThirdquarter(Request $request){
        $grade = Thirdquarter::find($request->id);
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

}
