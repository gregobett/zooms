@extends('layouts.home')
@section('content')

 {{-- *****************************SECOND QUARTER****************************************** --}}
 <div class="flex justify-center items-center w-full bg-white overflow-hidden">
 <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Second Quarter</h1>
    <form action="{{url('save-secondquarter')}}" method="post" enctype="multipart/form-data">
      @csrf
      {{-- <input type="hidden" value="{{ $data->id }}" name="id" /> --}}
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="mothertongue2">Mother Tongue</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mothertongue2" id="mothertongue2" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="filipino2">Filipino</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="filipino2" id="filipino2" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="english2">English</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="english2" id="english2" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="mathematics2">Mathematics</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mathematics2" id="mathematics2" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="science2">Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science2" id="science2" hidden>
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="ap2">Araling Panlipunan</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="ap2" id="ap2" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="esp2">Edukasyon sa Pagpapalkatao</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="esp2" id="esp2" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="music2">Music</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="music2" id="music2" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="arts2">Arts</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="arts2" id="arts2" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="pe2">Physical Educataion</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pe2" id="pe2" hidden>
      </div>

      <div class="flex flex-col mb-2">
        <label class="  text-sm text-gray-900" for="health2">Health</label>
        <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health2" id="health2" hidden>
    </div>
    <div class="flex flex-col mb-2">
        <label class=" text-sm text-gray-900" for="epp2">Edukasyon Pantahana at Pangkabuhayan</label>
        <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="epp2" id="epp2" hidden>
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="tle2">Technology and Livelihood Education</label>
        <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="tle2" id="tle2" hidden>
    </div>
      
        
        <button class="block bg-gre hover:bg-blue-700 text-white uppercase text-sm mx-auto p-1 rounded" type="submit">Save</button>
    </form>
</div>
</div>
@endsection