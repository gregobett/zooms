@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************Third QUARTER****************************************** --}}
{{-- <h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6> --}}
<div class="flex justify-center items-center w-full bg-white dark:bg-[#222738] overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Third Quarter</h1>
      <form action="{{url('update-thirdquarter')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="mothertongue3">Mother Tongue</label>
              <input value="{{$data->mothertongue3}}" class="border py-0 px-3 text-black" type="text" name="mothertongue3" id="mothertongue3" >
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="filipino3">Filipino</label>
              <input value="{{$data->filipino3}}" class="border py-0 px-3 text-black" type="text" name="filipino3" id="filipino3">
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="english3">English</label>
              <input value="{{$data->english3}}" class="border py-0 px-3 text-black" type="text" name="english3" id="english3">
          </div>

          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="mathematics3">Mathematics</label>
              <input value="{{$data->mathematics3}}" class="border py-0 px-3 text-black" type="text" name="mathematics3" id="mathematics3">
          </div>

          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="science3">Science</label>
              <input value="{{$data->science3}}" class="border py-0 px-3 text-black" type="text" name="science3" id="science3">
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="ap3">Araling Panlipunan</label>
            <input value="{{$data->ap3}}" class="border py-0 px-3 text-black" type="text" name="ap3" id="ap3">
        </div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="esp3">Edukasyon sa Pagpapalkatao</label>
            <input value="{{$data->esp3}}" class="border py-0 px-3 text-black" type="text" name="esp3" id="esp3">
        </div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="music3">Music</label>
            <input value="{{$data->music3}}" class="border py-0 px-3 text-black" type="text" name="music3" id="music3">
        </div>

        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="art3s">Arts</label>
            <input value="{{$data->arts3}}" class="border py-0 px-3 text-black" type="text" name="arts3" id="arts3">
        </div>

        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="pe3">Physical Educataion</label>
            <input value="{{$data->pe3}}" class="border py-0 px-3 text-black" type="text" name="pe3" id="pe3">
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="health3">Health</label>
          <input value="{{$data->health3}}" class="border py-0 px-3 text-black" type="text" name="health3" id="health3">
      </div>

      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="epp3">Edukasyon Pantahanan at Pangkabuhayan</label>
          <input value="{{$data->epp3}}" class="border py-0 px-3 text-black" type="text" name="epp3" id="epp3">
      </div>

      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="tle3">Technology and Livelihood Education</label>
          <input value="{{$data->tle3}}" class="border py-0 px-3 text-black mb-2" type="text" name="tle3" id="tle3">
      </div>

       
        
          
         
        <div class="flex-between items-center justify-center">
            <button class="block w-full bg-gre  text-white text-sm mx-auto p-1 hover:text-amber-700 rounded py-1.5 mb-2 px-5" type="submit">Save</button>
            <a href="{{url('edit-student-faculty/'.$data->id )}}" type="btn" class="bg-gre text-sm  text-slate-50  hover:text-amber-700 border-gray-200 rounded py-1 px-5 shadow-lg flex  justify-center">Back</a>
        </div>
          
      </form>
      {{-- <a href="javascript:history.back()" class="btn btn-default">Back</a> --}}
     
  </div>

</div>

@endsection
