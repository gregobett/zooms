<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
   public function addFaculty(){

      return view('pages.faculty.add-faculty');
  }

  public function editFaculty($id){
    $data = Faculty::where('id', '=', $id)->first();
    return view('pages.faculty.edit-faculty', compact('data'));
  }


  public function facultySchedule(){

    $data = Faculty::where('user_id', '=', auth()->id())->first();
    return view('dashboard', compact('data'));

}


  public function facultyAllList(){
    $data = Faculty::get();
    return view('pages.faculty.faculty-all-list', compact('data'));
  }


  public function saveFaculty(Request $request){
   $request-> validate([
       'lastname'=>'required',
       'firstname'=>'required',
       'middlename'=>'required',
      //  'email'=>'required|email',
       'photo'=>'required',
       'religion'=>'required',
       'gender'=>'required',
       'dateofbirth'=>'required',
       'phone'=>'required',
       'nationality'=>'required',
       'address'=>'required',
       'grade'=>'required',
       'section'=>'required',
   ]);
   // dd($request->all());
   $lastname = $request->lastname;
   $firstname = $request->firstname;
   $middlename = $request->middlename;
   $email = $request->email;
   $gender = $request->gender;
   $religion = $request->religion;
   $dateofbirth = $request->dateofbirth;
   $phone = $request->phone;
   $nationality = $request->nationality;
   $address = $request->address;
   $grade= $request->grade;
   $section = $request->section;



   $teach = new Faculty();
   $teach->user_id = auth()->user()->id;
   $teach->lastname = $lastname;
   $teach->firstname = $firstname;
   $teach->middlename = $middlename;
   $teach->email = auth()->user()->email;
  
   if($request->hasfile('photo'))
   {
       $file = $request->file('photo');
       $extension = $file->getClientOriginalExtension();
       $filename = time().'.'.$extension;
       $file->move('uploads/faculty/',$filename);
       $teach->photo = $filename;
   }
   
   $teach->gender = $gender;
   $teach->religion = $religion;
   $teach->dateofbirth = $dateofbirth;
   $teach->phone = $phone;
   $teach->nationality = $nationality;
   $teach->address = $address;
   $teach->grade = $grade;
   $teach->section = $section;
   $teach->save();

   return redirect()->to('faculty-dashboard')->with('success','Teacher Added Succesfuly');
}


public function updateFaculty(Request $request){
    $request-> validate([
        'lastname'=>'required',
        'firstname'=>'required',
        'middlename'=>'required',
        // 'email'=>'required|email',
        
        // 'photo'=>'required',
        'gender'=>'required',
        'religion'=>'required',
        'gender'=>'required',
        'dateofbirth'=>'required',
       
        'phone'=>'required',
        'nationality'=>'required',
        'address'=>'required',

        'grade'=>'required',
        'section'=>'required',
    ]);

    $data = Faculty::find($request->id);
    $data->lastname = $request->lastname;
    $data->firstname = $request->firstname;
    $data->middlename = $request->middlename;
    $data->email = $request->email;

    if($request->hasfile('photo'))
    {
        $destination = 'uploads/faculty/'.$data->photo;
        if(File::exists($destination))
        {
         File::delete($destination);
        }

        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/faculty/',$filename);
        $data->photo = $filename;
    }


   
    $data->gender = $request->gender;
    $data->religion = $request->religion;
    $data->dateofbirth = $request->dateofbirth;
    $data->phone = $request->phone;
    $data->nationality = $request->nationality;
    $data->address = $request->address;
    $data->grade= $request->grade;
    $data->section = $request->section;
    $data->save();

  
    return redirect()->back()->with('success','Teacher Updated Succesfuly');
   
    
    }


    public function showFacultyData(){

        $data = Faculty::where('user_id', '=', auth()->id())->first();
        
        return view('pages.faculty.faculty-profile', compact('data'));
    }


    public function getTotalFacultiesCount()
    {
        $totalFacultiesCount = DB::table('faculties')->count();
    
        return view('admin-dashboard', ['totalFacultiesCount' => $totalFacultiesCount]);
    }

}
