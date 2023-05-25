@extends('admin-dashboard')
@section('content')	

<!-- component -->
<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white dark:bg-[#222738] sm:w-8/12  md:w-1/2 lg:w-5/12 shadow-xl">
      <h1 class="text-xl font-semibold flex items-center justify-center">Create Announcements and Activity</h1>
      
      <form  method="post" action="{{url('save-announcement')}}" class="mt-6 shadow-xl" enctype="multipart/form-data">
        @csrf
     
        <div class=" rounded-md bg-blue-900 ">
            <label>
                <input type="file" class=" w-full text-md text-grey-500 p-2 text-blue-900
                file:mr-5 pl-6 file:py-1 file:px-18
                file:rounded-full file:border-0
                file:text-md file:font-medium
                file:bg-blue-900 file:text-slate-50
                hover:file:cursor-pointer hover:file:bg-blue-800
                hover:file:text-white-700
                hover:bg-blue-800" id="photo" name="photo" required>
            </label>
            </div>

        <label for="title" class="block mt-2 text-xs font-semibold text-gray-600 dark:text-gray-100 uppercase">Title</label>
        <input id="title" value="{{old('title')}}" type="text" name="title"   class="block w-full p-3 mt-0 text-gray-700 bg-gray-200  appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
     

        <label for="message" class="block mt-2 text-xs font-semibold text-gray-600 dark:text-gray-100 uppercase">Message</label>
        <textarea  class="block w-full p-3 mt-0 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="message" required>{{old('message')}}</textarea>
        
        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-blue-900  shadow-lg focus:outline-none hover:bg-blue-700 hover:shadow-none  rounded-md">
          Create Announcement
        </button>

      </form>
    </div>
    @include('sweetalert::alert')
  </div>

@endsection