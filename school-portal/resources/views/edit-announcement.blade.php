@extends('layouts.home')
@section('content')	

<!-- component -->
<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white dark:bg-[#222738] sm:w-8/12 md:w-1/2 lg:w-5/12 shadow-xl">
      <h1 class="text-xl font-semibold flex items-center justify-center">Edit Announcements and Activity</h1>
      
      <form  method="post" action="{{url('update-announcement')}}" class="mt-6" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" value="{{ $data->id }}" name="id" />
   
        <div class="flex items-center justify-center ww-full mb-4">
            <img src="{{asset('uploads/announcement/'.$data->photo)}}"  alt="image" class="h-24 w-24 object-cover rounded-full">
        </div>

        <div class=" border-3 rounded-md bg-gre lg:border-2 dark:border">
            <label>
                <input type="file" class=" w-full text-md text-start text-gre p-2 
                file:mr-5 file:py-1 
                file:rounded-full file:border-0
                file:text-md file:font-medium
                file:bg-gre file:text-slate-50 dark:bg-[#222738] dark:border dark:file:bg-[#222738]
                hover:file:cursor-pointer hover:file:bg-gre
                hover:file:text-amber-700
                hover:bg-gre" id="photo" name="photo"/>
            </label>
        </div>

        <label for="title" class="block mt-2 text-xs font-semibold text-gray-600 dark:text-gray-100 uppercase">Title</label>
        <input id="title" value="{{$data->title}}" type="text" name="title"   class="block w-full p-3 mt-0 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
     

        <label for="message" class="block mt-2 text-xs font-semibold text-gray-600 uppercase dark:text-gray-100">Message</label>
        <textarea  class="block w-full p-3 mt-0 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="message">{{$data->message}}</textarea>
        
        <button type="submit" class="w-full py-3 mt-6 font-medium  text-white uppercase bg-gre  shadow-lg focus:outline-none hover:bg-gre hover:shadow-none hover:text-amber-700 rounded-md dark:bg-[#222738] dark:border">
            Update Announcement
        </button>

      </form>
    </div>
    @include('sweetalert::alert')
  </div>

@endsection