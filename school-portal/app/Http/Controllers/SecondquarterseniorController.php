<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondquartersenior;
use App\Models\Student;

class SecondquarterseniorController extends Controller
{
    // public function saveSecondquarterSenior(Request $request){
    
    
    //     $oral2 = $request->oral2;
    //     $reading2 = $request->reading2;
    //     $komunikasyon2 = $request->komunikasyon2;
    //     $pagbasa2 = $request->pagbasa2;
    //     $century2 = $request->century2;
    //     $contemporary2 = $request->contemporary2;
    //     $media2 = $request->media2;
    //     $math2 = $request->math2;
    //     $statistics2 = $request->statistics2;
    //     $earth2= $request->earth2;
    //     $science2 = $request->science2;
    //     $philosophy2 = $request->philosophy2;
    //     $health2 = $request->health2;
    //     $personal2 = $request->personal2;
    //     $culture2 = $request->culture2;
    

    //     $grade = new Secondquartersenior();
    //     $grade->user_id = auth()->user()->id;
    //     $grade-> oral2=$oral2;
    //     $grade->reading2 = $reading2;
    //     $grade->komunikasyon2= $komunikasyon2;
    //     $grade->pagbasa2 = $pagbasa2;
    //     $grade->century2 = $century2;
    //     $grade->contemporary2 = $contemporary2;
    //     $grade->media2 = $media2;
    //     $grade->math2 = $math2;
    //     $grade->statistics2 = $statistics2;
    //     $grade->earth2 = $earth2;
    //     $grade->science2 = $science2;
    //     $grade->philosophy2= $philosophy2;
    //     $grade->health2= $health2;
    //     $grade->personal2= $personal2;
    //     $grade->culture2= $culture2;
    //     $grade->save();

    
    //         return redirect()->to('register-grade-senior3')->with('success','Second Quarter Subject Added Succesfuly');
     
    // }


    public function updateSecondquarterSenior(Request $request){
    
    
        $grade = Secondquartersenior::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->oral2 = $request->oral2;
        $grade->reading2 = $request->reading2;
        $grade->komunikasyon2= $request->komunikasyon2;
        $grade->pagbasa2 = $request->pagbasa2;
        $grade->century2= $request->century2;
        $grade->contemporary2 = $request->contemporary2;
        $grade->media2 = $request->media2;
        $grade->math2 = $request->math2;
        $grade->statistics2 = $request->statistics2;
        $grade->earth2 = $request->earth2;
        $grade->science2 = $request->science2;
        $grade->philosophy2 = $request->philosophy2;
        $grade->health2 = $request->health2;
        $grade->personal2 = $request->personal2;
        $grade->culture2 = $request->culture2;
        $grade->average2 = number_format(($grade->oral2 + $grade->reading2 + $grade->komunikasyon2 + $grade->pagbasa2 + $grade->century2 + $grade->contemporary2 + $grade->media2 + $grade->math2 + $grade->statistics2 + $grade->earth2 + $grade->science2 + $grade->philosophy2 + $grade->health2 + $grade->personal2 + $grade->culture2  )/15);
        $grade->save();

    
            return redirect()->back()->with('success','Grade Added Succesfuly');
     
    }


    public function RegisterGradeSenior2(){
        return view ('pages.student.register-grade-senior2');
    }

    public function editStudentGradeSenior2($user_id){
        $data = Secondquartersenior::where('user_id', '=', $user_id)->first();
        // $data = Student::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade-senior2', compact('data'));
    }


    public function viewGrades(){

        $data = Secondquartersenior::where('user_id', '=', auth()->id())->first();
        return view('pages.student.view-grades-senior-two', compact('data'));
     
       
    }
}
