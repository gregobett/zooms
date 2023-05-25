<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\File;

class AnnouncementController extends Controller
{
    public function announcementAllList()
    {
        $data = Announcement::get();
        return view('announcement-all-list', compact('data'));

    }

  
    public function announcementsfunc()
    {
        return view('add-announcement');

    }


    // public function viewAnnouncement()
    // {
    //     $querys = Announcement::latest('updated_at')->get();
  
    //     return view('view-announcement', compact('querys'));

    // }

    public function editAnnouncement($id)
    {
        $data = Announcement::where('id', '=', $id)->first();
        return view('edit-announcement', compact('data'));

    }


    public function saveAnnouncement(Request $request)
    {
        $request-> validate([
            'photo'=>'required',
            'title'=>'required',
            'message'=>'required'
        ]);

        $title = $request->title;
        $message = $request->message;


        $ann = new Announcement();

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/announcement/',$filename);
            $ann->photo = $filename;
        }
        $ann->title = $title;
        $ann->message = $message;
        $ann->save();

        return redirect()->back()->with('success','Announcement Posted Succesfuly');
    }


    public function updateAnnouncement(Request $request){
        $request-> validate([
            // 'photo'=>'required',
            'title'=>'required',
            'message'=>'required'

        ]);

        $data = Announcement::find($request->id);

        
        if($request->hasfile('photo'))
        {
            $destination = 'uploads/announcement/'.$data->photo;
            if(File::exists($destination))
            {
             File::delete($destination);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/announcement/',$filename);
            $data->photo = $filename;
        }


        $data->title = $request->title;
        $data->message = $request->message;
        $data->save();

        return redirect()->back()->with('success','Announcement Updated Succesfuly');

    }

    public function deleteAnnouncement($id){
        Announcement::where('id', '=', $id)->delete();
        return redirect()->to('announcement-all-list')->with('success','Announcement deleted Succesfuly');
    }


    public function studentHome(){

        $querys = Announcement::latest('updated_at')->get();
  
        return view('view-announcement', compact('querys'));
    }

    public function facultyHome(){

        $querys = Announcement::latest('updated_at')->get();

        return view('view-announcement-faculty', compact('querys'));

    }

}
