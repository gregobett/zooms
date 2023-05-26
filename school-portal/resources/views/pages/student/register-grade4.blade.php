@extends('layouts.home')
@section('content')


{{-- *****************************FOURTH QUARTER****************************************** --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
<div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Fourth Quarter</h1>
    <form action="{{url('save-fourthquarter')}}" method="post" enctype="multipart/form-data">
      @csrf
      {{-- <input type="hidden" value="{{ $data->id }}" name="id" /> --}}
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="mothertongue4">Mother Tongue</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mothertongue4" id="mothertongue4" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="filipino4">Filipino</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="filipino4" id="filipino4" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="english4">English</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="english4" id="english4" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="mathematics4">Mathematics</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mathematics4" id="mathematics4" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="science4">Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science4" id="science4" hidden>
        </div>
  
        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="ap4">Araling Panlipunan</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="ap4" id="ap4" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="esp4">Edukasyon sa Pagpapalkatao</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="esp4" id="esp4" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="music4">Music</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="music4" id="music4" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="arts4">Arts</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="arts4" id="arts4" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="pe4">Physical Educataion</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pe4" id="pe4" hidden>
      </div>
  
      <div class="flex flex-col mb-2">
        <label class="  text-sm text-gray-900" for="health4">Health</label>
        <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health4" id="health4" hidden>
    </div>
    <div class="flex flex-col mb-2">
        <label class=" text-sm text-gray-900" for="epp4">Edukasyon Pantahana at Pangkabuhayan</label>
        <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="epp4" id="epp4" hidden>
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="tle4">Technology and Livelihood Education</label>
        <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="tle4" id="tle4" hidden>
    </div>

        <button class="block bg-gre hover:bg-blue-700 text-white uppercase text-sm mx-auto p-1 rounded" type="submit">Save</button>
    </form>
  </div>
  </div>
  
  
  @endsection