<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Firstquarter;
use App\Models\Secondquarter;
use App\Models\Thirdquarter;
use App\Models\Fourthquarter;
use App\Models\Firstquartersenior;
use App\Models\Secondquartersenior;
use App\Models\Thirdquartersenior;
use App\Models\Fourthquartersenior;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addStudent(){

        return view('pages.student.add-student');
    }


    public function studentAllList(){
        $students = Student::get();
        return view('pages.student.student-all-list', compact('students'));
    }

    public function studentAllFaculty(){
        $students = Student::get();
      
        return view('pages.faculty.student-all-faculty', compact('students'));
    }

    public function toDos(){

        return view('todos');
    }


    public function saveStudent(Request $request){
        $request-> validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'dateofbirth'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'grade'=>'required',
            'section'=>'required',
            'nationality'=>'required',
            'phone'=>'required',
            'fathersname'=>'required',
            'foccupation'=>'required',
            'mothersname'=>'required',
            'moccupation'=>'required',
            'address'=>'required',
            'photo'=>'required',
        ]);
    
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $middlename = $request->middlename;
        $dateofbirth = $request->dateofbirth;
        $gender = $request->gender;
        $religion = $request->religion;
        $grade = $request->grade;
        $section = $request->section;
        $nationality = $request->nationality;
        $phone = $request->phone;
        $fathersname = $request->fathersname;
        $foccupation = $request->foccupation;
        $mothersname = $request->mothersname;
        $moccupation = $request->moccupation;
        $address = $request->address;

        $stud = new Student();
        $stud->user_id = auth()->user()->id;
        $stud->lastname = $lastname;
        $stud->firstname = $firstname;
        $stud->middlename = $middlename;
        $stud->dateofbirth = $dateofbirth;
        $stud->gender = $gender;
        $stud->religion = $religion;
        $stud->grade = $grade;

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $stud->photo = $filename;
        }

        $stud->section = $section;
        $stud->nationality = $nationality;
        $stud->email = auth()->user()->email;
        $stud->phone = $phone;
        $stud->fathersname = $fathersname;
        $stud->foccupation = $foccupation;
        $stud->mothersname = $mothersname;
        $stud->moccupation = $moccupation;
        $stud->address = $address;



        $mothertongue = $request->mothertongue;
        $filipino= $request->filipino;
        $english = $request->english;
        $mathematics = $request->mathematics;
        $science = $request->science;
        $ap = $request->ap;
        $esp = $request->esp;
        $music = $request->music;
        $arts = $request->arts;
        $pe = $request->pe;
        $health = $request->health;
        $epp = $request->epp;
        $tle = $request->tle;


        $first = new Firstquarter();
        $first->user_id = $stud->user_id;
        $first-> mothertongue=$mothertongue;
        $first->filipino = $filipino;
        $first->english = $english;
        $first->mathematics = $mathematics;
        $first->science = $science;
        $first->ap = $ap;
        $first->esp = $esp;
        $first->music = $music;
        $first->arts = $arts;
        $first->pe = $pe;
        $first->health = $health;
        $first->epp= $epp;
        $first->tle= $tle;


        $mothertongue2 = $request->mothertongue2;
        $filipino2= $request->filipino2;
        $english2 = $request->english2;
        $mathematics2 = $request->mathematics2;
        $science2 = $request->science2;
        $ap2 = $request->ap2;
        $esp2 = $request->esp2;
        $music2 = $request->music2;
        $arts2 = $request->arts2;
        $pe2 = $request->pe2;
        $health2 = $request->health2;
        $epp2 = $request->epp2;
        $tle2 = $request->tle2;
       


        $second = new Secondquarter();
        $second->user_id = $stud->user_id;
        $second-> mothertongue2=$mothertongue2;
        $second->filipino2 = $filipino2;
        $second->english2 = $english2;
        $second->mathematics2 = $mathematics2;
        $second->science2 = $science2;
        $second->ap2 = $ap2;
        $second->esp2 = $esp2;
        $second->music2 = $music2;
        $second->arts2 = $arts2;
        $second->pe2 = $pe2;
        $second->health2 = $health2;
        $second->epp2= $epp2;
        $second->tle2= $tle2;


        $mothertongue3 = $request->mothertongue3;
        $filipino3= $request->filipino3;
        $english3 = $request->english3;
        $mathematics3 = $request->mathematics3;
        $science3 = $request->science3;
        $ap3 = $request->ap3;
        $esp3 = $request->esp3;
        $music3 = $request->music3;
        $arts3 = $request->arts3;
        $pe3 = $request->pe3;
        $health3 = $request->health3;
        $epp3 = $request->epp3;
        $tle3 = $request->tle3;


        $third = new Thirdquarter();
        $third->user_id = $stud->user_id;
        $third-> mothertongue3=$mothertongue3;
        $third->filipino3 = $filipino3;
        $third->english3 = $english3;
        $third->mathematics3 = $mathematics3;
        $third->science3 = $science3;
        $third->ap3 = $ap3;
        $third->esp3 = $esp3;
        $third->music3 = $music3;
        $third->arts3 = $arts3;
        $third->pe3 = $pe3;
        $third->health3 = $health3;
        $third->epp3= $epp3;
        $third->tle3= $tle3;


        $mothertongue4 = $request->mothertongue4;
        $filipino4= $request->filipino4;
        $english4 = $request->english4;
        $mathematics4 = $request->mathematics4;
        $science4 = $request->science4;
        $ap4 = $request->ap4;
        $esp4 = $request->esp4;
        $music4 = $request->music4;
        $arts4 = $request->arts4;
        $pe4 = $request->pe4;
        $health4 = $request->health4;
        $epp4 = $request->epp4;
        $tle4 = $request->tle4;


        $fourth = new Fourthquarter();
        $fourth->user_id = $stud->user_id;
        $fourth-> mothertongue4=$mothertongue4;
        $fourth->filipino4 = $filipino4;
        $fourth->english4 = $english4;
        $fourth->mathematics4 = $mathematics4;
        $fourth->science4 = $science4;
        $fourth->ap4 = $ap4;
        $fourth->esp4 = $esp4;
        $fourth->music4 = $music4;
        $fourth->arts4 = $arts4;
        $fourth->pe4 = $pe4;
        $fourth->health4 = $health4;
        $fourth->epp4= $epp4;
        $fourth->tle4= $tle4;

        // senior student subject

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

        $sen1 = new Firstquartersenior();
        $sen1->user_id = $stud->user_id;
        $sen1-> oral=$oral;
        $sen1->reading = $reading;
        $sen1->komunikasyon= $komunikasyon;
        $sen1->pagbasa = $pagbasa;
        $sen1->century = $century;
        $sen1->contemporary = $contemporary;
        $sen1->media = $media;
        $sen1->math = $math;
        $sen1->statistics = $statistics;
        $sen1->earth = $earth;
        $sen1->science = $science;
        $sen1->philosophy= $philosophy;
        $sen1->health= $health;
        $sen1->personal= $personal;
        $sen1->culture= $culture;


        $oral2 = $request->oral2;
        $reading2 = $request->reading2;
        $komunikasyon2 = $request->komunikasyon2;
        $pagbasa2 = $request->pagbasa2;
        $century2 = $request->century2;
        $contemporary2 = $request->contemporary2;
        $media2 = $request->media2;
        $math2 = $request->math2;
        $statistics2 = $request->statistics2;
        $earth2= $request->earth2;
        $science2 = $request->science2;
        $philosophy2 = $request->philosophy2;
        $health2 = $request->health2;
        $personal2 = $request->personal2;
        $culture2 = $request->culture2;

        $sen2 = new Secondquartersenior();
        $sen2->user_id = $stud->user_id;
        $sen2-> oral2=$oral2;
        $sen2->reading2 = $reading2;
        $sen2->komunikasyon2= $komunikasyon2;
        $sen2->pagbasa2 = $pagbasa2;
        $sen2->century2 = $century2;
        $sen2->contemporary2 = $contemporary2;
        $sen2->media2 = $media2;
        $sen2->math2 = $math2;
        $sen2->statistics2 = $statistics2;
        $sen2->earth2 = $earth2;
        $sen2->science2 = $science2;
        $sen2->philosophy2= $philosophy2;
        $sen2->health2= $health2;
        $sen2->personal2= $personal2;
        $sen2->culture2= $culture2;


        $oral3 = $request->oral3;
        $reading3 = $request->reading3;
        $komunikasyon3 = $request->komunikasyon3;
        $pagbasa3 = $request->pagbasa3;
        $century3 = $request->century3;
        $contemporary3 = $request->contemporary3;
        $media3 = $request->media3;
        $math3 = $request->math3;
        $statistics3 = $request->statistics3;
        $earth3= $request->earth3;
        $science3 = $request->science3;
        $philosophy3 = $request->philosophy3;
        $health3 = $request->health3;
        $personal3 = $request->personal3;
        $culture3 = $request->culture3;

        $sen3 = new Thirdquartersenior();
        $sen3->user_id = $stud->user_id;
        $sen3-> oral3=$oral3;
        $sen3->reading3 = $reading3;
        $sen3->komunikasyon3= $komunikasyon3;
        $sen3->pagbasa3 = $pagbasa3;
        $sen3->century3 = $century3;
        $sen3->contemporary3 = $contemporary3;
        $sen3->media3 = $media3;
        $sen3->math3 = $math3;
        $sen3->statistics3 = $statistics3;
        $sen3->earth3 = $earth3;
        $sen3->science3 = $science3;
        $sen3->philosophy3= $philosophy3;
        $sen3->health3= $health3;
        $sen3->personal3= $personal3;
        $sen3->culture3= $culture3;
        
        
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

        $sen4 = new Fourthquartersenior();
        $sen4->user_id = $stud->user_id;
        $sen4-> oral4=$oral4;
        $sen4->reading4 = $reading4;
        $sen4->komunikasyon4= $komunikasyon4;
        $sen4->pagbasa4 = $pagbasa4;
        $sen4->century4 = $century4;
        $sen4->contemporary4 = $contemporary4;
        $sen4->media4 = $media4;
        $sen4->math4 = $math4;
        $sen4->statistics4 = $statistics4;
        $sen4->earth4 = $earth4;
        $sen4->science4 = $science4;
        $sen4->philosophy4= $philosophy4;
        $sen4->health4= $health4;
        $sen4->personal4= $personal4;
        $sen4->culture4= $culture4;

      
        $stud->save();
        if($request->grade === '11' || $request->grade === '12' ){
            $sen1->save();
            $sen2->save();
            $sen3->save();
            $sen4->save();

        }else{
            $first->save();
            $second->save();
            $third->save();
            $fourth->save();

        }
        
        
    //    if($request->grade === '11' || $request->grade === '12' ){
    //     return redirect()->to('register-grade-senior1')->with('success','Information Added Succesfuly');

    //    }else{
    //     return redirect()->to('register-grade1')->with('success','Information Added Succesfuly');
    //    }

       return redirect()->to('dashboard')->with('success','Information Added Succesfuly');
        
       
    }


    public function editStudent($id){
        $data = Student::where('id', '=', $id)->first();
      
        return view('pages.student.edit-student', compact('data'));

    }


    public function studentSchedule(){

        $data = Student::where('user_id', '=', auth()->id())->first();
        return view('dashboard', compact('data'));

    }

    public function editStudentFaculty($user_id){
        $data = Student::where('user_id', '=', $user_id)->first();
      
        return view('pages.faculty.edit-student-faculty', compact('data'));

    }

    public function deleteStudent($id){
        Student::where('id', '=', $id)->delete();
        return redirect()->back()->with('success','Student deleted Succesfuly');
    }

    public function updateStudent(Request $request){
        $request-> validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'dateofbirth'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'grade'=>'required',
            'section'=>'required',
            'nationality'=>'required',
            'phone'=>'required',
            // 'email'=>'required',
            'fathersname'=>'required',
            'foccupation'=>'required',
            'mothersname'=>'required',
            'moccupation'=>'required',
            'address'=>'required',
        ]);

        $data = Student::find($request->id);

        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->dateofbirth = $request->dateofbirth;
        $data->gender = $request->gender;
        $data->religion = $request->religion;
        $data->grade = $request->grade;
        $data->section = $request->section;
        $data->nationality = $request->nationality;
        $data->phone = $request->phone;
        $data->email = auth()->user()->email;
        $data->fathersname = $request->fathersname;
        $data->foccupation = $request->foccupation;
        $data->mothersname = $request->mothersname;
        $data->moccupation = $request->moccupation;
        $data->address = $request->address;

        if($request->hasfile('photo'))
            {
                $destination = 'uploads/students/'.$data->photo;
                if(File::exists($destination))
                {
                File::delete($destination);
                }

                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/students/',$filename);
                $data->photo = $filename;
            }

        $data->save();
        return redirect()->back()->with('success','Student Updated Succesfuly');
       
        
    }


   

    public function showStudentData(){

        $data = Student::where('user_id', '=', auth()->id())->first();
        
        return view('pages.student.student-profile', compact('data'));

   
       
    }

    public function showStudentGrade(){

        $data = Student::where('user_id', '=', auth()->id())->first();


        return view('pages.student.view-grades', compact('data'));


       
    }



    public function myEmail(){

        return view('emails.myMail');
    }

    
    public function showStudentGradeTwo(){

        $data = Student::where('user_id', '=', auth()->id())->first();

        return view('pages.student.view-grades-two', compact('data'));
       
    }


    public function getTotalStudentsCount()
    {
        $totalStudentsCount = DB::table('students')->count();
    
        return view('admin-dashboard', ['totalStudentsCount' => $totalStudentsCount]);
    }


    public function getTotalMaleStudentsCount()
    {
        $totalMaleStudentsCount = DB::table('students')->where('gender', 'male')->count();

        return view('admin-dashboard', ['totalMaleStudentsCount' => $totalMaleStudentsCount]);
    }



}
