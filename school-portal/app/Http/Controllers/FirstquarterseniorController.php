<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstquartersenior;
use App\Models\Student;

class FirstquarterseniorController extends Controller
{
    public function saveFirstquarterSenior(Request $request){
    
    
        $oral = $request->oral;
        $reading = $request->reading;
        $komunikasyon = $request->komunikasyon;
        $pagbasa = $request->pagbasa;
        $century = $request->century;
        $contemporary = $request->contemporary;
        $media = $request->media;
        $math = $request->math;
        $statistics = $request->statistics;
        $earth= $request->earth;
        $science = $request->science;
        $philosophy = $request->philosophy;
        $health = $request->health;
        $personal = $request->personal;
        $culture = $request->culture;
    

        $grade = new Firstquartersenior();
        $grade->user_id = auth()->user()->id;
        $grade-> oral=$oral;
        $grade->reading = $reading;
        $grade->komunikasyon= $komunikasyon;
        $grade->pagbasa = $pagbasa;
        $grade->century = $century;
        $grade->contemporary = $contemporary;
        $grade->media = $media;
        $grade->math = $math;
        $grade->statistics = $statistics;
        $grade->earth = $earth;
        $grade->science = $science;
        $grade->philosophy= $philosophy;
        $grade->health= $health;
        $grade->personal= $personal;
        $grade->culture= $culture;
        $grade->save();

    
            return redirect()->to('register-grade-senior2')->with('success','First Quarter Subject Added Succesfuly');
     
    }



    public function updateFirstquarterSenior(Request $request){
    
    
        $gradesen = Firstquartersenior::find($request->id);
        $gradesen->user_id = $request->user_id;
        $gradesen->oral = $request->oral;
        $gradesen->reading = $request->reading;
        $gradesen->komunikasyon= $request->komunikasyon;
        $gradesen->pagbasa = $request->pagbasa;
        $gradesen->century= $request->century;
        $gradesen->contemporary = $request->contemporary;
        $gradesen->media = $request->media;
        $gradesen->math = $request->math;
        $gradesen->statistics = $request->statistics;
        $gradesen->earth = $request->earth;
        $gradesen->science = $request->science;
        $gradesen->philosophy = $request->philosophy;
        $gradesen->health = $request->health;
        $gradesen->personal = $request->personal;
        $gradesen->culture = $request->culture;
        $gradesen->average = number_format(($gradesen->oral + $gradesen->reading + $gradesen->komunikasyon + $gradesen->pagbasa + $gradesen->century + $gradesen->contemporary + $gradesen->media + $gradesen->math + $gradesen->statistics + $gradesen->earth + $gradesen->science + $gradesen->philosophy + $gradesen->health + $gradesen->personal + $gradesen->culture  )/15);
        $gradesen->save();

    
        // return redirect()->back()->with('success','Grade Added Succesfuly');
        return redirect()->to('register-grade-senior2')->with('success','Second Quarter Subject Added Succesfuly');
     
    }


    public function RegisterGradeSenior1(){
        return view ('pages.student.register-grade-senior1');
    }


    public function editStudentGradeSenior1($user_id){
        $data = Firstquartersenior::where('user_id', '=', $user_id)->first();

        return view('pages.faculty.edit-student-grade-senior1', compact('data'));
    }


    public function viewGrades(){

        $data = Firstquartersenior::where('user_id', '=', auth()->id())->first();
        return view('pages.student.view-grades-senior', compact('data'));
     
       
    }
}
