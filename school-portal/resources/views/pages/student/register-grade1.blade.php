@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FIRST QUARTER****************************************** --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">First Quarter</h1>
      <form action="{{url('save-firstquarter')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
        {{-- <input type="hidden" value="{{ $data->$id }}" name="id" /> --}}
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="mothertongue">Mother Tongue</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mothertongue" id="mothertongue" hidden>
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="filipino">Filipino</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="filipino" id="filipino" hidden>
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="english">English</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="english" id="english" hidden>
          </div>
          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="mathematics">Mathematics</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mathematics" id="mathematics" hidden>
          </div>
          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="science">Science</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science" id="science" hidden>
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="ap">Araling Panlipunan</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="ap" id="ap" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="esp">Edukasyon sa Pagpapalkatao</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="esp" id="esp" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="music">Music</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="music" id="music" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="arts">Arts</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="arts" id="arts" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="pe">Physical Educataion</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pe" id="pe" hidden>
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="health">Health</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health" id="health" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="epp">Edukasyon Pantahana at Pangkabuhayan</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="epp" id="epp" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="tle">Technology and Livelihood Education</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="tle" id="tle" hidden>
      </div>
     
          
          <button class="block bg-gre hover:bg-blue-700 text-white uppercase text-sm mx-auto p-1 rounded" id="btn-submit" type="submit" >Save</button>
      </form>
  </div>
</div>


@endsection