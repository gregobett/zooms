@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FOURTH QUARTER****************************************** --}}
{{-- <h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6> --}}
<div class="flex justify-center items-center w-full bg-white dark:bg-[#222738] overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-2">Fourth Quarter</h1>
      
      <form action="{{url('update-fourthquarter')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="mothertongue4">Mother Tongue</label>
              <input value="{{$data->mothertongue4}}" class="border py-0 px-3 text-black" type="text" name="mothertongue4" id="mothertongue4" >
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="filipino4">Filipino</label>
              <input value="{{$data->filipino4}}" class="border py-0 px-3 text-black" type="text" name="filipino4" id="filipino4">
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="english4">English</label>
              <input value="{{$data->english4}}" class="border py-0 px-3 text-black" type="text" name="english4" id="english4">
          </div>
          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="mathematics4">Mathematics</label>
              <input value="{{$data->mathematics4}}" class="border py-0 px-3 text-black" type="text" name="mathematics4" id="mathematics4">
          </div>
          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="science4">Science</label>
              <input value="{{$data->science4}}" class="border py-0 px-3 text-black" type="text" name="science4" id="science4">
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="ap4">Araling Panlipunan</label>
            <input value="{{$data->ap4}}" class="border py-0 px-3 text-black" type="text" name="ap4" id="ap4">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="esp4">Edukasyon sa Pagpapalkatao</label>
            <input value="{{$data->esp4}}" class="border py-0 px-3 text-black" type="text" name="esp4" id="esp4">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="music4">Music</label>
            <input value="{{$data->music4}}" class="border py-0 px-3 text-black" type="text" name="music4" id="music4">
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="arts4">Arts</label>
            <input value="{{$data->arts4}}" class="border py-0 px-3 text-black" type="text" name="arts4" id="arts4">
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="pe4">Physical Educataion</label>
            <input value="{{$data->pe4}}" class="border py-0 px-3 text-black" type="text" name="pe4" id="pe4">
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="health4">Health</label>
          <input value="{{$data->health4}}" class="border py-0 px-3 text-black" type="text" name="health4" id="health4">
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="epp4">Edukasyon Pantahanan at Pangkabuhayan</label>
          <input value="{{$data->epp4}}" class="border py-0 px-3 text-black" type="text" name="epp4" id="epp4">
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="tle4">Technology and Livelihood Education</label>
          <input value="{{$data->tle4}}" class="border py-0 px-3 text-black mb-2" type="text" name="tle4" id="tle4">
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
