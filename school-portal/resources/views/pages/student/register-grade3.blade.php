@extends('layouts.home')
@section('content')


{{-- *****************************THIRD QUARTER****************************************** --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
<div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Third Quarter</h1>
    <form action="{{url('save-thirdquarter')}}" method="post" enctype="multipart/form-data">
      @csrf
      {{-- <input type="hidden" value="{{ $data->id }}" name="id" /> --}}
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="mothertongue3">Mother Tongue</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mothertongue3" id="mothertongue3" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="filipino3">Filipino</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="filipino3" id="filipino3" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="english3">English</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="english3" id="english3" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="mathematics3">Mathematics</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mathematics3" id="mathematics3" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="science3">Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science3" id="science3" hidden>
        </div>
  
        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="ap3">Araling Panlipunan</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="ap3" id="ap3" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="esp3">Edukasyon sa Pagpapalkatao</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="esp3" id="esp3" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="music3">Music</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="music3" id="music3" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="arts3">Arts</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="arts3" id="arts3" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="pe3">Physical Educataion</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pe3" id="pe3" hidden>
      </div>
  
      <div class="flex flex-col mb-2">
        <label class="  text-sm text-gray-900" for="health3">Health</label>
        <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health3" id="health3" hidden>
    </div>
    <div class="flex flex-col mb-2">
        <label class=" text-sm text-gray-900" for="epp3">Edukasyon Pantahana at Pangkabuhayan</label>
        <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="epp3" id="epp3" hidden>
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="tle3">Technology and Livelihood Education</label>
        <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="tle3" id="tle3" hidden>
    </div>
        
        <button class="block bg-gre hover:bg-blue-700 text-white uppercase text-sm mx-auto p-1 rounded" type="submit">Save</button>
    </form>
  </div>
</div>
  
  @endsection