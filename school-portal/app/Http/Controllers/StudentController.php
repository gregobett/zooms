<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;

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

      
        $stud->save();

       if($request->grade === '11' || $request->grade === '12' ){
        return redirect()->to('register-grade-senior1')->with('success','Information Added Succesfuly');

       }else{
        return redirect()->to('register-grade1')->with('success','Information Added Succesfuly');
       }


        
       
    }


    public function editStudent($id){
        $data = Student::where('id', '=', $id)->first();
      
        return view('pages.student.edit-student', compact('data'));

    }


    public function studentSchedule(){

        $data = Student::where('user_id', '=', auth()->id())->first();
        return view('dashboard', compact('data'));

    }

    public function editStudentFaculty($id){
        $data = Student::where('id', '=', $id)->first();
      
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
