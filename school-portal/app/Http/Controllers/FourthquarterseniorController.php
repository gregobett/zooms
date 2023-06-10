<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fourthquartersenior;
use App\Models\Student;

class FourthquarterseniorController extends Controller
{
    public function saveFourthquarterSenior(Request $request){
    
    
        $oral4 = $request->oral4;
        $reading4 = $request->reading4;
        $komunikasyon4 = $request->komunikasyon4;
        $pagbasa4 = $request->pagbasa4;
        $century4 = $request->century4;
        $contemporary4 = $request->contemporary4;
        $media4 = $request->media4;
        $math4 = $request->math4;
        $statistics4 = $request->statistics4;
        $earth4= $request->earth4;
        $science4 = $request->science4;
        $philosophy4 = $request->philosophy4;
        $health4 = $request->health4;
        $personal4 = $request->personal4;
        $culture4 = $request->culture4;
    

        $grade = new Fourthquartersenior();
        $grade->user_id = auth()->user()->id;
        $grade-> oral4=$oral4;
        $grade->reading4 = $reading4;
        $grade->komunikasyon4= $komunikasyon4;
        $grade->pagbasa4 = $pagbasa4;
        $grade->century4 = $century4;
        $grade->contemporary4 = $contemporary4;
        $grade->media4 = $media4;
        $grade->math4 = $math4;
        $grade->statistics4 = $statistics4;
        $grade->earth4 = $earth4;
        $grade->science4 = $science4;
        $grade->philosophy4= $philosophy4;
        $grade->health4= $health4;
        $grade->personal4= $personal4;
        $grade->culture4= $culture4;
        $grade->save();

    
            return redirect()->to('dashboard')->with('success','Fourth Quarter Subject Added Succesfuly');
     
    }

    public function updateFourthquarterSenior(Request $request){
    
    
        $grade = Fourthquartersenior::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->oral4 = $request->oral4;
        $grade->reading4 = $request->reading4;
        $grade->komunikasyon4= $request->komunikasyon4;
        $grade->pagbasa4 = $request->pagbasa4;
        $grade->century4= $request->century4;
        $grade->contemporary4 = $request->contemporary4;
        $grade->media4 = $request->media4;
        $grade->math4 = $request->math4;
        $grade->statistics4 = $request->statistics4;
        $grade->earth4 = $request->earth4;
        $grade->science4 = $request->science4;
        $grade->philosophy4 = $request->philosophy4;
        $grade->health4 = $request->health4;
        $grade->personal4 = $request->personal4;
        $grade->culture4 = $request->culture4;
        $grade->average = number_format(($grade->oral4 + $grade->reading4 + $grade->komunikasyon4 + $grade->pagbasa4 + $grade->century4 + $grade->contemporary4 + $grade->media4 + $grade->math4 + $grade->statistics4 + $grade->earth4 + $grade->science4 + $grade->philosophy4 + $grade->health4 + $grade->personal4 + $grade->culture4  )/15);
        $grade->save();

    
            return redirect()->back()->with('success','Grade Added Succesfuly');
     
    }


    public function RegisterGradeSenior4(){
        return view ('pages.student.register-grade-senior4');
    }


    public function editStudentGradeSenior4($user_id){
        $data = Fourthquartersenior::where('user_id', '=', $user_id)->first();
        // $data = Student::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade-senior4', compact('data'));
    }


    public function viewGrades(){
        $data = Fourthquartersenior::where('user_id', '=', auth()->id())->first();
        return view('pages.student.view-grades-senior4', compact('data'));
     
       
    }
}
