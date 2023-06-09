<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdquartersenior;
use App\Models\Student;

class ThirdquarterseniorController extends Controller
{
    public function saveThirdquarterSenior(Request $request){
    
    
        $oral3 = $request->oral3;
        $reading3 = $request->reading3;
        $komunikasyon3 = $request->komunikasyon3;
        $pagbasa3 = $request->pagbasa3;
        $century3 = $request->century3;
        $contemporary3 = $request->contemporary3;
        $media3 = $request->media3;
        $math3 = $request->math3;
        $statistics3= $request->statistics3;
        $earth3= $request->earth3;
        $science3 = $request->science3;
        $philosophy3 = $request->philosophy3;
        $health3 = $request->health3;
        $personal3 = $request->personal3;
        $culture3 = $request->culture3;
    

        $grade = new Thirdquartersenior();
        $grade->user_id = auth()->user()->id;
        $grade-> oral3=$oral3;
        $grade->reading3 = $reading3;
        $grade->komunikasyon3= $komunikasyon3;
        $grade->pagbasa3 = $pagbasa3;
        $grade->century3 = $century3;
        $grade->contemporary3 = $contemporary3;
        $grade->media3 = $media3;
        $grade->math3 = $math3;
        $grade->statistics3 = $statistics3;
        $grade->earth3 = $earth3;
        $grade->science3 = $science3;
        $grade->philosophy3= $philosophy3;
        $grade->health3= $health3;
        $grade->personal3= $personal3;
        $grade->culture3= $culture3;
        $grade->save();

    
            return redirect()->to('register-grade-senior4')->with('success','Third Quarter Subject Added Succesfuly');
     
    }


    public function updateThirdquarterSenior(Request $request){
    
    
        $grade = Thirdquartersenior::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->oral3 = $request->oral3;
        $grade->reading3 = $request->reading3;
        $grade->komunikasyon3= $request->komunikasyon3;
        $grade->pagbasa3 = $request->pagbasa3;
        $grade->century3= $request->century3;
        $grade->contemporary3 = $request->contemporary3;
        $grade->media3 = $request->media3;
        $grade->math3 = $request->math3;
        $grade->statistics3 = $request->statistics3;
        $grade->earth3 = $request->earth3;
        $grade->science3= $request->science3;
        $grade->philosophy3 = $request->philosophy3;
        $grade->health3 = $request->health3;
        $grade->personal3 = $request->personal3;
        $grade->culture3 = $request->culture3;
        $grade->average=intval('oral3') + intval('reading3')+ intval('komunikasyon3')+ intval('pagbasa3')+ intval('century3')+ intval('contemporary3')+ intval('media3') + intval('math3')+ intval('statistics3')+ intval('earth3')+ intval('science3')+ intval('philosophy3') + intval('health3')+ intval('personal3') + intval('century3');
        $grade->save();

    
            return redirect()->back()->with('success','Grade Added Succesfuly');
     
    }


    public function RegisterGradeSenior3(){
        return view ('pages.student.register-grade-senior3');
    }

    
    public function editStudentGradeSenior3($id){
        $data = Thirdquartersenior::where('id', '=', $id)->first();
        // $data = Student::where('user_id', '=', $user_id)->first();
        return view('pages.faculty.edit-student-grade-senior3', compact('data'));
    }


    public function viewGrades(){

        $data = Thirdquartersenior::where('user_id', '=', auth()->id())->first();
        return view('pages.student.view-grades-senior3', compact('data'));
     
       
    }
}
