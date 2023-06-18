@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************SECOND QUARTER****************************************** --}}
{{-- <h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6> --}}
<div class="flex justify-center items-center w-full bg-white dark:bg-[#222738] overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Second Quarter</h1>
      <form action="{{url('update-secondquarter')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />

          <div class="flex mb-4 shadow-lg">
              <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="mothertongue2">Mother Tongue</label>
              <input value="{{$data->mothertongue2}}" class="border py-0 w-24 text-black" type="text" name="mothertongue2" id="mothertongue2" >
          </div>
          <div class="flex mb-4 shadow-lg">
              <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="filipino2">Filipino</label>
              <input value="{{$data->filipino2}}" class="border py-0 w-24 text-black" type="text" name="filipino2" id="filipino2">
          </div>
          <div class="flex mb-4 shadow-lg">
              <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="english2">English</label>
              <input value="{{$data->english2}}" class="border py-0 w-24 text-black" type="text" name="english2" id="english2">
          </div>
          <div class="flex mb-4 shadow-lg">
              <label class="w-full p-1 pl-2  bg-gray-200 font-bold text-sm text-gray-900" for="mathematics2">Mathematics</label>
              <input value="{{$data->mathematics2}}" class="border py-0 w-24 text-black" type="text" name="mathematics2" id="mathematics2">
          </div>
          <div class="flex mb-4 shadow-lg">
              <label class="w-full p-1 pl-2  bg-gray-200 font-bold text-sm text-gray-900" for="science2">Science</label>
              <input value="{{$data->science2}}" class="border py-0 w-24 text-black" type="text" name="science2" id="science2">
          </div>

          <div class="flex mb-4 shadow-lg">
            <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="ap2">Araling Panlipunan</label>
            <input value="{{$data->ap2}}" class="border py-0 w-24 text-black" type="text" name="ap2" id="ap2">
        </div>
        <div class="flex mb-4 shadow-lg">
            <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="esp2">Edukasyon sa Pagpapalkatao</label>
            <input value="{{$data->esp2}}" class="border py-0 w-24 text-black" type="text" name="esp2" id="esp2">
        </div>
        <div class="flex mb-4 shadow-lg">
            <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="music2">Music</label>
            <input value="{{$data->music2}}" class="border py-0 w-24 text-black" type="text" name="music2" id="music2">
        </div>
        <div class="flex mb-4 shadow-lg">
            <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="arts2">Arts</label>
            <input value="{{$data->arts2}}" class="border py-0 w-24 text-black" type="text" name="arts2" id="arts2">
        </div>
        <div class="flex mb-4 shadow-lg">
            <label class="w-full p-1 pl-2  bg-gray-200 font-bold text-sm text-gray-900" for="pe2">Physical Educataion</label>
            <input value="{{$data->pe2}}" class="border py-0 w-24 text-black" type="text" name="pe2" id="pe2">
        </div>

        <div class="flex mb-4 shadow-lg">
          <label class="w-full p-1 pl-2  bg-gray-200 font-bold  text-sm text-gray-900" for="health2">Health</label>
          <input value="{{$data->health2}}" class="border py-0 w-24 text-black" type="text" name="health2" id="health2">
      </div>
      <div class="flex mb-4 shadow-lg">
          <label class="w-full p-1 pl-2  bg-gray-200 font-bold text-sm text-gray-900" for="epp2">Edukasyon Pantahanan at Pangkabuhayan</label>
          <input value="{{$data->epp2}}" class="border py-0 w-24 text-black" type="text" name="epp2" id="epp2">
      </div>
      <div class="flex mb-4 shadow-lg">
          <label class="w-full p-1 pl-2  bg-gray-200 font-bold text-sm text-gray-900" for="tle2">Technology and Livelihood Education</label>
          <input value="{{$data->tle2}}" class="border py-0 w-24 text-black" type="text" name="tle2" id="tle2">
      </div>
       
        
       
        <div class="flex-between items-center justify-center">
            <button class="block w-full bg-gre  text-white text-sm mx-auto p-1 hover:text-amber-700 rounded py-1.5 mb-2 px-5" type="submit">Save</button>
            <a href="{{url('edit-student-faculty/'.$data->user_id )}}" type="btn" class="bg-gre text-sm  text-slate-50  hover:text-amber-700 border-gray-200 rounded py-1 px-5 shadow-lg flex  justify-center">Back</a>
        </div>
          
      </form>
     
  </div>

</div>

@endsection
