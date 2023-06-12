@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FIRST QUARTER****************************************** --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden " >

  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4 ">

  <div class="flex flex-col justify-center items-center text-center ">
 
                <div class="max-w-sm font-bold font-sans text-lg">
            
                    You are a Junior Highschool Student
                </div>
                <div class="font-semibold max-w-lg mt-5 text-sm">
                These are your subjects. Just click the save button to save this subject for the first quarter
               
                </div>
              
            </div>
          
      <form action="{{url('save-firstquarter')}}" method="post" enctype="multipart/form-data"  id="my-form">
        @csrf
  
        {{-- <input type="hidden" value="{{ $data->$id }}" name="id" /> --}}

        <div class=" lg:flex  mb-2 mt-6">

        <div class="lg:mr-6 ">
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="mothertongue">Mother Tongue</label>
            
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mothertongue" id="mothertongue" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="filipino">Filipino</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="filipino" id="filipino" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="english">English</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="english" id="english" hidden>
       
          </div>

          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="mathematics">Mathematics</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mathematics" id="mathematics" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="science">Science</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science" id="science" hidden>
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="ap">Araling Panlipunan</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="ap" id="ap" hidden>
        </div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="esp">Edukasyon sa Pagpapakatao</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="esp" id="esp" hidden>
        </div>

        </div>

        <div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="music">Music</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="music" id="music" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="arts">Arts</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="arts" id="arts" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="pe">Physical Educataion</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pe" id="pe" hidden>
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="health">Health</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health" id="health" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="epp">Edukasyon Pantahanan at Pangkabuhayan</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="epp" id="epp" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900v bg-white shadow-xl text-lg p-4" for="tle">Technology and Livelihood Education</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="tle" id="tle" hidden>
      </div>

    </div>
</div>
     
          
       
          <div class="flex justify-center">
            <button class='mt-12 relative bg-gre text-white p-2 pl-12 pr-12 rounded-lg  hover:bg-red-900  text-xl font-bold overflow-hidden shadow-2xl' id="btn-submit" type="submit">
                Save First Quarter Subject
                <div class="ribbon bg-red-500  text-sm whitespace-no-wrap px-4">Save</div>
            </button>
            </div>
      </form>
  </div>
</div>




<style>
  .ribbon {
    position: absolute;
    top: 0;
    right: 0;
    width: 150px;
    height: 22px;
    margin-right: -50px;
    margin-top: 15px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Safari prior 9.0 */
    transform: rotate(45deg); /* Standard syntax */
  }
</style>
    



@endsection