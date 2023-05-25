<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondquartersenior;
use App\Models\Student;

class SecondquarterseniorController extends Controller
{
    public function saveSecondquarterSenior(Request $request){
    
    
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
    

        $grade = new Secondquartersenior();
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

    
            return redirect()->to('register-grade-senior3')->with('success','Second Quarter Subject Added Succesfuly');
     
    }


    public function updateSecondquarterSenior(Request $request){
    
    
        $grade = Secondquartersenior::find($request->id);
        $grade->user_id = $request->user_id;
        $grade->oral = $request->oral;
        $grade->reading = $request->reading;
        $grade->komunikasyon= $request->komunikasyon;
        $grade->pagbasa = $request->pagbasa;
        $grade->century= $request->century;
        $grade->contemporary = $request->contemporary;
        $grade->media = $request->media;
        $grade->math = $request->math;
        $grade->statistics = $request->statistics;
        $grade->earth = $request->earth;
        $grade->science = $request->science;
        $grade->philosophy = $request->philosophy;
        $grade->health = $request->health;
        $grade->personal = $request->personal;
        $grade->culture = $request->culture;
        $grade->average=intval('oral') + intval('reading')+ intval('komunikasyon')+ intval('pagbasa')+ intval('century')+ intval('contemporary')+ intval('media') + intval('math')+ intval('statistics')+ intval('earth')+ intval('science')+ intval('philosophy') + intval('health')+ intval('personal') + intval('century');
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
}
